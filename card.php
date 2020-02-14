    <div class="col-md-12" id="<?=$id?>">
      <div class="jumbotron">
      <button id="<?=$id?>" type="button" class="buttona btn btn-danger">Delete</button>
      <button id="<?=$id?>" type="button" class="buttonb btn btn-primary">Edit</button>
      <button id="<?=$id?>" type="button" class="editBtn btn btn-success">Save</button>
      <button id="<?=$id?>" type="button" class="editCancel btn btn-danger">Cancel</button>
        <div class="container">
          <h1 class="display-3 dataText" id="titel-<?=$id?>"><?=$titel?></h1>
          <input type="text" class="editField" id="titeledit<?=$id?>" value="">
          <p class="lead dataText" id="beschrijving-<?=$id?>"><?=$beschrijving?></p>
          <input type="text" class="editField" id="beschrijvingedit<?=$id?>" value="">
          <ul class="list-group">
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </div>