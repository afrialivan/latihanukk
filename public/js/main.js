const nav = document.querySelector('nav')
const a = document.querySelectorAll('nav a')

document.addEventListener('scroll', function (ev) {
  if (ev.target.scrollingElement.scrollTop > 0) {
    nav.style.boxShadow = '0 4px 8px rgba(0, 0, 0, .2)'
  }
  else {
    nav.style.boxShadow = 'none'
  }

})


// <!DOCTYPE html>
// <html>
// <body>

// <h1>JavaScript Strings</h1>
// <h2>The split() Method</h2>

// <p>split() splits a string into an array of substrings, and returns the array.</p>

// <p>The second word is:</p>
// <p id="demo"></p>

// <script>

// </script>

// </body>
// </html>


document.querySelectorAll('.readMoreGakTuh').forEach(element => {
  const paragraf = element.previousElementSibling.innerHTML

  var text = paragraf.split(' ')

  text.splice(80)

  element.previousElementSibling.innerHTML = text.join(' ')

  let toggle = true

  if(text.length <= 79) {
    
    element.classList.add('d-none')
  }

  element.onclick = () => {
    toggle = !toggle
    
    if (toggle) {
      element.innerHTML = 'Lihat semua'
      element.previousElementSibling.innerHTML = text.join(' ')
    } else {
      element.innerHTML = 'Tutup'
      element.previousElementSibling.innerHTML = paragraf
    }
  }

});