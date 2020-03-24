function fadeOut(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        op -= 0.1;
    }, 50);
}
function fadeIn(element) {
    var op = 0.1;  // initial opacity
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        op += 0.1;
    }, 10);
}
//Event listeners for HOME button from Nav
document.querySelector('li:nth-child(1)').addEventListener("mouseover", homeOn);
function homeOn() {
  document.querySelector('.navHoverH').style.opacity = "1";
}

document.querySelector('li:nth-child(1)').addEventListener("mouseout", homeOut);
function  homeOut() {
  document.querySelector('.navHoverH').style.opacity = "0";
}

document.querySelector('li:nth-child(1)').addEventListener("click", homeClick);
function  homeClick() {
  document.querySelector('.navHoverH').style.opacity = "1";
  document.querySelector('li:nth-child(1)').removeEventListener("mouseout", homeOut);
}

//Event listeners for Sponsors button from Nav
document.getElementById('Sponsors').addEventListener("mouseover", sponsorsOn);
function sponsorsOn() {
  document.querySelector('.navHoverS').style.opacity = "1";
}

document.getElementById('Sponsors').addEventListener("mouseout", sponsorsOut);
function  sponsorsOut() {
  document.querySelector('.navHoverS').style.opacity = "0";
}

document.getElementById('Sponsors').addEventListener("click", sponsorsClick);
function  sponsorsClick() {
  document.querySelector('.navHoverS').style.opacity = "1";
  document.getElementById('Sponsors').removeEventListener("mouseout", sponsorsOut);
}

//Event listeners for Contests button from Nav
document.getElementById('Contests').addEventListener("mouseover", contestsOn);
function contestsOn() {
  document.querySelector('.navHoverC').style.opacity = "1";
}

document.getElementById('Contests').addEventListener("mouseout", contestsOut);
function  contestsOut() {
  document.querySelector('.navHoverC').style.opacity = "0";
}

document.getElementById('Contests').addEventListener("click", contestsClick);
function  contestsClick() {
  document.querySelector('.navHoverC').style.opacity = "1";
  document.getElementById('Contests').removeEventListener("mouseout", contestsOut);
}

//Event listeners for Ranking button from Nav
document.getElementById('Ranking').addEventListener("mouseover", rankingOn);
function rankingOn() {
  document.querySelector('.navHoverR').style.opacity = "1";
}

document.getElementById('Ranking').addEventListener("mouseout", rankingOut);
function  rankingOut() {
  document.querySelector('.navHoverR').style.opacity = "0";
}

document.getElementById('Ranking').addEventListener("click", rankingClick);
function  rankingClick() {
  document.querySelector('.navHoverR').style.opacity = "1";
  document.getElementById('Ranking').removeEventListener("mouseout", rankingOut);
}

//Event listeners for How It works button from Nav
document.getElementById('HowIW').addEventListener("mouseover", howOn);
function howOn() {
  document.querySelector('.navHoverHF').style.opacity = "1";
}

document.getElementById('HowIW').addEventListener("mouseout", howOut);
function  howOut() {
  document.querySelector('.navHoverHF').style.opacity = "0";
}

document.getElementById('HowIW').addEventListener("click", howClick);
function  howClick() {
  document.querySelector('.navHoverHF').style.opacity = "1";
  document.getElementById('HowIW').removeEventListener("mouseout", howOut);
}

//Settings menu
var settings = document.querySelector('.settingsPNG');
var settingsClosed = document.querySelector('.settingsClosed');

settings.addEventListener("click", function() {
  document.getElementsByClassName("settingsClosed").classList.toggle("settingsOpen");
  alert("done");
});
