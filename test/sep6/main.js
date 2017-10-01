window.onload = startup;
function startup() {
  document.getElementById("btnCalc").onclick = calc;
   // canvas
   var ctx = document.getElementById("canvas").getContext("2d");
   ctx.beginPath();
   ctx.moveTo(50, 100);
   ctx.lineTo(300, 250);
   ctx.stroke
}

function calc() {
  var hours = parseFloat(document.getElementById("txtHours").value.replace("," , "."));
  var pay = parseFloat(document.getElementById("txtPay").value.replace("," , "."));
  var total = hours * pay;

  document.getElementById("output").innerHMTL = "blue";
  /*
  document.getElementById("output").innerHMTL = total.toFixed(1) + " " + "kroner";
  */
}
