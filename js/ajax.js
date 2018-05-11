    $(document).ready(function () {

$("#verify_otp").click(function () {
    var name = $("#name").val();
    var mobile = $("#mobile").val();

data = {

      mobile: mobile,
	  name: name,

    };
  $.post("send.php", data, function (data) {
    $("#result").html(data);

  });


});
});
