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
/* 
    document.querySelector('.neon-box').addEventListener('mouseover', function() {
        this.style.boxShadow = '0 0 20px rgba(255, 0, 255, 0.5), 0 0 40px rgba(255, 0, 255, 0.5), 0 0 60px rgba(255, 0, 255, 0.5)';
        this.querySelector('NeonT').style.textShadow = '0 0 5px #ff00ff, 0 0 10px #ff00ff, 0 0 20px #ff00ff';
        this.querySelector('NeonP').style.textShadow = '0 0 5px #ff00ff, 0 0 10px #ff00ff, 0 0 20px #ff00ff';
    });
    
    document.querySelector('.neon-box').addEventListener('mouseout', function() {
        this.style.boxShadow = '0 0 20px rgba(0, 255, 255, 0.5), 0 0 40px rgba(0, 255, 255, 0.5), 0 0 60px rgba(0, 255, 255, 0.5)';
        this.querySelector('NeonT').style.textShadow = '0 0 5px #00ffff, 0 0 10px #00ffff, 0 0 20px #00ffff';
        this.querySelector('NeonP').style.textShadow = '0 0 5px #00ffff, 0 0 10px #00ffff, 0 0 20px #00ffff';
    });
     */