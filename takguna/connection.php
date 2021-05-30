<?php

function db_conn()
{
$hostname="localhost";
$database="qms";
$username="root";
$password="";

$conn=mysql_connect($hostname, $username, $password);
if(!$conn)
return false;
if(!mysql_select_db($database))
return false;
return $conn;
}
?>
