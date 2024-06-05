$(document).ready(function () {
    //Menu button on click event
    $('.mobile-nav-button').on('click', function() {
      // Toggles a class on the menu button to transform the burger menu into a cross
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
      
      // Toggles a class that slides the menu into view on the screen
      $('.mobile-menu').toggleClass('mobile-menu--open');
      return false;
    }); 
  });

// Faire en sorte de chnager la couleur de la croix quand le menu burger est ouvert

// Sélection de tous les éléments avec la classe .mobile-nav-button, et gerer en fonction de quel menu burger est ouvert

var body= document.querySelector('body');
var buttons = document.querySelectorAll('.mobile-nav-button');
var nav1= document.querySelector('.nav1');
var nav2= document.querySelector('.nav2');

// Initialisation du compteur pour suivre le nombre de clics
var clickCount = 0;

// Ajout d'un écouteur d'événements de clic à chaque bouton
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Sélection de tous les éléments avec la classe .line
        var lines = document.querySelectorAll('.mobile-nav-button__line');


        lines.forEach(function(line) {
            
            if (clickCount % 2 === 0) {
                line.style.background = '#2F3D8B';
                body.style.overflowY = 'hidden';
            } else {
                line.style.background = '#2F3D8B';
                body.style.overflowY = 'visible';
            }
        });
        // Incrémentation du compteur pour le prochain clic
        clickCount++;
        console.log(clickCount);
    });
});

var dropdownBtn = document.getElementById("dropdownBtn");
var dropdownContent = document.getElementById("dropdownContent");

dropdownBtn.addEventListener("click", function () {
    dropdownContent.classList.toggle("show");
});

