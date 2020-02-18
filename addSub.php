<?php 
  include 'connect.php';
  if (empty($_POST[titel])) {
    echo 'Geen titel opgegeven'; 
  } else {
  $sql = "INSERT INTO `todossub` (titel, todoID) VALUES ('$_POST[titel]', '$_POST[todoID]')";
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
}
?>