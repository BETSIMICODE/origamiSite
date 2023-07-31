function setImgServDimensions() {
    let imgServ = document.querySelectorAll('.imgServ');

// Get the current width of the .imgServ element
let imgServWidth = imgServ[0].offsetWidth;


    for (var i = 0; i < imgServ.length; i++) {
    
    imgServ[i].style.height = imgServWidth*0.7 + 'px';
}

let imgServContent = document.querySelectorAll('.imageServiceContent');
for (var j = 0; j < imgServContent.length; j++) {
    
    imgServContent[j].style.height = (imgServWidth+imgServWidth*0.01) + 'px';
}
}

// Listener for window resizing
window.addEventListener("resize", setImgServDimensions);

// Call the function initially to set the initial dimensions
setImgServDimensions();