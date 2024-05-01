
<head>
<script async src="https://cdn.ampproject.org/v0.js"></script> 
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-mustache" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style amp-custom>
    a:not([href]):not([tabindex]) {
    color: black;
    text-decoration: none;
    }
    .footer-links{
        text-decoration: none;
        color:black;
    }
    a :hover{
        color:#B6975E;
    }
    .copyright-text {
        font-family:Serif;
    }
    .footerlogo{
        width:300px;
        height:50px;
        margin: 10px 0 0 0;
    }
   
  .contactbtna{
      margin-top: 80px;
  }
  .hbt{

    color: black;

    border: none;
    border-radius: 0px;
    text-decoration: none; 

  }
  .bgv{
    background-color: #B6975E;
      height: 100px;
  }
  footer{
    width: 100%;
  }
  .row-w-c{
      height: 100px;
  }
  .txtcls{
      margin-left: 80px;
      margin-top: -30px;
      color:  #777777;

  }
    </style>

</head>

<body>

<div class="container-flex">
  <!---------------------------- Section 8 -------------------------->
    

  <div class="row row-w-c"  style="background-color: #D0D0D0;">
    <div class="container-flex col-md-10  col-sm-12 ">
        <amp-fit-text width="380" height="50" layout="responsive" id="fitText">
            <h4 class="txtcls">Let Us Manage Your Case</h4>
        </amp-fit-text>
    </div>

    <div class="container-flex p3content col-md-2 col-sm-12 bgv" style="display: flex; justify-content: center; align-items: center; font-size:20px">
        <a href="#" class=" hbt " id="contactBtn">Contact Us </a>
    </div>
</div>




<!---------------------------- Footer -------------------------->
  <!-- Footer -->
 <div class="row">
  <footer
          class="text-center text-lg-start text-black"
          style="background-color: #D8D8D8"
          >
    <!-- Grid container -->
    <div class="container-flex p-4 pb-0">
      <!-- Section: Links -->
      <section class="container-fluid">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
            <a href="#" >
                <amp-img class="footerlogo" src="/Static/sitelogo.png"
                width="1"
                height="1"
                layout="responsive"
                alt="LeifKelvin Logo">
                </amp-img></a>
            </h6>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <amp-fit-text >
              <a href="index.php" class="footer-links">Home</a>
            </amp-fit-text >
            <amp-fit-text >
              <a href="#" class="footer-links">Services</a>
            </amp-fit-text >
            <amp-fit-text >
              <a href="About.php" class="footer-links">About</a>
            </amp-fit-text >
            <amp-fit-text >
              <a href="contact-us.php" class="footer-links">Contact</a>
            </amp-fit-text >
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <amp-fit-text >
              <a class="footer-links">Privacy Policy</a>
            </amp-fit-text >
            <amp-fit-text >
              <a class="footer-links">Terms and Conditions</a>
            </amp-fit-text >
          </div>
<!-- Grid column -->

      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="copyright-text  col-md-6 col-lg-6 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
            Copyright © 2024 | All Rights Reserved
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-6 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-instagram"></i
              ></a>
          </div>
        </div>
      </section>
    </div>
  </footer>
</div>
</div>
    
</body>
