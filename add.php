<?php 
  include 'connect.php';
  if (empty($_POST['titel'])) {
    echo 'Geen titel opgegeven';
  } elseif (empty($_POST['beschrijving'])) {
        echo 'Geen beschrijving opgegeven';
  } else {
    $sql = "INSERT INTO `todos` (titel, beschrijving) VALUES ('$_POST[titel]', '$_POST[beschrijving]')";
    if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit();
  }
$conn->close();
  }
?>