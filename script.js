$(function () {
  $(".editField").hide();
  $(".editBtn").hide();
  $("#noteEdit").hide();
  $(".editCancel").hide();
  $("#newNote").on("click", function () {
    $("#noteEdit").show();
  })

  $(".buttona").on("click", function () {
    data = {
      'id': this.id
    }
    $.post('delete.php', data, function (response) {
      window.location = 'index.php'
    });
  })

  $(".editCancel").on("click", function () {
    $(this).hide();
    $(".editBtn").hide();
    $(".buttonb").show();
    $(".dataText").show();
    $(".editField").hide();
  })

  $(".buttonb").on("click", function () {
    $(this).hide();
    $(".dataText").hide()
    $(".editField").show();
    $(".editCancel").show();
    $(".editBtn").show();
    $(`#titeledit${this.id}`).val($(`#titel-${this.id}`).text())
    $(`#beschrijvingedit${this.id}`).val($(`#beschrijving-${this.id}`).text())
  })
});