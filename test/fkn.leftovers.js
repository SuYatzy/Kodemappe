var bpm = 60;
var speed = 60000/bpm;

var bassAmount = 2;
var bassPlayed;

var loopHacking = false;

var loopSonar = false;
var sonarSpeed = 1;

function playMusic() {
  bassPlayed = 0
  var bassLoop = function(bassPlayed) {
    setInterval (
      function() {
        var bass = new Audio("media/bass.wav");
        bassPlayed++;
        if (bassPlayed > bassAmount) {
          clearInterval()
        }
      }
    )
  }
  while (bassPlayed < bassAmount) {

    var bass = new Audio("media/bass.wav");
    bass.play();

  }
  if (loopSonar) {
    var sonar = new Audio("media/sonar.wav");
    setTimeout(sonar, speed/sonarSpeed);
  }
  setTimeout(playMusic, speed);
}
