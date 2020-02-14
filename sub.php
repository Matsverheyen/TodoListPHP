
<li id="list<?=$id?>" class="list-group-item"><?=$titel?></li>
<input type="text" class="editSubField editSubField<?=$id?>" id="subEdit<?=$id?>" value="">
<div class="list-group-append">
    <button id="<?=$id?>" class="deleteSub btn btn-danger" type="button">Delete</button>
    <button id="<?=$id?>" class="editSub btn btn-primary" type="button">Edit</button>
    <button id="<?=$id?>" class="saveSub<?=$id?> saveSub btn btn-success" type="button">Save</button>
    <button id="<?=$id?>" class="cancelSub<?=$id?> cancelSub btn btn-danger" type="button">Cancel</button>

  </div>