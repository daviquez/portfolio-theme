var $ = jQuery

var body = document.getElementsByTagName('body')[0]

var h_menu = document.getElementById('h-menu')
var burger = document.getElementById('burger')
var menu = document.getElementById('menu')

var greet = document.getElementById('greet')
var about = document.getElementById('about')

h_menu.addEventListener('click', function(){

    burger.classList.toggle('dark')
    burger.classList.toggle('active')
    menu.classList.toggle('show')

    if(h_menu.checked){
        if(greet){
          greet.textContent = ' '
        }
        if(about){
          about.innerHTML = `
            <div class="contact-menu">
                <ul class="list-gold">
                    <li>San José, Costa Rica</li>
                    <li>contact@davidviquez.com</li>
                    <li>t.me/IamDH</li>
                </ul>
            </div>
          `
        }
    }else{
        if(greet){
          greet.textContent = 'Hello, I am'
        }
        if( !body.classList.contains('about') ){
          about.innerHTML = ` <p>and this is my online portfolio</p> 
          <a href="/davidviquez.com/about" class="btn btn-dark">Know more about me</a>`
        }
    }
});

var home_change = document.getElementById('home_change')
var about_resume = document.getElementById('about_resume')

var home_resume = document.getElementById('home_resume')
var section_number = document.getElementById('section-number')
var skills = document.getElementsByClassName('skills')[0]
var experience = document.getElementsByClassName('experience')[0]

// var scrollableElement = home_resume; //document.getElementById('scrollableElement');

if(home_resume){
  home_resume.addEventListener('wheel', checkScrollDirection)
}
if(about_resume){
  about_resume.addEventListener('wheel', checkScrollDirection)
}



function checkScrollDirection(event) {
  if (checkScrollDirectionIsUp(event)) {
    // console.log('up')
    // if(skills){
      // skills.classList.remove('d-none')
      // experience.classList.add('d-none')
      section_number.textContent = '01'
    // }
} else {
    // console.log('down')
    // if(experience){
      // skills.classList.add('d-none')
      // experience.classList.remove('d-none')
      section_number.textContent = '02'
    // }
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