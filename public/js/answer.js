let showAHide = document.getElementsByClassName('showAndHide');


var myFunction = function(index) {
    let getId = this.getAttribute('id');
    let descriptionById = document.getElementsByClassName('company-description');
    if(this.getAttribute("class") === 'fa fa-chevron-circle-down showAndHide') {
        this.setAttribute('class','fa fa-chevron-circle-up showAndHide')
        for (let i = 0; i < descriptionById.length; i++) {
            if(getId  == descriptionById[i].getAttribute('name'))
                descriptionById[i].style.display = 'block';
        }
    }
    else{
        this.setAttribute('class','fa fa-chevron-circle-down showAndHide')
        for (let i = 0; i < descriptionById.length; i++) {
            if(getId  == descriptionById[i].getAttribute('name'))
                descriptionById[i].style.display = 'none';
        }
    }
};

for (let i = 0; i < showAHide.length; i++) {
    showAHide[i].addEventListener('click', myFunction, false);
}
