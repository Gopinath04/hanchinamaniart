<?php
session_start();
if(isset($_POST['submit']))
{
	


//$to  = 'gopinath04@gmail.com';
$to  = 'khhanchinamani@gmail.com';


// subject
$subject = 'Kariyappa Hanchinamani';
			
	$message = '
				<html>
					<head>
					</head>
					<body>
					<table border="1" cellspacing="1" cellpadding="5">
					<tr>
						<td colspan="3"><strong>Kariyappa Hanchinamani - Enquiry</strong></td>
					</tr>
						
					
					<tr>
						<td>Name</td><td>:</td><td>'.$_POST['name'].'</td>
					</tr>					
								
					<tr>
						<td>Email </td><td>:</td><td>'.$_POST['email'].'</td>
					</tr>
					
					
					<tr>
						<td>Mobile </td><td>:</td><td>'.$_POST['mobile'].'</td>
					</tr>
					
					<tr>
						<td>Address </td><td>:</td><td>'.$_POST['address'].'</td>
					</tr>
					
					<tr>
						<td>How can I help you</td><td>:</td><td>'.$_POST['help'].'</td>
					</tr>		
									
					</table>
					</body>
				</html>'; 

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n" . 	'From: Kariyappa Hanchinamani <info@kariyappaart.in>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1';

	
	// Mail it
	if(mail($to, $subject, $message, $headers))
	  $msg = 'E-mail sent successfully, We will contact you very shortly';
	else
	 $msg = 'no';
 
 
 
 }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Kariyappa Hanchinamani | Enquiry</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta name="author" content="">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,600,700,800' rel='stylesheet' type='text/css'>
    
    
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/snap.svg-min.js"></script>
    
   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
 			 <!-- HEADER -->
	<header id="header">
		<section class="innerbanner">
		    <div class="demo-inner-content">			
            <div class="texture-overlay"></div>
		
        <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="img/kariyappa-logo.png" alt="Kariyappa Logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="artist-stories.html">Artist Stories</a></li>
				<li><a href="news-events.html">News & Events</a></li>
				<li><a href="figurative-painting.html">Collection</a></li>
				<li class="active"><a href="enquiry.php">Enquiry</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="getin-touch.html">Get in touch</a></li>
                
              </ul>
            </div>
          </div>
        </nav>
        </div>
		</section> 
	</header>
	<!-- /HEADER -->
        
      
    <section id="enquiry">
			<div class="container">
			<div class="row">
					<div class="col-md-12 text-center">            
                     <h1 class="text-center">Enquiry</h1>
                    <hr class="separator1">
                    <div class="space30"></div> 
                    
                    
        <div class="book_date1">
		<form method="post" action="enquiry.php">  
        
        <?php 
			if($captchamsg != ''){
			?>
          <div class="alert alert-success" role="alert">
  			<?php echo $captchamsg; ?>
            
            </div>
            <?php
			}		
			?>
            
            
           <?php 
			if($msg != ''){
			?>
          <div class="alert alert-success" role="alert">
  			<?php echo $msg; ?>
            </div>
            <?php
			}		
			?> 
              
       <input type="text" name="name" placeholder="Full Name *" required>       
       <input type="email" name="email" placeholder="Email *" required>  
       <input type="text" placeholder="Mobile *" name="mobile" required>      
        <textarea name="address"  placeholder="Address *"  rows="5" required></textarea>
        <textarea name="help" placeholder="How can I help you"  rows="5"></textarea>
        
        <div class="clearfix"></div>
        <img src="CaptchaSecurityImages.php?width=100&amp;height=40&amp;characters=5" style="padding-top:5px; padding-left:5px; padding-bottom:10px;" />      
        <input type="text" id="security_code" name="security_code" required placeholder="Enter code here" style="width:40%">
       <div class="date_btn1">
	   <input type="submit" name="submit" value="Submit" class="submit"/></div>       
		</form>     		
        </div>
        
        
                   </div>
                   <div class="clearfix"></div>
                   <div class="space30"></div>                    
                                  
						
					
		</div>
		</div>
		</section>
        
        
         
    
     
     
          <footer>
			<div class="container">
		    <div class="row">
			<div class="col-md-12 text-center">
           <div class="social">
							<a href="https://www.facebook.com/kariyappa.hanchinamani" target="_blank"><span class="fa fa-facebook"></span></a>
							<a href="https://twitter.com/KHHANCHINAMANI" target="_blank"><span class="fa fa-twitter"></span></a>
							<a href="https://www.youtube.com/channel/UC2Pk9v76G8J93sejXiLeeFg" target="_blank"><span class="fa fa-youtube"></span></a>
							<a href="https://www.linkedin.com/nhome/?trk=nav_responsive_tab_home" target="_blank"><span class="fa fa-linkedin"></span></a>							
							<a href="https://plus.google.com/u/0/105695230894605035644/posts" target="_blank"><span class="fa fa-google-plus"></span></a>
					</div>
            <p class="copyright">
			Copyright © 2015 Kariyappa H Hanchinamani. All rights reserved.<br> Powered by <a href="http://getitdesign.in/" target="_blank">Getit Design</a></p>
             
            
            </div></div></div>  
       </footer>          
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/jquery.zoomslider.min.js"></script>
    
    
    
  </body>
</html>