window.onload = startup;
function startup() {
  //Oppgave 1
  document.getElementById("btnHello").onclick = msgHello;
  document.getElementById("btnGoodbye").onclick = msgGoodbye;
  //Oppgave 2
  document.getElementById("btnTrue1").onclick = alertTrue1;
  document.getElementById("btnTrue2").onclick = alertTrue2;
  document.getElementById("btnTrue3").onclick = alertTrue3;
  document.getElementById("btnFalse1").onclick = alertFalse1;
  document.getElementById("btnFalse2").onclick = alertFalse2;
  document.getElementById("btnFalse3").onclick = alertFalse3;
  //Oppgave 5
  var ctx = document.getElementById("canvas").getContext("2d");
  ctx.fillStyle = "white";
  ctx.fillRect(50,150,300,150);

  ctx.beginPath();
  ctx.moveTo(20,150);
  ctx.lineTo(200,20);
  ctx.lineTo(380,150);
  ctx.closePath();
  ctx.fill();

  ctx.fillStyle = "#222";
  ctx.fillRect(220,220,60,80);
  ctx.fillRect(140,240,20,20);
  ctx.fillRect(110,240,20,20);
  ctx.fillRect(140,210,20,20);
  ctx.fillRect(110,210,20,20);

  //Ekstra 2
  ctxArt = document.getElementById("canvasArt").getContext("2d");
  document.getElementById("btnPause").onclick = pause;
  document.getElementById("btnCanvasSize").onclick = canvasSize;
  document.getElementById("btnSingleShape").onclick = singleShape;
  setTimeout(drawRandom, 1000/fps)
}
//Oppgave 1
function msgHello() {
  document.getElementById("pGreeting").innerHTML = "Hei på deg";
}
function msgGoodbye() {
  document.getElementById("pGreeting").innerHTML = "Ha det bra";
}

//Oppgave 2
function alertTrue1() {
  alert("Trodde du virkelig? Jeg skal la gå for denne gangen, men prøv i det minste å svar noe fornuftig fra nå av.");
}
function alertTrue2() {
  alert("Dette er faktisk en løgn. Mengden høner vi har hjemme kan telles");
}
function alertTrue3() {
  alert("Jeg ser du har et ubegrenset intellekt. Dette stemmer selvfølgelig.");
}
function alertFalse1() {
  alert("Riktig. Denne nettsiden leier egentlig ikke ut biler i det hele tatt");
}
function alertFalse2() {
  alert("Helt riktig! Hvordan visste du?");
}
function alertFalse3() {
  alert("Hvordan våger du!");
}

//Oppgave 3
function math(operator) {
  var num1 = parseFloat(document.getElementById("inptNum1").value.replace("," , "."));
  var num2 = parseFloat(document.getElementById("inptNum2").value.replace("," , "."));

  if (operator === "add") {
    var total = num1 + num2;
  } else if (operator === "sub") {
    var total = num1 - num2;
  } else if (operator === "multi") {
    var total = num1 * num2;
  } else if (operator === "div") {
    var total = num1 / num2;
  }

  document.getElementById("outputMath").innerHTML = total;
}
//Oppgave 4
function btnInsertNumber(numValue) {
  currentNum = document.getElementById("showNum").value;
  document.getElementById("showNum").value = currentNum + numValue;
}

//Oppgave 6
var lineCount = 0;
var itemCount = 0;
function newItem() {
  item = document.getElementById("inputItemType").value;
  amount = parseInt(document.getElementById("inputItemAmount").value);
  list = document.getElementById("itemList").innerHTML;
  itemCount = itemCount + amount;
  lineCount++;
  document.getElementById("itemList").innerHTML = list + "<li>" + amount + " " +item + "</li>";
  document.getElementById("txtLineCount").innerHTML = "Antall linjer: " + lineCount;
  document.getElementById("txtItemCount").innerHTML = "Antall varer: " + itemCount;
}

//Ekstra 2
/*
  Setter globale variabler til bruk senere
*/
var ctxArt;
var canvasX = 1000;
var canvasY = 300;
var pauseValue = true;
var canvasClear = "fade";
var fps;

function pause() {
  if (pauseValue === false) {
    pauseValue = true;
    document.getElementById("btnPause").innerHTML = "Start";
    console.log(pauseValue);
  } else if (pauseValue === true) {
    pauseValue = false;
    document.getElementById("btnPause").innerHTML = "Pause";
    console.log(pauseValue);
    drawRandom();
  }
}
/*
  Bruker verdien fra input boksene til å
  justere størrelsen på canvas området.
*/
canvasSize = () => {
  canvasX = document.getElementById("inputCanvasX").value;
  document.getElementById("canvasArt").width = canvasX;
  canvasY = document.getElementById("inputCanvasY").value;
  document.getElementById("canvasArt").height = canvasY;
}
/*
  Endrer verdien til variablen canvasClear,
  som bestemmer om canvaset skal cleare, fade,
  eller beholde alle formene.
*/
singleShape = () => {
  if (canvasClear === "keep") {
    canvasClear = "fade";
    document.getElementById("btnSingleShape").innerHTML = "Fade";
    console.log("set to " + canvasClear)
  } else if (canvasClear === "fade") {
    canvasClear = "clear"
    document.getElementById("btnSingleShape").innerHTML = "En form av gangen";
    console.log("set to " + canvasClear)
  } else {
    canvasClear = "keep";
    document.getElementById("btnSingleShape").innerHTML = "Behold alle former";
    console.log("set to " + canvasClear)
  }
}
drawRandom = () => {
  /*
    Trekker et tilfeldig tall.
    Konverter det til tekst og regner om til 16-tall systemet.
    Verdi 1 og 2 vil være "0" og ","
    Så jeg slicer ut sekvensen fra tall 2 til 8
  */
    if (canvasClear === "fade") {
      ctxArt.fillStyle = "black";
      ctxArt.globalAlpha = .1;
      ctxArt.fillRect(0,0,canvasX,canvasY);
      ctxArt.stroke();
    } else if (canvasClear === "clear") {
      ctxArt.clearRect(0,0,canvasX,canvasY)
    }
    ctxArt.fillStyle = "#" + Math.random().toString(16).slice(2,8);
    ctxArt.globalAlpha = 1;
    ctxArt.beginPath();
    ctxArt.moveTo(
      parseInt(Math.random()*canvasX),parseInt(Math.random()*canvasY)
    );

    edges = document.getElementById("inputEdges").value - 1;
    var edgesDrawn = 0;
    while (edgesDrawn < edges) {
      edgesDrawn++;
      ctxArt.lineTo(
        parseInt(Math.random()*canvasX),parseInt(Math.random()*canvasY)
      );
    }
    ctxArt.closePath();
    ctxArt.fill();
    fps = document.getElementById("inputFps").value;
    if (pauseValue === false) {
      setTimeout(drawRandom, 1000/fps)
    }
}
