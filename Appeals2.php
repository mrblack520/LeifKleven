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
        font-family: 'source serif 4';
    }
    
    .body-text-p2{
        margin: 0px 0px 25px 0px;
        font-family: 'source serif 4';
        color:;
    }
    .body-text-heading{
        margin: 0px 0px 30px 0px;
        font-family: 'source serif 4';
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
    </style>

</head>
<body>
    <!---------------------------- Header -------------------------->
  
    <?php include 'header.php';?>
    
    <!---------------------------- Header END -------------------------->

    
    <!---------------------------- Section 1 -------------------------->
    <div class="container-flex body-img">
        <amp-img src="/Static/Appeal2 banner.png" 
            width="1228" height="819" layout="responsive">
        </amp-img>
        <div class="image-text-body">
        <div class="body-text-heading " style="font-size:80px; margin-top:18px;">
                <amp-fit-text
                    width="200" height="50" layout="responsive">
                    Federal Criminal <br> Defense Attorney 
                </amp-fit-text>
                <amp-fit-text
                    width="300" height="20" layout="responsive" style="font-size:20px; margin-top:0px;">
                    San Diego, El Centro & Southern California
                </amp-fit-text>
            </div>
            <a href="#" class="btn1" style="background-color: ' . $backgroundColor . '; color: ' . $fontColor . ';">Book Consultant Now</a>

             </div>
    </div>

            <!---------------------------- Section 1 END -------------------------->

    <!-- Section 2: Details -->
    <div class="container" style="background:#D8D8D8;">
        <h1>Details</h1>
        <h2>San Diego Federal Criminal Defense Attorney</h2>
    </div>
    <!-- End of Section 2 -->

    <!-- Section 3: Introduction -->
    <div class="container" style="background:#D8D8D8;">
        <div class="row">
            <!-- Paragraph column -->
            <div class="col-md-6">
                <h3 style="padding:10px;margin-top:20px;font-weight: normal;">If you or a loved one has been arrested or charged with a federal crime in U.S. District Court, we are here to protect and represent you.</h3>
            </div>
            <!-- Image column -->
            <div class="col-md-6">
                <amp-img src="/Static/Appeal2.png" alt="Image" width="200" height="80" layout="responsive"></amp-img>
            </div>
        </div>
    </div>
    <!-- End of Section 3 -->

    <!-- Section 4: About the Attorney -->
    <div class="container" style="background:#D8D8D8;">
        <p style="font-size:25px;">San Diego Federal Criminal Defense Attorney Leif Kleven is experienced at representing defendants in federal cases. Your freedom and future are at stake once you have been charged with a federal crime.</p>
    </div>
    <!-- End of Section 4 -->

    <!-- Section 5: Attorney's Dedication -->
    <div class="container" style="background:#D8D8D8;">
        <p style="font-size:25px;">Attorney Leif Kleven is dedicated to representing you and tailoring a defense for you. Our office vigorously defends all federal charges including federal drug trafficking charges, child pornography, money laundering, alien smuggling, and illegal reentry.</p>
        <p style="font-size:25px;">Attorney Leif Kleven will fight for you. He has the federal trial experience in U.S. District Court and experience before the Ninth Circuit Court of Appeal to fight for your rights at every step.</p>
    </div>
    <!-- End of Section 5 -->

    <!-- Section 6: Time Sensitivity -->
    <div class="container" style="background:#D8D8D8;">
        <div class="row">
            <h1 style="font-weight: normal;">Time is Not on Your Side</h1>
            <!-- Paragraph column -->
            <div class="col-md-6">
                <p style="font-size:25px;">Once you have been arrested or charges have been filed the clock is ticking. You need a skilled and experienced attorney to advocate for you and protect your rights.</p>
            </div>
            <!-- Paragraph column -->
            <div class="col-md-6">
                <p style="font-size:25px;">Every minute matters, so do not hesitate to contact our office. Our office is available 24 hours a day, 7 days a week. Call 619-796-3680 now.</p>
            </div>
        </div>
    </div>
    <!-- End of Section 6 -->

    <!-- Section 7: Innocent Until Proven Guilty -->
    <div class="container" style="background:#D8D8D8;">
        <h1 style="font-weight: normal;">You are Innocent Unless Proven Guilty</h1>
        <p style="font-size:25px;">You have rights and Attorney Leif Kleven will work for you to protect all of your rights. Remember, DO NOT SPEAK to law enforcement or investigators about your federal charges without an attorney being present to represent YOU.</p>
    </div>
    <!-- End of Section 7 -->

    <!-- Section 8: Federal Criminal Defense Process -->
    <div class="container"style="background:#D8D8D8;">
        <h1 style="font-weight: normal;">Federal Criminal Defense Process</h1>
        <p style="font-size:25px;">Federal criminal charges are different than state court crimes and the procedures are vastly different. You need an attorney who has the skills and experience to maneuver the complexities of federal court.
        We have provided additional resources to help you understand the process of federal crimes.</p>
    </div>
    <!-- End of Section 8 -->
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