const slide = ["davyPmedia/rasso1.jpg", "davyPmedia/rasso2.jpg", "davyPmedia/rasso3.jpg"];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;

    if (numero > 2)
        numero = 0;
    if (numero <0) 
        numero = 2;
    // document.getElementById("slide").src = "slide/" + slide[numero];
    document.getElementById("slide").src = slide[numero];
}

