<?php


$Server = "localhost";
$Username = "root";
$Password = "";
$Database = "blogiary";

$config =  mysqli_connect($Server, $Username, $Password, $Database);

$sqlquery = "SELECT * FROM diary";
$result = mysqli_query($config, $sqlquery);

?>
