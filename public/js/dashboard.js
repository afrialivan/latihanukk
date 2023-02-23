
document.querySelectorAll('.readmore').forEach(element => {
  const paragraf = element.previousElementSibling.innerHTML
  var text = paragraf.split(' ')
  text.splice('80')

  element.previousElementSibling.innerHTML = text.join(' ')

  if(text.length < 80) {
    element.classList.add('d-none')
  }

  var togle = true
  element.onclick = () => {
    togle = !togle

    if(togle) {
      element.innerHTML = 'Lihat Semua'
      element.previousElementSibling.innerHTML = text.join(' ')
    }
    else {
      element.innerHTML = 'Sembunyikan'
      element.previousElementSibling.innerHTML = paragraf
    }

  }



});

console.log('oi');