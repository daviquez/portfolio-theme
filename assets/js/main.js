var $ = jQuery

var h_menu = document.getElementById('h-menu')
var burger = document.getElementById('burger')
var menu = document.getElementById('menu')

var greet = document.getElementById('greet')
var about = document.getElementById('about')

h_menu.addEventListener('click', function(){

    burger.classList.toggle('dark')
    menu.classList.toggle('show')

    if(h_menu.checked){
        greet.textContent = ' '
        about.innerHTML = `
			<div class="contact-menu">
                <ul class="list-gold">
                    <li>San José, Costa Rica</li>
                    <li>contact@davidviquez.com</li>
                    <li>t.me/IamDH</li>
                </ul>
            </div>
        `
    }else{
        greet.textContent = 'Hello, I am'
        about.innerHTML = `
        <p>and this is my online portfolio</p>
        <a href="<?php echo site_url('/about', ''); ?>" class="btn btn-dark">Know more about me</a>
        `
    }
});

var home_change = document.getElementById('home_change')

var section_number = document.getElementById('section-number')
var skills = document.getElementsByClassName('skills')[0]
var experience = document.getElementsByClassName('experience')[0]

var scrollableElement = document.body; //document.getElementById('scrollableElement');

scrollableElement.addEventListener('wheel', checkScrollDirection);

function checkScrollDirection(event) {
  if (checkScrollDirectionIsUp(event)) {
    console.log('up')
    skills.classList.remove('d-none')
    experience.classList.add('d-none')
    section_number.textContent = '01'
} else {
    console.log('down')
    skills.classList.add('d-none')
    experience.classList.remove('d-none')
    section_number.textContent = '02'
  }
}

function checkScrollDirectionIsUp(event) {
  if (event.wheelDelta) {
    return event.wheelDelta == 1;
  }
  return event.deltaY < 0;
}

/* 
$(window).on("scroll", function(e){
    console.log("only alerting once");
    $(window).unbind("scroll");
}); 
*/