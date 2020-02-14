<?php 
  include 'connect.php';
  $sql = "UPDATE `todos` SET titel = '$_POST[titel]', beschrijving = '$_POST[beschrijving]' WHERE id='$_POST[id]'";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
?>