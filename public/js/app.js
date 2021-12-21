let ageSelect = document.getElementsByClassName("age-container__list");
let age_option_input = document.getElementById("input-age_option");

var myFunction = function() {
    ageBackgroundColor()
    let age_value = this.getAttribute("id");
    this.style.backgroundColor = 'rgb(105, 105, 240)';
    age_option_input.setAttribute('value',age_value);
};

function ageBackgroundColor(){
    for (let i = 0; i < ageSelect.length; i++) {
        ageSelect[i].style.backgroundColor = "white";
        ageSelect[i].addEventListener('click', myFunction, false);
    }

}

ageBackgroundColor()



