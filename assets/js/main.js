var $ = jQuery

// var html = document.getElementsByTagName('html')[0]
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
      body.classList.add('menu-collapse')
        if(greet){
          greet.textContent = '\b'
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
        body.classList.remove('menu-collapse')
        if(greet){
          greet.textContent = 'Hello, I am'
        }
        if( !body.classList.contains('about') ){
          about.innerHTML = ` <p>and this is my online portfolio</p> 
          <a href="/davidviquez.com/about" class="btn btn-dark">Know more about me</a>`
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
var scrollyTotal = scrollySection.childElementCount

document.addEventListener('wheel', checkScrollDirection)

function checkScrollDirection(event) {

  if(active == true){
    if (checkScrollDirectionIsUp(event)) {
      position--
      position < 1 ? position = 1 : position
      
      scrollyNumber.textContent = '0'+position
    } else {
      position++
      position > scrollyTotal ? position = scrollyTotal : position

      scrollyNumber.textContent = '0'+position
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
    active = true
  }, 750);
}