$(function () {
  $("#noteEdit").hide()
  $("#newNote").on("click", function() {
    $("#noteEdit").show()
  })

  $(".buttona").on("click", function() {
    data = { 'id': this.id }
    $.post('delete.php', data, function (response) {
      alert("action performed successfully");
    });
  })
});

