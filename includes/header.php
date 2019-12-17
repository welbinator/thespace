<?php include "admin/db.php"; ?>
<?php include "functions.php"; ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
       
      <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">


        <title>The Space - Coworking Space and Community for Iowa Creatives and Freelancers</title>
        <meta name="description" content="A space to support creativity and celebrate collaboration, located in Cedar Rapids' historic NewBo District.">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <?php 

$uri = $_SERVER['REQUEST_URI'];

switch($uri) { // this uses the URL to include particular pages
case '/referral.php';
include "includes/page-meta-referral.php";
break;

default:

include "includes/page-meta.php";

break;
}

?>    


        <link rel="apple-touch-icon" href="favicon.png">
      <link rel="shortcut icon" href="favicon.png" />
        <!-- Place favicon.ico in the root directory -->

<!--         <link rel="stylesheet" href="css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/animate-heading.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      
      
        <?php include "includes/analytics.php"; ?>
      <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1319557131509842');
  fbq('track', 'PageView');
</script>
<noscript><img loading="lazy" height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1319557131509842&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
      
      
    </head>
    <body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start --><header class="top">
			<div class="header-area header-sticky">



        <div class="container">
       <?php include "includes/navigation.php"; ?>

        </div>


			</div>
		</header>

     