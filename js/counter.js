function animateValue(id, start, end, duration) {
    const obj = document.getElementById(id);
    let startTimestamp = null;

    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);

      
        obj.innerHTML = currentValue.toLocaleString();

        if (progress < 1) {
            window.requestAnimationFrame(step);
        } else {
        
            obj.innerHTML = end.toLocaleString() + "+";
        }
    };

    window.requestAnimationFrame(step);
}


function startCountOnScroll() {
    const counter = document.getElementById("counter");

  
    const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
           
            animateValue("counter", 0, 10000, 8000);
         
            observer.unobserve(counter);
        }
    });

    observer.observe(counter);
}


document.addEventListener("DOMContentLoaded", startCountOnScroll);