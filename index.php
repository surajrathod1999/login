<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("reg");

if(isset($_REQUEST["submit"]))
{
	$user=$_REQUEST["user"];
	$pass=$_REQUEST["pass"];
	$query=mysql_query("select * from user where user='user' && pass='$pass'");
	$rowcount=mysql_num_rows(query);
	if($rowcount==true)
	{
		$_SESSION["user"]=$user;
		header('location:welcome.php');
	}
	else
	{
		echo "your username and password is wrong";
	}
}