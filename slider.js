const sliders = {
    accueil: ["davyPmedia/rasso1.jpg", "davyPmedia/rasso2.jpg", "davyPmedia/rasso3.jpg"],
    rasso: ["davyPmedia/rasso/rasso1.jpg", "davyPmedia/rasso/rasso2.jpg", 
            "davyPmedia/rasso/rasso3.jpg", "davyPmedia/rasso/rasso4.jpg", 
            "davyPmedia/rasso/rasso5.jpg", "davyPmedia/rasso/rasso6.jpg"],
    event: ["davyPmedia/event/event1.jpg", 
            "davyPmedia/event/event2.jpg", "davyPmedia/event/event3.jpg", 
            "davyPmedia/event/event4.jpg", "davyPmedia/event/event5.jpg", 
            "davyPmedia/event/event6.jpg", "davyPmedia/event/event7.jpg", 
            "davyPmedia/event/event8.jpg"],
    shoot: ["davyPmedia/rollingShoot/shoot1.jpg","davyPmedia/rollingShoot/shoot2.jpg",
            "davyPmedia/rollingShoot/shoot3.jpg", "davyPmedia/rollingShoot/shoot4.jpg",
            "davyPmedia/rollingShoot/shoot5.jpg","davyPmedia/rollingShoot/shoot6.jpg",
            "davyPmedia/rollingShoot/shoot7.jpg","davyPmedia/rollingShoot/shoot8.jpg"]
};

let indexes = { accueil: 0, rasso: 0, event: 0, shoot: 0 };

function ChangeSlide(sliderName, sens) {
    const slides = sliders[sliderName];
    let index = indexes[sliderName];

    index += sens;
    if (index >= slides.length) index = 0;
    if (index < 0) index = slides.length - 1;

    indexes[sliderName] = index;

    document.getElementById(`slide-${sliderName}`).src = slides[index];
}
