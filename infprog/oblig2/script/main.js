window.onload = boot;

function boot(){
  //Task 1 2 3
  document.getElementById('btnRegister').onclick = register;

  var currentYear = time.getFullYear(),
      optionYear = '';
  //Create option elements for the last 70 years
  for (i=70;i>0;i--) {
    optionYear += "<option value='" + currentYear + "'>" + currentYear + "</option>";
    currentYear--;
  }
  document.getElementById('inputYear').innerHTML = optionYear;

  //Task 4
  var hours = time.getHours();
  if (hours < 6 || hours > 23) {
    document.getElementById('txtTime').innerHTML = "God natt"
  } else if (hours < 6) {
    document.getElementById('txtTime').innerHTML = "God morgen"
  } else if (hours < 18) {
    document.getElementById('txtTime').innerHTML = "God dag"
  } else {
    document.getElementById('txtTime').innerHTML = "God kveld"
  }

  //Task 5
  document.getElementById('btnFortune').onclick = fortune;

  //Task 6
  document.getElementById('btnString').onclick = string;

  //Task 7
  for (i=0; i<=100; i++) {
    document.getElementById('lstUp').innerHTML += i + "<br />";
  }
  for (i=100; i>=0; i--) {
    document.getElementById('lstDown').innerHTML += i + "<br />";
  }
  for (i=0; i<=100; i+=0.5) {
    document.getElementById('lstHalf').innerHTML += i + "<br />";
  }
  for (i=0; i<=100; i++) {
    if (i%3 === 0) {
      document.getElementById('lstDiv3').innerHTML += i + "<br />";
    }
  }
  for (i=0; i<=100; i++) {
    if (i%2 === 0) {
      document.getElementById('lstEven').innerHTML += i + "<br />";
    }
  }
  for (i=0; i<=100; i++) {
    if (i%2 !== 0) {
      document.getElementById('lstOdd').innerHTML += i + "<br />";
    }
  }
  var lstNum = 0;
  for (i=0; i<=100; i++) {
    if (lstNum > 0) {
      document.getElementById('lstPosNeg').innerHTML += lstNum + "<br />";
      lstNum++;
      lstNum = 0 - lstNum;
    } else if (lstNum < 0) {
      document.getElementById('lstPosNeg').innerHTML += lstNum + "<br />";
      lstNum = 0 -lstNum;
      lstNum++;
    } else {
      document.getElementById('lstPosNeg').innerHTML += lstNum + "<br />";
      lstNum++;
    }
  }
  //Extra 1
  document.getElementById('btnCalcInterest').onclick = calcInterest;

  //Extra 2
  var outComb2 = '';
  for (var num1=1; num1<6; num1++) {
    for (var num2=1; num2<6; num2++) {
      outComb2 += num1.toString() + num2.toString() + "<br/>";
    }
  }
  document.getElementById('comb2').innerHTML = outComb2;

  var outComb3 = '';
  for (var num1=1; num1<6; num1++) {
    for (var num2=1; num2<6; num2++) {
      for (var num3=1; num3<6; num3++) {
        outComb3 += num1.toString() + num2.toString() + num3.toString() + "<br/>";
      }
    }
  }
  document.getElementById('comb3').innerHTML = outComb3;

  var outComb4 = '';
  for (var num1=1; num1<6; num1++) {
    for (var num2=1; num2<6; num2++) {
      for (var num3=1; num3<6; num3++) {
        for (var num4=1; num4<6; num4++) {
          outComb4 += num1.toString() + num2.toString() + num3.toString() + num4.toString() + "<br/>";
        }
      }
    }
  }
  document.getElementById('comb4').innerHTML = outComb4;

  var outComb5 = '';
  for (var num1=1; num1<6; num1++) {
    for (var num2=1; num2<6; num2++) {
      for (var num3=1; num3<6; num3++) {
        for (var num4=1; num4<6; num4++) {
          for (var num5=1; num5<6; num5++) {
            outComb5 += num1.toString() + num2.toString() + num3.toString() + num4.toString() + num5.toString() + "<br/>";
          }
        }
      }
    }
  }
  document.getElementById('comb5').innerHTML = outComb5;

  //Extra 3
  var ctx = document.getElementById('canvas').getContext('2d');
  var x1 = 0;
  var x2 = 0;
  for (x1=0; x1<=400; x1+=100) {
    for (x2=0; x2<=400; x2+=20) {
      if (x2 % 40 === 0) {
      ctx.strokeStyle = '#ddd';
    } else {
      ctx.strokeStyle = '#ff9e3d';
    }
      ctx.beginPath();
      ctx.moveTo(x1,0);
      ctx.lineTo(x2,400);
      ctx.stroke();
    }
  }

  //Extra 4
  document.getElementById('btnCalendar').onclick = calendar;
}
//End of boot sequence

//Global variables
var i;
var time = new Date;

