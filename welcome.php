<?php
session_start();

if($_SESSION["user"]==true)
{
	echo "welcome"." ".$_SESSION["user"];
}
else
{
	header('location:index.php');
}

?>
<a href="logout.php">Logout</a>
