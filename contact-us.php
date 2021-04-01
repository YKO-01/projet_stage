<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

//Instantiation and passing `true` enables exceptions
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $visitor = $_POST['email'];
    $message = $_POST['message'];
    $tel = $_POST['tel'];
    
    $subject = 'message from';
    $headers = 'from '.$visitor.'\r\n';
    $to = 'ahmedyakoubi913@gmail.com';
    
    mail($to,$subject,$message,$headers);
}
?>


<html lang="ar" ><head>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>SALBODIN</title>
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="font/flaticon.css">
    

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">
<!--swal js-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!--end swal-->
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="http://thavasu.com/demo/property-listing/index.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="fonts.google/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
		<script>
function login_val()
{
$(window).on('load', function() {
	 setTimeout(function(){
	   $('#login').modal('show');
   });
   
});
}
</script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/1/util.js"></script></head>

<body>
<!--<div class="page_loader"></div>-->
<?php include "../include/template/header.php" ?>
<!-- Main header end -->



<!-- Modal -->
<div class="discription">
        <div class="container">
            <div class="menu-discription">
                <div class="subtitle">
                    <h2>Contact Page</h2>
                </div>
                <div class="subtext">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis dolor eligendi eum facere, illum ipsa magni nulla odio perspiciatis, quis quos soluta tempore, totam.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
      <div class="container"><div class="row">
        <div class="col-lg-4">
            <h4 class="sent-notification"></h4>
          <fieldset><legend class="heading-2">رسالة اخبارية</legend>
        <form id="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="contact-form">
            <input type="text" placeholder="الاسم كامل" required title="enter your full name" name="name" id="name"><br>
            <input type="email" placeholder="البريد الالكتروني" required title="enter your email" name="email" id="email"><br>
            <input type="tel" required title="enter your number phone" name="tel" id="tel" placeholder="رقم الهاتف">
            <textarea name="message" id="" cols="15" rows="5" placeholder="الرسالة" id="message"></textarea><br>
            <input type="submit" value="ارسال" class="btn search-button" name="send" id="send">
        </form>
      </fieldset></div>
        <div class="col-lg-8">
       <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">عنوان مكتبنا</h3>
                        <iframe class="detail-map-height" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.3665571669052!2d-6.359328185780575!3d32.32893015503394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDE5JzQ2LjQiTiA2wrAyMSczMy4wIlc!5e1!3m2!1sfr!2sma!4v1613907098380!5m2!1sfr!2sma&amp;q=Maroc" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div></div>
      </section></div></div>

<!-- Footer start -->
<?php include "../include/template/footer.php" ?>
<!-- Footer end -->

<!-- Full Page Search -->
 
<script src="http://thavasu.com/demo/property-listing/maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="cdnjs/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-submenu.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/leaflet-providers.js"></script>
<script src="js/leaflet.markercluster.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/maps.js"></script>
<script src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://thavasu.com/demo/property-listingjs/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="http://thavasu.com/demo/property-listingjs/ie10-viewport-bug-workaround.js"></script>
<script>
    function sendEmail(){
        var name = $("#name");
        var eamil = $("#email");
        var message = $("#message");
        if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(massege)){
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json';
                data:{
                    name: name.val(),
                    email: email.val(),
                    message: message.val()
                }, success: function(response){
                    $('#muform')[0].reset();
                    $('.sent-notification').text("message sent");
                }
            });
        }
    }
</script>
</body></html>
