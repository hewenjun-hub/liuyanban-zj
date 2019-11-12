<?php 
$page=$_POST['page'];
include 'conn.php';
$rs=mysql_query("select * from message");
$info=mysql_data_seek($rs,($page-1)*5);
$str='{"status":"10001","msg":"success","page":"'.$page.'","data":[';
for($i=0;$i<=4;$i++){
	if($info=mysql_fetch_array($rs,MYSQLI_ASSOC)){
		$str.=json_encode($info).',';
	}
}
	$str=substr($str,0,strlen($str)-1).']}';
	echo $str;
	mysql_free_result($rs);
		mysql_close($conn);	
?>