const button = document.querySelector('button')
const body = document.querySelector('body')

button.onclick = () => {
  if (body.style.backgroundColor === 'rgb(0, 0, 0)') {
    body.style.backgroundColor = '#c3c3c3'
    body.style.color = '#000'
    button.innerText = 'Dark mode'
  } else {
    body.style.backgroundColor = '#000'
    body.style.color = '#fff'
    button.innerText = 'Light mode'
  }
}
