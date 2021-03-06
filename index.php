<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc3b8b1cce.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="./script.js"></script>
    <link rel="stylesheet" href="style.css">
  <title>Todo List</title>
</head>

<body>
<?php 
include 'connect.php';
$query = $_POST['query'];
if (isset($_POST['sort']) AND $_POST['sort'] == 0 AND $_POST['filter'] == 0) {
  $sql = "SELECT * FROM `todos`";
  $result = $conn->query($sql);
} else if (isset($_POST['sort']) AND isset($query)) {
  $sql = "SELECT * FROM `todos` WHERE titel LIKE '%$_POST[query]%' ORDER BY titel ASC";
  $result = $conn->query($sql);
} else if (isset($_POST['filter'])) {
  $sql = "SELECT * FROM `todos` WHERE active = 1";
  $result = $conn->query($sql);
} else if (isset($_POST['sort'])) {
  $sql = "SELECT * FROM `todos` ORDER BY titel ASC";
  $result = $conn->query($sql);
} else if (isset($query)) {
  $sql = "SELECT * FROM `todos` WHERE titel LIKE '%$_POST[query]%'";
  $result = $conn->query($sql);
} else {
  $sql = "SELECT * FROM `todos`";
  $result = $conn->query($sql);
}
?>
  <div class="container mt-4">
  <button class="btn btn-primary mb-4" id="newNote"><i class="fas fa-pencil-alt"></i> New</button>
  <form action="" method="POST">
  <input type="text" name="query" id="query" placeholder="Zoek" class="mt-3 mb-3 form-control">
  <input type="submit" id="<?=$id?>" value="zoek" class="btn btn-primary"></input>
  <input type="hidden" name="sort" value="1">
  <input type="submit" id="<?=$id?>" value="sorteer" class="btn btn-primary"></input>
  </form>
  <form action="" method="POST">
  <input type="hidden" name="filter" value="filter">
  <input type="submit" id="<?=$id?>" value="Filter op nog te doen" class="filter btn btn-primary"></input></form>
  <form action="" method="POST">
  <button class="btn btn-primary resetFilter" name="sort" value="0">Reset filters</button>
  </form>
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
        <input class="btn btn-success" type="submit" value="Opslaan">
      </form>
    </div>
    <?php 
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $titel = $row["titel"];
        $beschrijving= $row["beschrijving"];
        $active = $row["active"];
        include 'card.php';
    }
}
?>

  </div>
</body>

</html>