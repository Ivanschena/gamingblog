/* const playScene = document.querySelector('#playScene')
const slides = document.querySelectorAll('.slide')
const soundStartup = document.querySelector('#startupSound')
let currentSlide = -1
playScene.addEventListener('click', () => {
    const startSlide = () => {
        if (slides[currentSlide]) {
            slides[currentSlide].style.opacity = "0"
        }
        currentSlide++
        if (!slides[currentSlide]) return
        const time = parseFloat(slides[currentSlide].getAttribute('data-time') || 0)
        slides[currentSlide].style.display = 'block'

        if (!time) return
        setTimeout(() => {
            startSlide()
        }, time * 1000)
    }
    soundStartup.play()
    startSlide()
    playScene.parentNode.removeChild(playScene)
}) */