//Task 1 2 og 3
function register(){
  var username = document.getElementById('inputUsername').value,
      pass = document.getElementById('inputPass').value,
      passRpt = document.getElementById('inputPassRpt').value,
      birthYear = parseInt(document.getElementById('inputYear').value),
      currentYear = time.getFullYear(),
      birthMonth = parseInt(document.getElementById('inputMonth').value),
      currentMonth = time.getMonth(),
      birthDate = parseInt(document.getElementById('inputDate').value),
      currentDate = time.getDate();

  //errors, and responses
  const noUsername = 'Skriv inn brukernavn',
        noPass = 'Skriv inn passord',
        shortPass = 'Passordet er for kort',
        passMismatch = 'Passordene er ulike',
        tooYoung = 'Du må være minst 18 år',

        success = 'Gratulerer ' + username + ', du er inne.';

  document.getElementById('registerError').style.visibility = 'visible';
  document.getElementById('regResponse').innerHTML = '';
  if (username === '') {
    document.getElementById('registerError').innerHTML = noUsername;
    document.getElementById('inputUsername').focus();
  } else if (pass === '') {
    document.getElementById('registerError').innerHTML = noPass;
    document.getElementById('inputPass').focus();
  } else if (pass.length < 5) {
    document.getElementById('registerError').innerHTML = shortPass;
    document.getElementById('inputPass').focus();
  } else if (pass != passRpt) {
    document.getElementById('registerError').innerHTML = passMismatch;
    document.getElementById('inputPassRpt').focus();
  } else if ((currentYear - birthYear) < 18) {
    document.getElementById('registerError').innerHTML = tooYoung;
    document.getElementById('inputYear').focus();
  } else if ( ( (currentYear - birthYear) === 18) && ( (currentMonth - birthMonth) >= 0) && ((currentDate - birthDate) >= 1) ) {
      document.getElementById('registerError').innerHTML = tooYoung;
  } else {
    document.getElementById('registerError').style.visibility = 'hidden';
    document.getElementById('regResponse').innerHTML = success;
  }


}
//document.getElementById('inputBirthday').value;

//Oppgave 5
function fortune() {
  var name = document.getElementById('inName').value,
      nameLength = name.length,
      age = document.getElementById('inAge').value,
      gender = document.getElementById('inGender').value,
      height = document.getElementById('inHeight').value,
      fortuneNum;
  document.getElementById('outFortune').innerHTML = "";
  if (gender === "u") {
    var rndGender = Math.random();
    if (rndGender < 0.5) {
      gender = "m";
    } else {
      gender = "f";
    }
  }
  if (gender === "m") {
    fortuneNum = nameLength * age - height;
  } else if (gender === "f") {
    fortuneNum = age * height - 3
  }
  document.getElementById('outFortune').innerHTML += "hmmmmm…<br />"
  i = 0;
  setTimeout(aaa, 1500);

  function aaa() {
    if (i < 5) {
      document.getElementById('outFortune').innerHTML += "AAAAAAA<br />"
    } else if (i === 5) {
      document.getElementById('outFortune').innerHTML += "EUREKA<br />"
    } else if (i > 5) {

        if (fortuneNum % 2 === 0) {
          document.getElementById('outFortune').innerHTML +=
            "Gratulerer " + name + ". Lykken står deg bi. Du vil ha den mest fullkomne lykke. <br /> Det er bare ett lite problem. Ingenting merkverdig, men å lese spådommer er ikke helt uten strev. Hvis du bare kunne, mmm, sendt litt penger min vei. Selvfølgelig, <em>jeg er en mektig trollmann</em>. Så dine penger er trygge i mine lommer. Her er min menneskelige bankkonto for din beleilighet: 1234.12.12345. Du står selvfølgelig fritt om du vil betale meg 100 kroner eller ikke, men jeg har nemlig evnen til å reversere denne spådommen, hvis du forstår hva det innebærer."
        } else if (fortuneNum % 2 !== 0) {
          document.getElementById('outFortune').innerHTML +=
            "Vent! Nei og nei. Det mest grusomme har skjedd! Jeg tror ikke jeg har sett noe lignende før. Jeg skal spare deg for detaljene men hvis du holder ditt eget liv kjært anbefaler jeg for ditt eget beste at du kjøper denne magiske stenen av meg. Den vil beskytte deg mot alskens fare du skulle komme over. Hvis du sender meg 100 kroner på min jordlige bankkonto: 1234.12.12345. Skal jeg tenke frem en sten, og jeg lover at det vil ende godt for deg."
        }
    }
    i++;
    if (i <= 6) {
      setTimeout(aaa, 500);
    }
  }
}

//Task 6
function string() {
  var str = document.getElementById('inString').value,
      strNum = parseInt(Math.round(document.getElementById('inStringNum').value));

  console.log(strNum);
  for (i = 0; i < strNum; i++) {
    document.getElementById('outString').innerHTML = str + "<br />" + document.getElementById('outString').innerHTML;
  }
}

//Extra 1
function calcInterest() {
  var interestAmount = parseInt(document.getElementById('inInterestAmount').value),
      interestYears = parseInt(document.getElementById('inInterestYears').value),
      interest = 1 + parseFloat(document.getElementById('inInterest').value.replace(',','.')),
      interestTotal = interestAmount,
      interestPrint = "Du starter med " + interestAmount + " kroner\n";

  for (i=1; i<=interestYears; i++) {
    interestTotal *= interest;
    interestTotal = Math.round(interestTotal);
    interestPrint += "Etter " + i + " år har du " + interestTotal + " kroner i banken\n";
  }
  document.getElementById('outInterest').innerHTML = interestPrint
}

//Extra 4
function calendar() {
  var monthStart = parseInt(document.getElementById('inMonthStart').value),
      monthAmount = parseInt(document.getElementById('inMonthAmount').value);
  document.getElementById('calDates').innerHTML = '';
  for (i=0; i<monthStart; i++) {
    var box = document.createElement('div');
    box.className = 'dummy';
    box.innerHTML = 'test';
    document.getElementById('calDates').appendChild(box);
  }
  for (i=1; i<=monthAmount; i++) {
    var box = document.createElement('div');
    box.className = 'date';
    box.innerHTML = i;
    document.getElementById('calDates').appendChild(box);
  }
}
