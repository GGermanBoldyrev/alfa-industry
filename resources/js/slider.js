document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slider-slide');
    const dotsContainer = document.querySelector('.slider-dots');

    let currentIndex = 0;
    let timer;

    // Создаем точки
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('slider-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            resetTimer(); // Сброс таймера
            goToSlide(index);
        });
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.slider-dot');

    const updateSliderPosition = () => {
        wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    };

    const goToSlide = (index) => {
        currentIndex = index;
        updateSliderPosition();
    };

    const goToNextSlide = () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSliderPosition();
    };

    const startTimer = () => {
        timer = setInterval(goToNextSlide, 5000); // 5 секунд
    };

    const resetTimer = () => {
        clearInterval(timer);
        startTimer();
    };

    // Запуск таймера при загрузке
    startTimer();
});
