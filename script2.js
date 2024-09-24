
  const loginButton = document.getElementById('loginBtn');
  const spinner = document.getElementById('spinner');

  loginButton.addEventListener('click', async function(event) {
    event.preventDefault();

    // Get the username and password input values
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Show the spinner when login is clicked
    spinner.style.display = 'inline-block';

    try {
      // Send the login data to auth.php using Fetch API
      const response = await fetch('auth.php', {
        method: 'POST',  // Using POST method to send data securely
        headers: {
          'Content-Type': 'application/json'  // Ensure data is sent as JSON
        },
        body: JSON.stringify({  // Send username and password as JSON
          username: username,
          password: password
        })
      });

      if (!response.ok) {
        throw new Error('Network response was not ok');
      }

      const data = await response.json();  // Assume auth.php returns a JSON response

      // Hide the spinner once the request is complete
      spinner.style.display = 'none';

      // Handle login success or failure
      if (data.success) {
        // Show SweetAlert for successful login
        Swal.fire({
          icon: 'success',
          title: 'Login Successful!',
          text: 'You will be redirected shortly.',
          timer: 2000,
          showConfirmButton: false
        }).then(() => {
          // Redirect after success
          window.location.href = './home/index.php';  // Redirect to a dashboard or main page
        });
      } else {
        // Show SweetAlert for login failure
        Swal.fire({
          icon: 'error',
          title: 'Login Failed!',
          text: data.message,
          confirmButtonText: 'Try Again'
        });
      }
    } catch (error) {
      // Handle errors (e.g., network issues)
      spinner.style.display = 'none';
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Error logging in: ' + error.message,
        confirmButtonText: 'Try Again'
      });
    }
  });

