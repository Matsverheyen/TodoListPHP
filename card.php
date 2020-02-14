      <?php
include 'connect.php';
$sql2 = "SELECT * FROM `todossub` WHERE todoID = $id";
$res = $conn->query($sql2);
?>
    <div class="col-md-12" id="<?=$id?>">
      <div class="jumbotron">
      <div id="buttonmenu"><button id="<?=$id?>" type="button" class="round buttona btn btn-danger"><i class="fas fa-times"></i></button></div>
      <button id="<?=$id?>" type="button" class="edit<?=$id?> editBtn btn btn-success"><i class="fas fa-save"></i> Save</button>
      <button id="<?=$id?>" type="button" class="cancel<?=$id?> editCancel btn btn-danger"><i class="fas fa-times"></i> Cancel</button>
        <div class="container">
          <h1 class="display-3 dataText<?=$id?>" id="titel-<?=$id?>"><?=$titel?><button id="<?=$id?>" type="button" class="ml-5 buttonb btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</button></h1>
          <input type="text" class="mt-3 editField editField<?=$id?> form-control" id="titeledit<?=$id?>" value="">
          <p class="lead dataText<?=$id?>" id="beschrijving-<?=$id?>"><?=$beschrijving?></p>
          <input type="text" class="mt-3 editField editField<?=$id?> form-control" id="beschrijvingedit<?=$id?>" value="">
          <button id="<?=$id?>" class="newSub<?=$id?> newSub btn btn-primary">Nieuwe Subtaak</button>
                <div id="<?=$id?>" class="subEdit<?=$id?> subEdit">
      <form action="addSub.php" method="post">
        <div class="form-group">
          <label for="formGroupExampleInput">Titel</label>
          <input type="text" class="form-control" id="titel" name="titel" placeholder="titel">
          <input type="hidden" id="todoID" name="todoID" value="<?=$id?>">
        </div>
        <input class="btn btn-primary" type="submit">
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
}
?>
          </ul>
        </div>
      </div>
    </div>