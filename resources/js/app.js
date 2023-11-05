import './bootstrap';
import 'flowbite';

const rotatingImage = document.getElementById('rotating-image');
    
document.addEventListener('mousemove', (e) => {
    const centerX = rotatingImage.offsetLeft + rotatingImage.offsetWidth / 1;
    const centerY = rotatingImage.offsetTop + rotatingImage.offsetHeight / 1;

    const angle = Math.atan2(e.clientY - centerY, e.clientX - centerX);
    const rotationDegrees = angle * (180 / Math.PI);

    rotatingImage.style.transform = `rotate(${rotationDegrees}deg) translate(-40px, -10px)`;
});