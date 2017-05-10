var index = 0;
var slide = document.getElementsByClassName("mySlides");

function slideTransition(n) {
    hideSlide();
    index += n;
    if (index < 0) {
        index = 2;
    } else if (index >= 3) {
        index = 0;
    }
    displaySlide();
}
    
function displaySlide() {
    slide[index].style.display = "block";
}

function hideSlide() {
    slide[index].style.display = "none";
}