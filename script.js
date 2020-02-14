$(function () {
  $(".subEdit").hide();
  $(".editSubField").hide();
  $(".cancelSub").hide();
  $(".saveSub").hide();
  $(".editField").hide();
  $(".editBtn").hide();
  $("#noteEdit").hide();
  $(".editCancel").hide();
  $("#newNote").on("click", function () {
    $("#noteEdit").show();
  })

  $(".editBtn").on("click", function () {
    var titel = '#titeledit' + this.id
    var beschrijving = '#beschrijvingedit' + this.id
    data = {
      'id': this.id,
      'titel': $(titel).val(),
      'beschrijving': $(beschrijving).val()
    }
    $.post('edit.php', data, function (response) {
      window.location = 'index.php'
    });
  })

  $(".deleteSub").on("click", function () {
    data = {
      'id': this.id
    }
    $.post('deleteSub.php', data, function (response) {
      window.location = 'index.php'
    });
  })

    $(".saveSub").on("click", function () {
      var titel = '.editSubField' + this.id
      data = {
        'id': this.id,
        'titel': $(titel).val()
      }
      $.post('editSub.php', data, function (response) {
        window.location = 'index.php'
      });
    })

  $(".buttona").on("click", function () {
    data = {
      'id': this.id
    }
    $.post('delete.php', data, function (response) {
      window.location = 'index.php'
    });
  })

  $(".editSub").on("click", function(){
    $(this).hide();
    $("#list" + this.id).hide();
    $(".editSubField"+this.id).show();
    $(".cancelSub"+this.id).show();
    $(".saveSub"+this.id).show();
    $("#subEdit" + this.id).val($(`#list${this.id}`).text())
  })

  $(".cancelSub").on("click", function() {
    $(this).hide();
    $(".editSub").show();
    $(".saveSub").hide();
    $(".editSubField"+this.id).hide();
    $("#list"+this.id).show();
  })

  $(".newSub").on("click", function () {
    $(".subEdit" + this.id).show();
  })

  $(".editCancel").on("click", function () {
    $(`.newSub${this.id}`).show();
    $('.buttonb').prop("disabled", false)
    $(this).hide();
    $(".editBtn").hide();
    $(".buttonb").show();
    $(`#titel-${this.id}`).show()
    $(`#beschrijving-${this.id}`).show()
    $(".editField").hide();
  })

  $(".buttonb").on("click", function () {
    $(`.newSub${this.id}`).hide()
    $('.buttonb').prop("disabled", true)
    $(this).hide();
    $(`.dataText${this.id}`).hide()
    $(`.editField${this.id}`).show();
    $(`.edit${this.id}`).show();
    $(`.cancel${this.id}`).show();
    $(`#titeledit${this.id}`).val($(`#titel-${this.id}`).text())
    $(`#beschrijvingedit${this.id}`).val($(`#beschrijving-${this.id}`).text())
  })
});