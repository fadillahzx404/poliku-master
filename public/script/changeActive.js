$(document).ready(function () {
  $("input[name='changeActivated']").click(function () {
    var radioActivated1 = $("input[id='btncheck1']:checked");
    var radioActivated2 = $("input[id='btncheck2']:checked");

    if (radioActivated1) {
      document.getElementById("active_change").submit();
    } else if (radioActivated2) {
      document.getElementById("active_change").submit();
    }
  });
});
