<?php
	
	require("connect.php");
	$query=$_GET["query"];
	$result=mysql_query($query);
	$data=array();
	if(!mysql_error()){
		header('Content-type: application/json');
		while($row=mysql_fetch_assoc($result) ){
		$data[]=$row;
		}

		echo json_encode($data);
	}

	mysql_close();
?>