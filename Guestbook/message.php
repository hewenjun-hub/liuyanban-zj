<?php
header("content-type:text/html;charset=utf-8");

$faceName=$_FILES['face']['name'];
$faceSize=$_FILES['face']['size'];
$faceKz=strstr($faceName,'.');
$faceNameLs=$_FILES['face']['tmp_name'];
$author=$_POST['author'];
$title=$_POST['title'];
$content=$_POST['content'];
if($faceSize<512000){
	if(strstr('.jpg.gif.png',$faceKz)){
		$Fname="img/".time().$faceName;
		move_uploaded_file($faceNameLs,$Fname);
		include 'conn.php';
		$rs=mysql_query("insert into message(author,title,content,face) values('$author','$title','$content','$Fname')");
		if($rs){
			echo '{"status":"10001","msg":"success","data":"'.$Fname.'"}';
		}else{
			echo '{"status":"20001","msg":"留言失败"}';
		}
		 mysql_close($conn);
	}else{
		echo '{"status":"30001","msg":"文件格式不是图片格式!"}';
	}
}else{
	echo '{"status":"20001","msg":"文件大小超过500K!"}';
}
?>