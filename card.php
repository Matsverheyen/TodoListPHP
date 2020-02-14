      <?php
include 'connect.php';
$sql2 = "SELECT * FROM `todossub` WHERE todoID = $id";
$res = $conn->query($sql2);
?>
    <div class="col-md-12" id="<?=$id?>">
      <div class="jumbotron">
      <button id="buttona<?=$id?>" type="button" class="buttona btn btn-danger">Delete</button>
      <button id="<?=$id?>" type="button" class="buttonb btn btn-primary">Edit</button>
      <button id="<?=$id?>" type="button" class="edit<?=$id?> editBtn btn btn-success">Save</button>
      <button id="<?=$id?>" type="button" class="cancel<?=$id?> editCancel btn btn-danger">Cancel</button>
        <div class="container">
          <h1 class="display-3 dataText<?=$id?>" id="titel-<?=$id?>"><?=$titel?></h1>
          <input type="text" class="editField editField<?=$id?>" id="titeledit<?=$id?>" value="">
          <p class="lead dataText<?=$id?>" id="beschrijving-<?=$id?>"><?=$beschrijving?></p>
          <input type="text" class="editField editField<?=$id?>" id="beschrijvingedit<?=$id?>" value="">
          <button id="<?=$id?>" class="newSub btn btn-primary">New</button>
                <div id="subEdit">
      <form action="addSub.php" method="post">
        <div class="form-group">
          <label for="formGroupExampleInput">Titel</label>
          <input type="text" class="form-control" id="titel" name="titel" placeholder="titel">
          <input type="hidden" id="todoID" name="todoID" value="<?=$id?>">
        </div>
        <input type="submit">
      </form>
    </div>
          <ul class="list-group">
    <?php 
if($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        $id = $row["id"];
        $titel = $row["titel"];
        include 'sub.php';
    }
} else {
    echo "0 results";
}
?>
          </ul>
        </div>
      </div>
    </div>