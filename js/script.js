// Function to animate the counter



function reloadGif(id) {
    const img = document.getElementById(id);
    if (img) {
        const timestamp = new Date().getTime();
        img.src = `./gif/ani.gif?${timestamp}`;
    }
}

// Reload GIFs every 10 seconds
setInterval(() => {
    reloadGif('spot-gif');
    reloadGif('futures-gif');
    reloadGif('hedge-gif');
}, 4000);



 // Function to check if an element is in view
 function isInView(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to add the active class if the element is in view
function handleScroll() {
    const elements = document.querySelectorAll('.animate');
    elements.forEach(element => {
        if (isInView(element)) {
            element.classList.add('active');
        }
    });
}

// Attach the scroll event listener
window.addEventListener('scroll', handleScroll);

// Initial check in case elements are already in view
handleScroll();


window.addEventListener('scroll', function() {
    var element = document.querySelector('.element');
    var position = element.getBoundingClientRect().top;
    var screenHeight = window.innerHeight;
  
    // Check if the element is visible in the viewport
    if (position < screenHeight && position > 0) {
      element.classList.add('active');
    }
  });
  