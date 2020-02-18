<?php 
  include 'connect.php';
  $sql = "UPDATE `todos` SET active = NOT active WHERE id='$_POST[id]'";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
?>