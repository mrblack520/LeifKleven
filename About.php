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
        @import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            background:#D8D8D8;
            font-family: 'Jost';
            color: #000;
            font: weight 400px;
            font: size 70px;
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
            margin-right:100px;
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
        .faqs{
            margin-left: 10%;
        }
        .faqsBg{
            position:relative;
            height:50%

        }
        .faqsCard{
            margin-top: 20px;
        }

        .contact-img{
            width: 100px;
            height: auto;
            position: absolute;
            float:right;

        }

        .slider-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        .slider-image {
            width: 50%;
            float: left;
        }
        .slider-text {
            width: 50%;
            float: right;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }
        .slider-button {
            text-align: center;
            margin-top: 10px;
        }
        .input-fields {
            display: flex;
            flex-wrap: wrap;
        }


        .card-body{
            margin-top:200px;
        }
        .card1 {
            font-size: 70px;
            width:500px;
        }
        .card2{
            width:500px;
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
            z-index: -1; /* Ensure the image is behind the form */
            top: 100; /* Position at the top */
            right: 0; /* Position at the right */
        }
        .custom-list li::before {
            content: "•";
            font-size: 8px;
            line-height: 12px;
            margin-right: 5px;
        }
        .bg-img{
            background-image: url("/Static/path.png");
            background-repeat: no-repeat;
        }
        .decorator0102{
            width: 20px;
            position: absolute;
            height: 60px;
            margin-top: 20px;
        }
        .decorator09{
            width: 100px;
            position: absolute;
            height: 10px;
            margin-top: -50px !important;
            margin-left: 520px;
        }
        .decorator0912{
            width: 100px;
            position: absolute;
            height: 10px;
            margin-top: -50px !important;
            margin-left: 620px;
        }
        .decorator0321{
            width: 40px;
            height: 80px;
            position: absolute;
            margin-top: 90px !important;
        }
    </style>

</head>
<body>
<!---------------------------- Header -------------------------->

<?php include 'header.php';?>

<!---------------------------- Header END -------------------------->

