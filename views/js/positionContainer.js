// this was not used
function setContainerHeight() {
const container = document.querySelector(".container");
const containerWidth = container.clientWidth;
const desiredHeight = containerWidth * 0.75; // 75% of the width

container.style.height = `${desiredHeight}px`;
alert(container.style.height);
}
window.addEventListener("resize", setContainerHeight);
document.addEventListener("DOMContentLoaded", setContainerHeight);