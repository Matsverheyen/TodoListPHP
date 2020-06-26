
<div class="topborder<?=$active?> jumbotron shadow mt-4">
<h1 id="list<?=$id?>"><?php echo htmlspecialchars($titel)?></h1>
<input type="text" class="editSubField editSubField<?=$id?>" id="subEdit<?=$id?>" value="">
<div class="list-group-append">
    <button id="<?=$id?>" class="checkSub btn btn-success" type="button"><i class="fas fa-check"></i></button>
    <button id="<?=$id?>" class="deleteSub btn btn-danger" type="button"><i class="fas fa-times"></i></button>
    <button id="<?=$id?>" class="editSub btn btn-primary" type="button"><i class="fas fa-pencil-alt"></i></button>
    <button id="<?=$id?>" class="saveSub<?=$id?> saveSub btn btn-success" type="button">Save</button>
    <button id="<?=$id?>" class="cancelSub<?=$id?> cancelSub btn btn-danger" type="button">Cancel</button>
  </div>
  </div>