<!---------------------------- Section 1 -------------------------->
<div class="row" style=" background-color:#D8D8D8;">
    <div class="container-flex col-md-6 col-sm-12" style=" background-color:#D8D8D8;padding: 80px;">
        <amp-img class="p3Image" src="/Static/Container.png"
                 width="100" height="130" layout="responsive"style="object-fit: contain; max-width: 100%; max-height: 100%;">
        </amp-img>
    </div>

    <div class="container-flex p3content col-md-6 col-sm-12">

        <div class="container-flex col-md-12 col-sm-12" style="display: flex; align-items: center;  background-color:#D8D8D8; font-weight:10px;">
            <!-- Content -->
            <div class="container-flex p3content col-md-6 col-sm-12" style="padding-left: 0px; margin-top: 0;">
                <!-- Heading -->
                <amp-story-grid-layer template="fill">
                    <div class="card-body" style="font-weight:300;">
                        <h3 class="card-title">Leif Kleven</h3>
                        <h1 class="card1" style="font-weight:400;">The <span style="color:#B6975E ;font-weight:300;"><b>Rising </b></span> Star</h1>
                        <p class="card2">2016-2019 | The Super Lawyer Magazine </p>
                        <a href="#" class="btn1">Book Connsultant Now &#8594</a>
                    </div>
                </amp-story-grid-layer>
            </div>
        </div>
    </div>
    <!---------------------------- Section 1 END -------------------------->
    <!---------------------------- Section 2 -------------------------->
    <div class="container" style="margin-top:0px;">
        <div class="row">
        </div>
        <div class="container-flex p3content col-md-6 col-sm-12">
            <amp-img class="decorator3" src="/Static/Decorator01.png"
                     width="100" height="10" layout="responsive" style="margin-top:10px">
            </amp-img>
            <h1 style="margin-left:20px;font-size:70px; font-weight:380;">Bar Admissions</h1>
            <amp-img class="decorator09" src="/Static/Decorator01.png"
                     width="100" height="10" layout="responsive" style="margin-top:10px">
            </amp-img>
            <!-- Column for "Year 1" -->
            <div class="row bg-img" style="padding: 20px;padding-top: 70px;/* padding-left: 250px; */width: 1100px;">
                <div class="col-md-6" style="margin-bottom: 20px;padding-left: 220px;">
                    <h4>2009</h4>
                    <ul>
                        <li>State Bar Of Califonia
                        </li>
                        <li>United States Distinct Court For The Southern Distinct Of California</li>

                    </ul>
                </div>

                <!-- Column for "Year 2" -->
                <div class="col-md-6" style="margin-bottom: 90px; padding-left: 260px;">
                    <h4>2014</h4>
                    <ul>
                        <li>United States Distinct Court Of Appeals For The Ninth Circuit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------- Section 2 END -------------------------->
    <!---------------------------- Section 3 -------------------------->
    <div class="container">
        <amp-img class="decorator0102" src="/Static/Decorator01.png"
                 width="100" height="100" layout="responsive">
        </amp-img>
        <h1 style="margin-left:50px; font-size:70px; font-weight:380;">Education</h1>
        <amp-img class="decorator09" src="/Static/Decorator01.png"
                 width="100" height="10" layout="responsive" style="margin-top:10px">
        </amp-img>
        <div class="row">


            <div class="container">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- First column for the first image -->
                        <div class="col-md-6" style="max-width: 450px; margin-top:50px;">
                            <img src="/Static/School.png" class="img-fluid mx-auto d-block" alt="First Image">
                        </div>

                        <!-- Second column for the second image -->
                        <div class="col-md-6" style="max-width: 230px; margin-top:0px;margin-top:50px; ">
                            <img src="/Static/University.png" class="img-fluid mx-auto d-block" alt="Second Image">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!---------------------------- Section 3 END -------------------------->
    <!---------------------------- Section 4 -------------------------->

    <div class="container">
        <!-- Main heading -->
        <amp-img class="decorator0321" src="/Static/Decorator01.png"
                 width="100" height="10" layout="responsive" style="margin-top:10px">
        </amp-img>
        <h1 style="margin-top:90px; margin-left:50px;font-size:70px; font-weight:380;">Honors & Awards</h1>
        <amp-img class="decorator0912" src="/Static/Decorator01.png"
                 width="100" height="10" layout="responsive" style="margin-top:10px">
        </amp-img>
        <div class="row">
            <!-- First column with subheadings and lists -->
            <div class="col-md-6">
                <ul style="margin-top:50px; margin-left:50px; font-weight:600;"><li>Rising Star Super Lawyer Magzine</li></ul>

                <h6 style="margin-left:80px; font-weight:400;">2016 - 2019</h6>
                <ul style="margin-top:30px; margin-left:50px; font-weight:600;"><li>Top 100 Trial Lawyer</li></ul>

                <h6 style="margin-left:80px;font-weight:400;">2015</h6>
                <ul style="margin-top:30px;margin-left:50px; font-weight:600;"><li>The National Trial Lawyers</li></ul>

                <h6 style="margin-left:80px;font-weight:400;">2015</h6>
                <ul style="margin-top:30px;margin-left:50px; font-weight:600;"><li>Special Recognition, American Bar Association, Immigration Justice Project</li></ul>

                <h6 style="margin-left:80px;font-weight:400;">2012</h6>
                <ul style="margin-top:30px;margin-left:50px; font-weight:600;"><li>Wiley W. Manuel Award for Pro Bono Legal Services, State Bar of California</li></ul>

                <h6 style="margin-left:80px;font-weight:400;">2007</h6>
            </div>

            <!-- Second column with images -->
            <div class="col-md-6">
                <div>
                    <img src="/Static/image_2.png" alt="Image 1"  style="height:200px; margin-left:160px; margin-top:50px;">
                </div>
                <div>
                    <img src="/Static/image_1.png" alt="Image 2"style="height:200px; margin-top:40px; margin-left:130px;">
                </div>
            </div>
        </div>

    </div>
    <!---------------------------- Section 4 END -------------------------->
    <!---------------------------- Section 5 -------------------------->
    <div class="container">
        <div class="row">
            <div class="brown-line">

                <h1 style="margin-left:50px; margin-top:100px; font-size:70px; font-weight:380;">Professional Associations</h1></div>
            <!-- Column for "Year 1" -->
            <div class="col-md-6">
                <h4 style="margin-left:50px; margin-top:40px;font-weight:400;">Membership



                </h4>
                <ul class="custom-list">
                    <li style="margin-left:20px; list-style: none;">State Bar Of Califonia
                    </li>
                    <li style="margin-left:20px; list-style: none;">San Diego Criminal Defense Bar Association</li>
                    <li style="margin-left:20px; list-style: none;">The Source Professional Association</li>
                    <li style="margin-left:20px; list-style: none;">Tom Homann Law Association</li>

                </ul>
            </div>

            <!-- Column for "Year 2" -->
            <div class="col-md-6">
                <h4 style="margin-left:25px;margin-top:30px;font-weight:400;">Volunteer</h4>
                <ul class="custom-list">
                    <li style="margin-left:0px;list-style: none; margin-bottom:180px;">San Diego Volunteer Lawyer Program</li>
                </ul>
            </div>
        </div>
    </div>
    <!---------------------------- Section 5 END -------------------------->

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