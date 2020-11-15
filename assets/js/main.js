const $ = jQuery

$(document).ready(function(){
  $('#home_resume').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    fade: true,
    adaptiveHeight: true,
    dotsClass: 'slick-dots',
    mobileFirst: true,
    responsive: [{
      breakpoint: 768,
      settings: 'unslick',
    }]
  })
  $('#about_resume').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    fade: true,
    // adaptiveHeight: true,
    dotsClass: 'slick-dots',
    mobileFirst: true,
    responsive: [{
      breakpoint: 768,
      settings: 'unslick',
    }]
  })
})

// var html = document.getElementsByTagName('html')[0]
var body = document.getElementsByTagName('body')[0]

var logoDark = document.querySelector('#logo-dark')

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
      body.classList.add('menu-collapse')
        if(logoDark){
          logoDark.classList.remove('dark')
        }
        if(greet){
          greet.textContent = '\b'
        }
        if(about){
          about.innerHTML = `
            <div class="contact-menu opacity">
                <ul class="list-gold">
                    <li>San José, Costa Rica</li>
                    <li>contact@davidviquez.com</li>
                    <li>t.me/IamDH</li>
                </ul>
            </div>
          `
        }
      }else{
        if(logoDark){
          logoDark.classList.add('dark')
        }
        body.classList.remove('menu-collapse')
        if(greet){
          greet.textContent = 'Hello, I am'
        }
        if( about && !body.classList.contains('about') ){
          about.innerHTML = ` <div class="opacity">
          <p>and this is my online portfolio</p> 
          <a href="/davidviquez.com/about" class="btn btn-dark">Know more about me</a>
          </div>`
        }
    }
});

/**
 * Scrolly functions
 * 
 */

var active = true
var position = 1

var scrollyNumber = document.querySelector('#scrolly-number')
var scrollySection = document.querySelector('.scrolly')
var globeContainer = document.querySelector('.globe-container')

if(scrollySection){
  var scrollyTotal = scrollySection.childElementCount
  document.addEventListener('wheel', checkScrollDirection)
}

function checkScrollDirection(event) {

  if(active == true){
    if (checkScrollDirectionIsUp(event)) {
      if(position > 1){
        scrollyNumber.classList.add('up')
      }
      
      position--
      position < 1 ? position = 1 : position
      
      setTimeout(() => {
        scrollyNumber.textContent = position
      }, 200);
    } else {
      if(position < scrollyTotal){
        scrollyNumber.classList.add('down')
      }
      position++
      position > scrollyTotal ? position = scrollyTotal : position

      setTimeout(() => {
        scrollyNumber.textContent = position
      }, 200);
    }

    for(let i = 0; i < scrollyTotal; i++ ){
      if( (position -1) != i){
        scrollySection.children[i].classList.remove('show')
        // scrollySection.children[i].classList.add('d-none')
        if(globeContainer){
          globeContainer.classList.remove('step-'+(i+1))
        }
      }else{
        scrollySection.children[position -1].classList.add('show')
        if(globeContainer){
          globeContainer.classList.add('step-'+position)
        }
        // scrollySection.children[position -1].classList.remove('d-none')
      }


    }

    cooldown()
  }
}

/**
 * @param {Object} event - checks if scroll direction is up 
 */
function checkScrollDirectionIsUp(event) {
  if (event.wheelDelta) {
    return event.wheelDelta == 1
  }
  return event.deltaY < 0
}

function cooldown(){
  active = false
  setTimeout(() => {
    scrollyNumber.classList.remove('up')
    scrollyNumber.classList.remove('down')
    active = true
  }, 750);
}

// Copy to clickboard
var discordLink = document.querySelector('#discord-link')

if(discordLink){
  let tooltipText = document.querySelector('.da-tooltip.tooltip-bottom')
  let tooltipInput = document.querySelector('#tooltip-text')
  discordLink.addEventListener('click', function(e){
    e.preventDefault();

    tooltipInput.select()
  
    document.execCommand('copy')
    copyText.setSelectionRange(0, 99999)
    
    tooltipText.textContent = 'Copied to clipboard'

    setTimeout(() => {
      tooltipText.textContent = 'IamDavid#4638'
    }, 2000)
    
  });
}