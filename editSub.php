<?php 
  include 'connect.php';
  $sql = "UPDATE `todossub` SET titel = '$_POST[titel]' WHERE id='$_POST[id]'";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
?>