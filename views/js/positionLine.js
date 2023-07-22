function setLineWhite() {
  // Get the title of the service and the white line element
  var titleService = document.querySelector('.titleService');
  var lineWhite = document.querySelector('.lineWhite');

  // Get the width of the title and adjust the width of the white line accordingly
  var titleServiceWidth = titleService.offsetWidth;
  lineWhite.style.width = titleServiceWidth + 'px';

  // Get the position of the title service
  var titleServiceRect = titleService.getBoundingClientRect();
  var titleServiceTop = titleServiceRect.top;
  var titleServiceHeight = titleServiceRect.height;

  // Positioning the white line
  lineWhite.style.top = (titleServiceTop + titleServiceHeight) + 'px';
  lineWhite.style.left = titleServiceRect.left + 'px';
}
// Listener for initial page load
document.addEventListener("DOMContentLoaded", setLineWhite);
// Listener for window resize
window.addEventListener("resize", setLineWhite);

setLineWhite();