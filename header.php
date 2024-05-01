<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style amp-custom>   
    .header {
    background-color: black;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 800px 800px;
    height: 700px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    transition: opacity 0.3s ease-in-out;
    opacity: 1;
    z-index: 100;
}

.header.scrolled {
    opacity: 0.8;
}

.logo {
    width: 350px;
    height: 50px;
    margin-right: 420px; /* Adjusted margin to create space between logo and nav */
    margin-left: 60px;
}

nav ul {
    list-style: none;
    margin: 10px;
    padding: 10px;
    display: flex; /* Changed to flex to adjust spacing between nav items */
    align-items: center;
}

nav li {
    margin-left: 10px;
}

nav a {
    color: black; /* Changed font color to black */
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.nav-item a:hover {
    color: #B6975E; /* Changed hover font color to brown */
}

/* Change active link color */
.nav-item.active a {
    color: brown;
}

/* Change dropdown background color */
.dropdown-menu {
    background-color: brown;
    color:black;
}


    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a href="index.php" >
    <amp-img class="logo" src="/Static/sitelogo.png"
      width="1"
      height="1"
      layout="responsive"
      alt="LeifKelvin Logo">
    </amp-img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Personal Injury</a>
          <a class="dropdown-item" href="Appeals.php">Appeals</a>
          <a class="dropdown-item" href="Appeals2.php">Federal Criminal Defense</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>

</body>
