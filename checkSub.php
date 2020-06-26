<?php 
  include 'connect.php';
  $sql = "UPDATE `todossub` SET active = NOT active WHERE id='$_POST[id]'";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
?>