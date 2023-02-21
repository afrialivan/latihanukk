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
// var text = document.getElementById('isiLaporan').innerHTML
// var isitext = document.getElementById('isiLaporan')
// var readMore = document.getElementById('read-more')
// var tutupReadMore = document.getElementById('tutupReadMore')


// if (text.length > 800) {
//   paragraf = text.substring(0, 800) + " ........."
// }
// if(text.length < 800) {
//   readMore.classList.add('d-none')
// }


// isitext.innerHTML = paragraf

// readMore.onclick = () => {
//   isitext.innerHTML = text
//   tutupReadMore.classList.remove('d-none')
//   readMore.classList.add('d-none')
// }

// tutupReadMore.onclick = () => {
//   isitext.innerHTML = paragraf
//   tutupReadMore.classList.add('d-none')
//   readMore.classList.remove('d-none')
// }


document.querySelectorAll('.readMoreGakTuh').forEach(element => {
  const paragraf = element.previousElementSibling.innerHTML
  let toggle = true

  element.previousElementSibling.innerHTML = paragraf.substring(0, 500)
  
  element.onclick = () => {
    toggle = !toggle
    
    if (toggle) {
      element.innerHTML = 'Lihat semua'
      element.previousElementSibling.innerHTML = element.previousElementSibling.innerHTML.substring(0, 500)
    } else {
      element.innerHTML = 'Tutup'
      element.previousElementSibling.innerHTML = paragraf
    }
  }

});