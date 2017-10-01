<canvas id="canvas" width="400" height="400"></canvas>
<script>

  window.onload = boot;

  function boot() {
    setInterval(move, 100)
  }

  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  console.log("canvas set")

  ctx.imageSmoothingEnabled=false
  ctx.fillStyle = "black"
  console.log("fill style set");
/*
  ctx.moveTo(0,0);
  ctx.lineTo(400,400);
  ctx.stroke();
*/
  var playerX = 200;
  var playerY = 200;
  console.log("player coordinates set");

  function move() {
      document.onkeydown = function(e) {
        switch (e.keyCode) {
          case 37:
            console.log("left key pressed");
            playerX=100;
            break;
          case 38:
            console.log("up key pressed");
            playerY=100;
            break;
          case 39:
            console.log("right key pressed");
            playerX=300;
            break;
          case 40:
            console.log("down key pressed");
            playerY=300;
            break;
          default:
        }
      }
    ctx.beginPath();
    ctx.arc(playerX,playerY,30,0,2*Math.PI);
    ctx.stroke();
  }

</script>
<style>
  html {
    background: black;
    margin: 0 auto;
    margin-top: 200px;
    width: 400px;
    height: 400px;
  }
  canvas {
    background: white;
    width: 400px;
    image-rendering: pixelated;
  }
</style>
