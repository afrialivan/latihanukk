const nav = document.querySelector('nav')
const a = document.querySelectorAll('nav a')

document.addEventListener('scroll', function(ev){
  if(ev.target.scrollingElement.scrollTop > 0 ) {
    nav.style.boxShadow='0 4px 8px rgba(0, 0, 0, .2)'
  }
  else {
    nav.style.boxShadow='none'
  }
  
})