
<!doctype html>
<html ⚡>
<head>

    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-mustache" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity= "sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>

    <title>LeifKleven</title>

    <style amp-custom>
        body {
            margin: 0;
            padding: 0;
            background:#D8D8D8;
            font-family: 'Jost';
            color: #000;
            font: weight 100px;
            font: size 40px;
        }
        .image-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px;
            font-size: 18px;
        }

        .image-text-body {
            color: white;
            width: 80%;
            position:absolute;
            top:10%;
            left: 10%;
        }
        .body-img{
            position: relative;
            box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.3);
        }

        .newsletter-form{
            background: rgba(169,169,169,0.1);
            height: 50px;
            padding: 10px;
            border-radius: 10px;
        }
        .btn-submit{
            height: 40px;
            border-style: none;
            padding: 10px;
            border-radius:5px;

        }
        .body-text{
            margin: 30px 0px 30px 0px;
            font-family: 'Jost';
        }

        .body-text-p2{
            margin: 0px 0px 25px 0px;
            font-family: 'Jost';
            color:;
        }
        .body-text-heading{
            margin: 0px 0px 30px 0px;
            font-family: 'Jost';
        }
        .page-2{

            padding:40px 0 40px 40px;
            position: relative;
            background: #D8D8D8;
            color: #434343;
        }
        .decorator01{
            width:20px;
            height: 60px;
            position:absolute;
            margin:0px 0px 0px -40px;
            top: 13%;
        }

        .decorator{
            width:100px;
            height: 10px;
            position:absolute;
            margin:0px 0px 0px -40px;
            top: 20%;
            left: 45%;
        }
        .decorator3{
            width:20px;
            height: 80px;
            position:absolute;
            margin:20px 0 0 -30px;
        }
        .p3content{
            margin-top:20px;
            padding: 30px;
        }
        .p5content{
            position:absolute;
            font-family:'Jost';
            margin:30px;
            border-radius:20px;
            background: rgba(255,255, 255, 0.5);
        }
        .body-text-p5{
            margin: 0px 0px 25px 0px;
            font-family: 'Jost';
            color:;
        }
        @media only screen and (max-width: 768px) {
            .p5content {
                width:35%;
                position:absolute;
                margin: 10px 0 0 10px;
                font-family:'Jost';
                padding: 20px;
                font-size: 10px;
                background: rgba(255,255, 255, 0.5);
            }

            .body-text-p5{
                font-family: 'Jost';
                font-size: 10px;
            }
        }
        .p6content{
            position:absolute;
            margin: 25px 0 0 50px;
            font-family:'Jost';
            padding: 50px;
            color: #fff;
        }


        .card1 {
            font-size: 70px;
        }
        .btn1 {
            background-color: #B6975E;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 0px;
            text-decoration: none;
            height:38px;
        }

        .btn1:hover {
            background-color: #B6975E;
            color: #ffffff;
            text-decoration: none;
        }

        .contact-img {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%; /* Adjust as needed */
            z-index: -1; /* Ensure the image is behind the form */
        }
        .gradient-bg {
            position: relative;
            background: linear-gradient(90deg, #C4C4C4 0%, #2E2E2E 100%);
            z-index: 0;
        }
        .container {
            padding: 20px;
        }
    </style>

</head>
<body>
<!---------------------------- Header -------------------------->

<?php include 'header.php';?>

<!---------------------------- Header END -------------------------->
<!-----------------------------Section 1 --------------------------->
<div class="row">
    <!-- Container for image and content -->
    <div class="container-flex col-md-12 col-sm-12" style="display: flex; align-items: center; background:#D8D8D8;">
        <!-- Content -->
        <div class="container-flex p3content col-md-6 col-sm-12">
            <!-- Heading -->
            <amp-story-grid-layer template="fill">
                <div class="card-body">
                    <h3 class="card-title">Law Office Of Leif Kleven</h3>
                    <h1 class="card1">Let’s Collaborate</h1>
                    <p class="card-text">Working Hours : Monday-Friday: 8 am -<br> 5 pm & Saturday-Sunday : By Appointments <br>Only.</p>
                    <a href="#" class="btn1">Book Consultant Now</a>
                </div>
            </amp-story-grid-layer>
        </div>

        <!-- Image -->
        <div class="container-flex col-md-6 col-sm-12"style="margin-left: -0px;">
            <amp-img class="p3Image" src="/Static/Container.png" width="110" height="120" layout="responsive" style="margin-bottom:100px;"></amp-img>
        </div>
    </div>
</div>

<!---------------------------- Section 2 Contact Form -------------------------->
<?php

include_once 'function.php';


handle_form_submission();
?>
<div class="gradient-bg">
    <div class="row">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h1 class="mb-3" style="margin-left:20px;">
                        <amp-fit-text width="480" height="100" layout="responsive">
                            Contact Us
                        </amp-fit-text>
                    </h1>
                    <form method="POST" action-xhr="contact-us.php" target="_top" >
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="your-name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="your-name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="your-email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="street-address" class="form-label">Street Address</label>
                                <input type="text" class="form-control" id="street-address" name="street-address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone-number" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone-number" name="phone-number">
                            </div>
                            <div class="col-12">
                                <label for="your-message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="your-message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn1" value="Submit" name="submit" style="background-color:{{backgroundColor}}; color:{{fontColor}};">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-img">
                    <amp-img class="" style="width:50%; height: auto; float:right;" src="/LeifKleven/Static/contactFormLogo.png"
                             width="1"
                             height="1"
                             layout="responsive"
                             alt="contactFormLogo">
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------- Section 2 End -------------------------->


<!---------------------------- Footer -------------------------->
<?php include 'footer.php';?>
<!---------------------------- Footer END -------------------------->



<script>
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        if (scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });


</script>
<script>
    $('.card-header').click(function() {
        $(this).find('i').toggleClass('fas fa-plus fas fa-minus');
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
