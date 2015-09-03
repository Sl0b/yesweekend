function addClicker(link) {
  link.addEventListener("click", function(e) {
    changeActivity(link.href);
    history.pushState(null, null, link.href);
    e.preventDefault();
  }, false);
}

function changeActivity(href) {
  var req = new XMLHttpRequest();
  req.open("GET",
           "http://sl0b.github.io/yesweekend/" +
             href.split("/").pop(),
           false);
  req.send(null);

function setupHistoryClicks() {
  addClicker(document.getElementById("kfc"));
  addClicker(document.getElementById("dog"));
  addClicker(document.getElementById("game"));
  addClicker(document.getElementById("balltrap"));
  addClicker(document.getElementById("jacuzzi"));
  addClicker(document.getElementById("gospel"));
  addClicker(document.getElementById("meal"));
  addClicker(document.getElementById("phone"));
  addClicker(document.getElementById("basketball"));
  addClicker(document.getElementById("tv"));
}