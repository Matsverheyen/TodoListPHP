<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <title>Todo List</title>
</head>

<body>
  <?php
include 'connect.php';
$sql = "SELECT * FROM `todos`";
$result = $conn->query($sql);
?>
  <div class="container mt-4">
  <button class="btn btn-primary" id="newNote">new</button>
      <div id="noteEdit">
      <form action="add.php" method="post">
        <div class="form-group">
          <label for="formGroupExampleInput">Titel</label>
          <input type="text" class="form-control" id="titel" name="titel" placeholder="titel">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Beschrijving</label>
          <input type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="beschrijving">
        </div>
        <input type="submit">
      </form>
    </div>
    <?php 
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $titel = $row["titel"];
        $beschrijving= $row["beschrijving"];
        include 'card.php';
    }
} else {
    echo "0 results";
}
?>

  </div>
    <script src="./script.js"></script>
</body>

</html>