menu= document.querySelector('.menu').children;
for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener('click', function(event) {
        alert(event.target.innerText);
    });
}

btn= document.getElementById('contact-button');
btn.addEventListener('click', function() {
    intro= document.getElementById('intro');
    btn.style.display = "none";
    welcome= document.getElementById('welcome');
    welcome.style.display = "none";
    intro.innerText = "Thanks you for contacting!";
    intro.classList.add('contacting');
});