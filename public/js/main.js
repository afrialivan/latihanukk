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



// laporan
var text = document.getElementById('isiLaporan').innerHTML
var isitext = document.getElementById('isiLaporan')
var readMore = document.getElementById('read-more')
var tutupReadMore = document.getElementById('tutupReadMore')
if (text.length > 800) {
  paragraf = text.substring(0, 800) + " ........."
}

isitext.innerHTML = paragraf

readMore.onclick = () => {
  isitext.innerHTML = text
  tutupReadMore.classList.remove('d-none')
  readMore.classList.add('d-none')
}

tutupReadMore.onclick = () => {
  isitext.innerHTML = paragraf
  tutupReadMore.classList.add('d-none')
  readMore.classList.remove('d-none')
}

// const limit = Str(text).limit(100, '...').get() 
// text.innerHTML = limit 