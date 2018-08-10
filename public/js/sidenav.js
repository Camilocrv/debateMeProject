
function faceHover(x) {
  x.style.border = "1px solid #0277bd";
  x.style.boxShadow = "0 0 24px 0 #0277bd";
  x.style.backgroundColor = "white";
  document.getElementById("faceIcon").style.color = "#0277bd";
}
function faceNormal(x) {
  x.style.border = "1px solid white";
  x.style.boxShadow = "";
  x.style.backgroundColor = "";
  document.getElementById("faceIcon").style.color = "white";
}

function googleHover(x) {
  x.style.border = "1px solid #b71c1c";
  x.style.boxShadow = "0 0 24px 0 #b71c1c";
  x.style.backgroundColor = "#b71c1c";
}
function googleNormal(x) {
  x.style.border = "1px solid white";
  x.style.boxShadow = "";
  x.style.backgroundColor = "";
}

function twitterHover(x) {
  x.style.border = "1px solid #2979ff";
  x.style.boxShadow = "0 0 24px 0 #2979ff";
  x.style.backgroundColor = "#2979ff";
}
function twitterNormal(x) {
  x.style.border = "1px solid white";
  x.style.boxShadow = "";
  x.style.backgroundColor = "";
}

document.getElementById("accessButton").onclick = function() {
  document.getElementById("goBackButton").style.display = "block";
  document.getElementById("loginButton").style.display = "block";
  document.getElementById("registButton").style.display = "block";
  document.getElementById("accessButtons").style.display = "none";
  document.getElementById("someButtons").style.height = "100%";
  document.getElementById("someButtons").style.width = "100%";
}

document.getElementById("goBackButton").onclick = function() {
  document.getElementById("loginButton").style.display = "none";
  document.getElementById("registButton").style.display = "none";
  document.getElementById("goBackButton").style.display = "none";
  document.getElementById("accessButtons").style.display = "block";
  document.getElementById("accessButton").style.display = "block";
  document.getElementById("someButtons").style.height = "auto";
  document.getElementById("someButtons").style.width = "auto";
}

document.getElementById("loginButton").onclick = function() {
  document.getElementById("loginUserView").style.display = "block";
  document.getElementById("loginButton").style.display = "none";
  document.getElementById("registButton").style.display = "none";
  document.getElementById("goBackButton").style.display = "none";
  document.getElementById("loginGoBackButton").style.display = "block";
}

document.getElementById("registButton").onclick = function() {
  document.getElementById("registUserView").style.display = "block";
  document.getElementById("registButton").style.display = "none";
  document.getElementById("loginButton").style.display = "none";
  document.getElementById("goBackButton").style.display = "none";
}

// document.getElementById("loginSubmit").onclick = function() {
//   document.getElementById("logedUserView").style.display = "block";
//   document.getElementById("loginView").style.display = "none";
// }

document.getElementById("loginGoBackButton").onclick = function() {
  document.getElementById("loginUserView").style.display = "none";
  document.getElementById("registButton").style.display = "block";
  document.getElementById("loginButton").style.display = "block";
  document.getElementById("goBackButton").style.display = "block";
}
document.getElementById("registGoBackButton").onclick = function() {
  document.getElementById("registUserView").style.display = "none";
  document.getElementById("registButton").style.display = "block";
  document.getElementById("loginButton").style.display = "block";
  document.getElementById("goBackButton").style.display = "block";
}

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.tooltipped');
  var instances = M.Tooltip.init(elems, options);
});
