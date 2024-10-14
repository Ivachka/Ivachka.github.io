var modal = document.getElementById('myModal');
var btn = document.getElementsByClassName("addcard__btn")
var span = document.getElementsByClassName("close");
function buttonClick(event) {
  var id = this.getAttribute('data-modal');
   var modal = document.getElementById(id);
   modal.style.display = 'block';
}
for (var i = 0; i < btn.length; i++) {
   btn[i].onclick = buttonClick;
}
function spanClick() {
  var id = this.getAttribute('data-modal');
  var modal = document.getElementById(id);
  modal.style.display = 'none';
}

for (var i = 0; i < span.length; i++) {
  span[i].onclick = spanClick;
}
window.onclick = function(event) {
  var isModal = (' ' + event.target.className + ' ').indexOf(' modal ') > -1;
  if (isModal) {
    event.target.style.display = "none";
  }
}