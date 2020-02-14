$(function () {
  $("#subEdit").hide();
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

  $(".buttona").on("click", function () {
    data = {
      'id': this.id
    }
    $.post('delete.php', data, function (response) {
      window.location = 'index.php'
    });
  })

  $(".newSub").on("click", function() {
$("#subEdit").show();
  })

  $(".editCancel").on("click", function () {
    console.log(this.id)
    $('.buttonb').prop("disabled", false)
    $(this).hide();
    $(".editBtn").hide();
    $(".buttonb").show();
    $(`#titel-${this.id}`).show()
    $(`#beschrijving-${this.id}`).show()
    $(".editField").hide();
  })

  $(".buttonb").on("click", function () {
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