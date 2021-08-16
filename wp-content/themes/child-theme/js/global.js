(function() {
    let sliderSlides = document.querySelectorAll('.slide-item');
    console.log(sliderSlides);
    
    if(sliderSlides.length > 0 ) {
        for(let i = 0; i<sliderSlides.length; i++) {
            let button = sliderSlides[i].children;
            console.log(button);
            button[1].setAttribute("id", `slide-${i}`);
        }
    }


    setEventsButtons();

})();
    
function openParagraph(paragraphName) {
    let i, tabcontent;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }

    if(paragraphName != null) {
        console.log(paragraphName);
    document.getElementById(paragraphName).style.display = "block";

    }

}
    
function setEventsButtons() {
    let btn1 = document.getElementById('slide-0');
    let btn2 = document.getElementById('slide-1');
    let btn3 = document.getElementById('slide-2');

    console.log(btn1);
    console.log(btn2);
    console.log(btn3);

    btn1.addEventListener("click", () => {
        openParagraph('paragraphe1');
    }, false);


    btn2.addEventListener("click", () => {
        openParagraph('paragraphe2');
    }, false);

    btn3.addEventListener("click", () => {
        openParagraph('paragraphe3');
    }, false);

}

