<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  <link href="css/login.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Add SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script defer src="script.js"></script>
<style>
    /* Container styling */
.container.loginform {
    width: 500px;
    padding: 20px;
    margin: 50px auto;
    background: rgba(255, 255, 255, 0.3); /* Semi-transparent background */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    backdrop-filter: blur(10px); /* Glass effect */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Subtle border */
}

/* Form title */
.container.loginform h3 {
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    color: #fafafa;
    margin-bottom: 20px;
}

/* Input group styling */
.input-group {
    position: relative;
    margin-bottom: 20px;
    text-align: left;
}

/* Icon styling */
.input-group i {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa;
    font-size: 18px;
}

/* Input field styling */
.input-group input {
    width: 100%;
    padding: 10px 20px 10px 40px; /* Padding for the icon */
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    background: rgba(255, 255, 255, 0.5); /* Slightly transparent background */
    transition: border-color 0.3s ease;
}

/* Input focus effect */
.input-group input:focus {
    border-color: #3498db;
}

/* Button styling */
.login-btn {
    width: 100%;
    padding: 10px;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.green-btn {
    width: 100%;
    padding: 10px;
    background-color: #0cb920;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.green-btn:hover {
    background-color: #2453b9;
}


/* Button hover effect */
.login-btn:hover {
    background-color: #2453b9;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('https://raw.githubusercontent.com/mjpro14/mjpro/refs/heads/master/Wallpaper.png') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
}

.inline-container {
    display: flex;
    align-items: center; /* Vertically centers items within the container */
    justify-content: center; /* Centers items horizontally within the container */
    gap: 10px; /* Space between the image and the heading */
}

.logo {
    margin: 0; /* Remove default margin */
    
}

.project {
    margin: 25; /* Remove default margin */
}

/* Optional: Adjust the width and alignment for responsiveness */
@media (max-width: 576px) {
    .inline-container {
        flex-direction: column; /* Stack items vertically on small screens */
        align-items: center; /* Center items horizontally */
    }

    .logo {
        margin-bottom: 10px; /* Space below the image */
      
    }
    .project {
        margin: 0; /* Remove default margin */
    }
}
.iconx{
    margin-top: 10px;
}


</style>

<link href="css/animations.css" rel="stylesheet" />
  <title>Log In</title>
   
</head>
<body>
<div class="container loginform">
  <div class="pullDown inline-container">
    <img  src="https://raw.githubusercontent.com/mjpro14/mjpro/refs/heads/master/Pointer_Logo-removebg-preview.png" width="50" alt="logo" class="logo">
    <h3 class="project">Pointer AI</h3>
  </div>
<style>
  .iconx{
    margin-top: 10px;
}

</style>
  <div class="expandOpen" id="v">
    <div class="input-group">
      <label for="username">User Name</label>
      <i class="fas fa-user iconx" ></i>
      <input type="text" id="username" class="username" placeholder="Enter your username">
    </div>

    <div class="input-group">
      <label for="password">Password</label>
      <i class="fas fa-lock iconx" ></i>
      <input type="password" id="password" class="password" placeholder="Enter your password">
    </div>

    <div class="inline-container">
      <button type="submit" class="login-btn" id="loginBtn">LOG IN</button>
    
      <button type="button" class="green-btn" onclick="window.location.replace('signup.php')">Sign Up</button>
    </div>

    <!-- Spinner -->
    <div class="spinner" id="spinner"></div>
  </div>
</div>
<script defer src="script2.js"></script>


</body>
</html>