<!doctype html>
<html>
<head>
  <meta charset="utf8" />
  <title> Javascript test </title>
  <script>
    window.onload = startup;
    function startup() {
      document.getElementById("btnShowMsg").onclick = showMsg;
      document.getElementById("btnSendName").onclick = getName;
    }

    function showMsg() {
      document.getElementById("text").innerHTML = "og fete hanska";
      document.getElementById("text").style.fontFamily = "Helvetica Neue"
    }

    function getName() {
      var name = document.getElementById("btnGetName").value;
      document.getElementById("pShowName").innerHTML = "Welcome" + " " + name;
    }
  </script>
</head>
<body>
  <button id="btnShowMsg" type="button"> jævla fet jakke </button>
  <p id="text">  </p>
  <input type="text" placeholder="input name" id="btnGetName"/>
  <button id="btnSendName" >:^)</button>
  <p id="pShowName"> wew </p>
</body>
</html>
