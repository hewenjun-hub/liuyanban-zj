<?php 
$page=$_POST['page'];
include 'conn.php';
$rs=mysql_query("select * from message");
$num=mysql_num_rows($rs);
$index=ceil($num/5);
if($page<4){
	$page=3;
if($index<5){
	if($index==4){
		$page=2;
	}
	if($index==3){
		$page=1;
	}
	if($index==2){
		$page=0;
	}
	}
	}else{
		if($page<$index-2){
		$page=$page;
		}else{
			$page=$index-2;
		}	
	}
	if($index<2){
		$page=(-1);
	}
echo '{"status":"10001","msg":"success","data":"'.$index.'","num":"'.$num.'","page":"'.$page.'"}';
mysql_free_result($rs);
mysql_close($conn);	
?>