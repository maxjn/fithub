$(document).ready(function () {
  $("#bmi_btn").click(function () {
    var height = $("[name='height']").val();
    var weight = $("[name='weight']").val();
    var bmi = weight / (height * height);
    $("#bmi_show").text(bmi.toFixed(2));
  });
});
