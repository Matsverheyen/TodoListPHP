<?php 
  include 'connect.php';
  $sql = "INSERT INTO `todossub` (titel, todoID) VALUES ('$_POST[titel]', '$_POST[todoID]')";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
?>