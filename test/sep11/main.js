window.onload = boot;

function boot() {
  setInterval(addLiItem, 1);
  document.getElementById("btnAddImg").onclick = addImg
}
function addLiItem() {
  currentList = document.getElementById("list").innerHTML
  newItem = document.getElementById("txtInput").value;
  document.getElementById("list").innerHTML = "<li>" + newItem +"</li>" + currentList
}

function addImg() {
  newImg = document.getElementById("txtFilename").value;
  currentImg = document.getElementById("img").innerHTML;
  document.getElementById("img").innerHTML =
    "<img src=\"media/" + newImg+ "\" alt=\"image\" />" + currentImg;
/*
  var newImg2 = document.createElement("img");
  imgPath = document.getElementById("txtFilename").value;
  document.getElementById("img").appendChild(imgPath);
*/
}
