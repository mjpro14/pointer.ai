 // Use AJAX to load PHP output into the HTML


$(document).ready(function() {
    $('.nav-item').on('click', function() {
      // Remove 'active' class from all items
      $('.nav-item').removeClass('active');
  
      // Add 'active' class to the clicked item
      $(this).addClass('active');
    });
  });
  

  document.addEventListener('DOMContentLoaded', () => {
    // Add click event listeners to all anchor tags with a data-content attribute
    document.querySelectorAll('a.nav-link').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default link behavior

            // Get the URL from the data-content attribute of the clicked link
            const contentUrl = link.getAttribute('data-content');

            // Fetch the content and load it into the main element
            fetch(contentUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('v').innerHTML = html;

                    // Collapse the navbar after a link is clicked
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
                    bsCollapse.hide();
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    // Add click event listeners to all anchor tags with a data-content attribute
    document.querySelectorAll('a[type="button"]').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default link behavior

            // Get the URL from the data-content attribute of the clicked link
            const contentUrl = link.getAttribute('data-content');

            // Fetch the content and load it into the 'v' element
            fetch(contentUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('v').innerHTML = html;
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        });
    });
});



