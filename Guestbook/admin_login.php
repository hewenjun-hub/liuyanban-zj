<?php
header("content-type:text/html;charset=utf8");
  $userName=$_POST['userName'];
  $password=$_POST['password'];
 include 'conn.php';
 $rs=mysql_query("select * from admins where adminName='$userName' and adminPwd='$password'");
 $num=mysql_num_rows($rs);
 if($num>0){
	 setcookie("userName",$userName);
	 setcookie(md5("login"),md5("success".$userName."apple"));
	 echo '{"status":"10001","msg":"success"}';
 }else{
	 echo '{"status":"20001","msg":"登录失败"}';
 }
 mysql_close($conn);
?>