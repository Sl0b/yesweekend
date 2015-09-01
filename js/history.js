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
           "http://diveintohtml5.info/examples/history/gallery/" +
             href.split("/").pop(),
           false);
  req.send(null);

function setupHistoryClicks() {
  addClicker(document.getElementById("kfc"));
}