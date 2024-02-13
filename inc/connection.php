<?php 
function dbconnect()
{
	static $connect=null;
	if ($connect===null) {
		$connect=mysqli_connect('172.20.0.167','ETU002629','ACQLdKLGZo7K','db_p16_ETU002629');
	}
	return $connect;
}
?>