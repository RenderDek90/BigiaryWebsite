<?php

include 'Connect.php';

if(isset($_POST['submit'])){
     //post records
     $time = date("Y-m-d H:i:s");
     $name = mysqli_real_escape_string($config, $_POST['name']);
     $title = mysqli_real_escape_string($config, $_POST['headline']);
     $story = mysqli_real_escape_string($config, $_POST['story']);
 
     $sql = "SELECT * FROM diary WHERE [Name]='$name' && Story='$story' && Title='$title'";
     $result = mysqli_query($config, $sql);
 
     //database insert SQL Code
     $insert = "INSERT INTO diary(Name, Date, Story, Title) VALUES ('$name', '$time', '$story', '$title')";
 
     //insert database
     $result = mysqli_query($config, $insert);
     header('location:index.php');   
}

?>