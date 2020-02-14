<?php 
  include 'connect.php';
  $sql = "INSERT INTO `todos` (titel, beschrijving) VALUES ('$_POST[titel]', '$_POST[beschrijving]')";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
?>