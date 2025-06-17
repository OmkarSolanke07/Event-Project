<?php
  include "db.php";

    $con= mysqli_connect($server,$username,$password)

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());

    }
   $name = $_POST[`name`];
   $email=$_POST[`email`];
   $massage =$_POST[`message`];
   $sql = "INSERT INTO `event` ( `name`, `email`, `message`) VALUES ( '$name`,`$email`,`$message');"
?>


