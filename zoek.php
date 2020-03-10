<?php 
  include 'connect.php';
  $sql = "SELECT * FROM `todossub` WHERE todoID = $_POST[id] AND titel LIKE '%$_POST[query]%' ";
  echo $sql;
  if ($conn->query($sql) === TRUE) {
    exit();
  }
$conn->close();
?>