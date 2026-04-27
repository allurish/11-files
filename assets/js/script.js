// Плавное появление карточек при прокрутке (лёгкая анимация)
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.photo-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(card);
    });
    
    // Авто-скрытие сообщения об успехе через 5 секунд
    const successMsg = document.querySelector('.message-success');
    if (successMsg) {
        setTimeout(() => {
            successMsg.style.opacity = '0';
            setTimeout(() => successMsg.remove(), 500);
        }, 5000);
    }
});