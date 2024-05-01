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
        background-color:#D8D8D8;
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

     <!---------------------------- Body -------------------------->
<!---------------------------- Section 1 -------------------------->
     <div class="container-flex body-img">
        <amp-img src="/Static/banner-appeals.png" 
            width="1228" height="819" layout="responsive">
        </amp-img>
        <div class="image-text-body">
        <div class="body-text-heading " style="font-size:80px; margin-top:18px;">
                <amp-fit-text
                    width="200" height="50" layout="responsive">
                    Civils & Criminal <br> Appeals
                </amp-fit-text>
            </div>
            <a href="#" class="btn1" style="background-color: ' . $backgroundColor . '; color: ' . $fontColor . ';">Book Consultant Now</a>

             </div>
    </div>

            <!---------------------------- Section 1 END -------------------------->
            <!---------------------------- Section 2 -------------------------->
            <div class="container"  style="background:#D8D8D8;">
            <amp-img class="decorator01" src="/Static/Decorator01.png" 
            width="100" height="100" layout="responsive">
        </amp-img>       
    <h1>Details</h1>
    <p style="font-size:25px;">If you are unhappy with the decision of the trial court (often called the “lower court”) you may be able to appeal to a higher court. For state court matter, the decisions of the Superior Court are appealed to the Courts of Appeal for the specific county’s court. In federal court, decisions from the District Courts in California are appealed to the Ninth Circuit Court of Appeals. Attorney Leif Kleven is licensed to practice before all of the Courts of Appeal in the State of California and the Ninth Circuit Court of Appeals.</p>
  </div>
 <!---------------------------- Section 2 END -------------------------->
  <!---------------------------- Section 3 -------------------------->
 <div class="container" style="background:#D8D8D8;">
    <div class="row">
      <!-- Paragraph column -->
      <div class="col-md-6">
        <p style="font-size:25px;">Not every decision may instantly be reviewed by an appellate court. There are also strict timelines that must be followed in deciding to file an appeal and providing notice of the appeal. If you are unhappy with the decision of the court, you should speak with an appellate attorney as soon as possible to determine if you may appeal and when a notice must be filed. If you believe that your matter was wrongly decided, contact Attorney Leif Kleven to schedule a consultation.</p>
      </div>
      <!-- Image column -->
      <div class="col-md-6">
        <amp-img src="/Static/Appeal 1.png" alt="Image" width="300" height="200" layout="responsive"></amp-img>
      </div>
    </div>
  </div>
   <!---------------------------- Section 3 END --------------------------> 
   <!---------------------------- Section 4 -------------------------->
            <div class="container" style="background:#D8D8D8;">

    <p style="font-size:25px;">Often, appeals are technical. First, appeals ask a higher court to determine if the decision of a lower court was correct. This may require extensive legal research and briefing by an experienced appellate attorney. Attorney Leif Kleven has researched and briefed a variety of legal issues to both state and federal court. Second, appeals have different rules than lower courts. These rules require specific documents to be prepare and provided to the court so that it may complete its review of the lower court’s decision.</p>
  </div>
 <!---------------------------- Section 4 END -------------------------->
  <!---------------------------- Section 5 -------------------------->
 <div class="container" style="background:#D8D8D8;">
    <div class="row">
        <!-- Image column -->
      <div class="col-md-6">
        <amp-img src="/Static/Appeal 2.png" alt="Image" width="300" height="140" layout="responsive"></amp-img>
      </div>
      <!-- Paragraph column -->
      <div class="col-md-6">
        <p style="font-size:25px;">Once a case is fully briefed, the court may issue a ruling on the briefs alone. Occasionally, the court will request oral arguments so that it may inquire as to specific issues. Attorney Leif Kleven has successfully argued before the Ninth Circuit Court of Appeal. (Read the press release here.)</p>
      </div>
      
    </div>
  </div>
   <!---------------------------- Section 5 END -------------------------->
    <!---------------------------- Section 6 -------------------------->
    <div class="container" style="background:#D8D8D8;">

<p style="font-size:25px;">Whether you have a criminal or civil case (including family law matters), and whether your case was in federal court or state court, Attorney Leif Kleven has the experience to represent you. Contact our office today to schedule a complimentary consultation.</p>
</div>
<!---------------------------- Section 6 END -------------------------->


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