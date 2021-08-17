$(document).ready(function () {
  $("#create-shop").submit(function (event) {
    event.preventDefault();

    var form = $(this);
    var formData = form.serialize();

    $("#name_error").html("");
    $("#description_error").html("");

    $.ajax({
      url: "create.php",
      method: "POST",
      data: formData,
      dataType: "json",
      encode: true,
      success: function (data) {
        if (data.success === false) {
          if (data.message.name !== "") {
            //display error
            $("#name_error").css("display", "block").html(data.message.name);
          }
          if (data.message.description !== "") {
            //display error
            $("#description_error")
              .css("display", "block")
              .html(data.message.description);
          }
          if (data.message.price !== "") {
            //display error
            $("#price_error").css("display", "block").html(data.message.price);
          }
        } else {
          $("#ajax_msg")
            .css("display", "block")
            .delay(3000)
            .slideUp(300)
            .html(data.message);
          document.getElementById("create-shop").reset();
        }
      }
    });
  });

  $("#task-list").load("read.php");
});

function edit(div) {
  div.style.border = "1px solid lavender";
  div.style.padding = "5px";
  div.style.background = "white";
  div.contentEditable = true;
}

function update(target, id, column) {
  var data = target.textContent;
  target.style.border = "none";
  target.style.padding = "0px";
  target.style.background = "#ececec";
  target.contentEditable = false;

  $.ajax({
    url: "update.php",
    method: "POST",
    data: { data: data, id: id, column: column },
    success: function (data) {
      $("#ajax_msg")
        .css("display", "block")
        .delay(3000)
        .slideUp(300)
        .html(data);
    }
  });
}

function deleteShop(taskId) {
  if (confirm("確定刪除")) {
    $.ajax({
      url: "delete.php",
      method: "POST",
      data: { id: taskId },
      success: function (data) {
        $("#ajax_msg")
          .css("display", "block")
          .delay(3000)
          .slideUp(300)
          .html(data);
      }
    });

    // $("#shop-list").load("read.php");
    window.location.replace("List.php?page=1");
  }

  return false;
}
