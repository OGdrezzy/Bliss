<?php 
include_once("conn.php");

session_start();

$cookie_name = "bliss_user_preference";
$cookie_value = "dark_mode";
$expiration = time() + (86400*30);

setcookie(
	$cookie_name,
	$cookie_value,
	[
		'expires' => $expiration,
		'path'    => '/',
		'domain'  => '',
		'secure'  => true,
		'httponly' => true,
		'samesite' => 'lax'
	]

);

if (isset($_COOKIE['bliss_user_preferences'])){
	echo "Preference:" .htmlspecialchars($_COOKIE['bliss_user_preference']);
}



error_reporting(E_ALL);
ini_set('display_error', 1);


?>

<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bliss Promotions</title>
        <meta name="Bliss Promotion Services" content="Blisspromotions">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstap.css">
        <link href ="css/main.css" rel="stylesheet">
		<link href ="css/socials.css" rel="stylesheet">
		<link href ="css/cookies.css" rel="stylesheet">
		<link href ="css/aboutus.css" rel="stylesheet">
		<link href ="css/contactus.css" rel="stylesheet">
		<link href ="css/form.css" rel="stylesheet">
		<link href ="css/test.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsrap@5.3.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="js/jQuery.js"></script> 
        <script src="js/sidenav.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/loader.js"></script>
        <script src="js/navbar.js"></script>    
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

		

	</head>
	
	<body id="myPage" data-spy="scroll" data-target=".navbar .sidenav" data-offset="60">
	    <div id="loader"></div>
	    <div id="main" style="display:hidden;">
	        <nav class="navbar navbar-default navbar-fixed-top" role="navbar">
	    	<div class="container-fluid" id="navbarContainer">
	    		<div class="navbar-header">
	    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    				<span class="icon-bar bara"></span>
	    				<span class="icon-bar barb"></span>
	    				<span class="icon-bar barc"></span>
	    			</button>
	    		</div>
	    		<div class="collapse navbar-collapse" id="myNavbar">
	    			<ul class="nav navbar-nav">
	    				<li>
	    					<a onclick="openNav()" id="sidenavBtn" class="nav-a">Promotions</a>
	    				</li>
	    				<li>
	    					<a href="#aboutus" class="nav-a">About Bliss Promotions</a>
	    				</li>
	    				<li>
	    					<a href="#contactus" class="nav-a">Contact Us</a>
	    				</li>
	    			</ul>
	    		</div>
	    	</div>
	    </nav>
	    	<div class="jumbotron text-center"  >
				<a href="index.php">
	    	    <img src="images/Bliss_logo.jpg" width="190" height="150"/>
			</a>
	    	</div>
	    	 <nav id="mySidenav" class="sidenav navbar navbar-left" role="navbar">
	        <div class="container-fluid" id="navbarContainer">
	        <div class="navbar-header text-center">
	            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	            <h3>Promotions</h3>
	        </div>

	    		<ul class="nav navbar-nav">
	    			<li>
	    				<a href="php/events.php">Bliss Events </a>
	    			</li>
	    		</ul>

	        </div>
	    </nav>

			<div id="cookie-banner" class="cookie-banner" style="display: flex; position: fixed; bottom: 0; left: 0; width: 100%; background-color: #1a1a1a !important; color: #fff !important; padding: 15px 25px !important; z-index: 2147483647 !important; display: flex !important; justify-content: space-between !important; align-items: center !important; pointer-events: auto !important; box-sizing: border-box !important;">
				<span style="font-size: 14px; margin-right: 15px;">We use cookies to enhance your browsing experience on Bliss Promotion. By cicking Accept, you agree to use of our cookies. <a href="php/privacy-policy.php"> Privacy Policy</a></span>

				<div style="display: flex; gap: 10px; align-items: center; position: relative !important; z-index: 2147483647 !important;">
					<button type="button" onclick="document.cookie=&quot;blis_cookie_consent=declined; max-age=604800; path=/; SameSite=Lax&quot;; this.closest('#cookie-banner').style.setProperty('display', 'none', 'important');" style="background-color: transparent !important color: #fff !important; border: 1px solid #c59d5f !important; padding: 9px 18px !important; border-radius: 4px !important; cursor: pointer !important; font-weight: bold !important; white-space: nowrap !important; position: relative !important; z-index: 2147483647 !important; pointer-events: auto !important;">Decline</button>
					<button type="button" onclick="document.cookie=&quot;bliss_cookie_consent=accepted; max-age=2592000; path=/; SameSite=Lax&quot;; this.closest('#cookie-banner').style.setProperty('display', 'none', 'important');" style="background: darkgoldenrod !important; color: #fff !important; border: none !important; padding: 10px 22px !important; cursor: pointer !important; border-radius: 4px !important; position: relative !important; z-index: 2147483647 !important; pointer-events: auto !important; font-weight: bold !important; white-space: nowrap !important;"> Accept</button>
				</div>
				</div>

			<script>
					(function() {
					if (document.cookie.indexOf("bliss_cookie_consent=") !== -1) {
						var banner = document.getElementById("cookie-banner");
						if (banner) banner.style.setProperty("display", "none", "important");
					}
				})();
				</script>

		

				<article class="about-card">
					<span class="about-badge">Who We are</span>
					<h1 class="about-title">About Us</h1>
					<p class="about-description">
						Welcome to Bliss Promotions, where passion meets visibility. We are a premier digital promotion and marketing platform dedicated to elevating the voices, identities and reaches of dynamic brands, gospel music artists and innovative startup companies. </p>
					<p class="about-description">Our mission is simple: to transform your hard work, creative talent and entrepreneurial vision into widespread public recognition. We believe that every impactful message, ground-breaking product and inspiring song deserves an audience and we build the bridges to help you reach them.</p>

					<h2 class="about-title">Who We Serve</h2>
					<p class="about-description">At Bliss Promotion, we understand that different industries require specialized approaches. We pride ourselves on our ability to craft distinct, targeted promotional frameworks for three core sectors:</p>
					<p class="about-description">Brands</p>
					<p class="about-description">Gospel Music Artists</p>
					<p class="about-description">Startup Companies</p>

					<h3 class="about-title">Why Choose Bliss Promotions?</h3>
					<p class="about-description">Tailored Strategies: We don't believe in one-size-fits-all marketing. Every campaign we design in specifically optimized for your unique goals, target demographics and industry standard.</p>
					<p class="about-description">Multichannel Distribution: We leverage a vast network of digital platforms, media outlets and social spaces to ensure your promotional materials achieve maximum structural outreach.</p>
					<p class="about-description">Passion-Driven Execution: Whether we are promoting a corporate brand, a disruptive tech product, we bring the same high level of energy, professionalism and dedication to your campaign.</p>

										
	    		<div class ="about-stats">
	    		<div class="stat-item">
				<div class="stat-number">5</div>
				<div class="stat-label">Years Experience</div>
				</div>
				<div class="stat-item">
					<div class="stat-number">30+</div>
					<div class="stat-label">Events Done</div>
				</div>
				</div>
				</article>
				
			<div class="testimonial-carousel">
				<input type="radio" name="testimonial" id="slide-1" checked>
				<input  type="radio" name="testimonial" id="slide-2">
				<input  type="radio" name="testimonial" id="slide-3">

				<div class="slides">
					<div class="slide">
						<div class="quote-icon"></div>
						<p class="quote-text">"Bliss Promotion took my gospel single beyong our local audience. The playlist placement and campaign strategy doubled our stream count in under two weeks."</p>
						<div class="client-info">
							<h4 class="client-name">Joseph Grey</h4>
							<span class="client-role">Artist </span>
					</div>
					</div>

					<div class="slide">
						<div class="quote-icon"></div>
						<p class="quote-text">"Scaling our user base was tough until we partnered with Bliss. Their targeted digital marketing gave us the exact traction and visibility we needeed to launch."</p>
						<div class="client-info">
							<h4 class="client-name">Abiodun Timileyin </h4>
							<span class="client-role">Manager </span>
					</div>
					</div>
				
				<div class="slide">
						<div class="quote-icon"></div>
						<p class="quote-text">"High energy, seamless execution and transparent reporting. They handled our brand activation seamlessly and delivered exceptional ROI."</p>
						<div class="client-info">
							<h4 class="client-name">Adetunji Ayodeji </h4>
							<span class="client-role">Managing Director </span>
					</div>
					</div>
					</div>

				<div class="carousel-dots">
					<label for="slide-1" class="dot"></label>
					<label for="slide-2" class="dot"></label>
					<label for="slide-3" class="dot"></label>
					</div>
					</div>



	    	<div id="contactus">
				<article class="contactus-card">
					<span class="contactus-badge">You can get our contact details below</span>
					<h4 class="contactus-title">Get In Touch With Us </h4>

					<div style="position:absolute !important; left:50% !important; transform:translateX(-50%) !important; display:flex !important; flex-direction:column !important; align-items:center !important; justify-content:center !important; margin:25px 0 !important; z-index:999 !important; white-space:nowrap !important;">
					<div style="display:flex !important; align-items:center !important; text-align:left !important; margin-bottom:12px !important;">
						<div style="width:50px; !important; height:50px !important; min-width:50px !important; border:1px solid darkgoldenrod !important; border-radius:50% !important; display:flex !important; align-items:center !important; justify-content:center !important; margin-right:15px !important;">
							<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="darkgoldenrod" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="display:block !important;">
						<path fill-rule="evenodd" d="M1.855.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
					</svg>
				</div>
	
				<div>
					 <p style="margin:0 !important; font-weight:bold !important; color:darkgoldenrod !important; font-size:14px !important; text-transform:uppercase !important;">Phone:</p>
				   <a href="tel: +15167341687" style="text-decoration-none !important; font-weight:50 !important; color:darkgoldenrod !important; font-size:18px !important; display:block !important;">+15167341687</a> 
				</div>
				</div>

				<div style="text-align:center !important;">
                  <a href="mailto:blisspromotionss@gmail.com" style="text-decoration:none !important; color:darkgoldenrod !important; font-weight:500 !important;">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16" style="margin-right:6px !important;">
					 <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zM16 4.697v7.104l-5.803-3.558z"/>
				</svg>	 	
				 Send mail</a>
				</div>

				<ul class="social-icons" style="margin-bottom:40px;">
					<li>
                    <a href="https://instagram.com/blissservice" target="_blank" class="social-icon">
						<i class="fab fa-instagram"></i> </a> </li> 
						<li>
                    <a href="https://x.com/@badejoko96" target="_blank" class="social-icon">
						<i class="fa-brands fa-x-twitter"></i></a> </li>
				</div>

				<div style="height:200px !important; display:block !important; clear:both !important;"> </div>

				</div>
				
				
				
	    		<div class="contact-form-section">
	    		<form role="form" method="POST" action="http://localhost/Bliss/php/form.php">
					<div class="row">

					<div class="col-md-6">
	    			<div class="form-group custom-input-group">
	    				<input type="text" class="form-control custom-input" name="surname" placeholder="Surname" required />
						<?php if (isset($_SESSION['errors']['surname'])): ?>  
					 <span class="help-block error-text"> <?php echo $_SESSION['errors']['surname']; ?> </span>
						<?php endif; ?>
	    			</div>

	    			<div class="form-group custom-input-group">
	    				<input type="text" class="form-control custom-input" name="fname" placeholder="First Name" required />
						<?php if (isset($_SESSION['errors']['fname'])): ?>
					 <span class="help-block error-text"> <?php echo $_SESSION['errors']['fname']; ?></span>
					<?php endif; ?>
	    			</div>

	    			<div class="form-group custom-input-group">
	    				<input type="text" class="form-control custom-input" name="street"  placeholder="Street" />
	    			</div>

	    			<div class="form-group custom-input-group">
	    				<input type="text" class="form-control custom-input" name="country"  placeholder="Country" />
	    			</div>
						</div>

	    		<div class="col-md-6">	
	    			<div class="form-group custom-input-group">
	    				<input type="text" class="form-control custom-input" name="city" placeholder="City" />
	    			</div>

	    			<div class="form-group custom-input-group">
	    				<input type="tel" class="form-control custom-input" name="tel" placeholder="Mobile Number" />
						<?php if (isset($_SESSION['errors']['tel'])): ?>
					<span class="help-block error-text"> <?php echo $_SESSION['errors']['tel']; ?></span>
					 <?php endif; ?>
	    			</div>
					
	    			<div class="form-group custom-input-group">
	    				<input type="email" class="form-control custom-input" name="email" placeholder="Email address" required />
						<?php if (isset($_SESSION['errors']['email'])): ?>
					<span class="help-block error-text"><?php echo $_SESSION['errors']['email']; ?></span>
					<?php endif; ?>
	    			</div>
					
	    			<div class="form-group custom-input-group">
	    				<textarea rows="4" class="form-control custom-input" id="messageCU" name="message" placeholder="Your Message...."></textarea> 
	    			</div>
					</div>

	    			</div>

	    			<div class="text-center form-submit-wrapper">
	    					<button type="submit" class="btn send-btn">Send</button>
	    			</div>
	    		</form>

				<?php unset($_SESSION['errors']); 
				?>
	    		</div>
	    	</div>
	    </div>

			

	    <footer class="container-fluid contentContainer text-center" style="padding:40px 0; background-color:black;">
	

			<div class="footer-links" style="margin-bottom:15px; display:block; text-align:center; width:100%;">
				<a href="php/privacy-policy.php" style="margin: 0 15px; display:inline-block; text-decorations:none; color:darkgoldenrod; font-weight:normal;">Privacy Policy</a>
				<a href="php/terms.php" style="margin: 0 15px; display:inline-block; text-decoration:none; color:darkgoldenrod; font-weight:normal;">Terms & Conditions</a>
				<a href="php/cookies-policy.php" style="margin: 0 15px; display:inline-block; text-decoration:none; color:darkgoldenrod; font-weight:normal;">Cookies Policy</a>
				</div>

				<ul class="social-icons" style="margin-bottom:15px;">
					<li>
                    <a href="https://instagram.com/blissservice" target="_blank" class="social-icon">
						<i class="fab fa-instagram"></i> </a> </li> 
						<li>
                    <a href="https://x.com/@badejoko96" target="_blank" class="social-icon">
						<i class="fa-brands fa-x-twitter"></i></a> </li>
					</ul>

	    	<p style="margin: 0; padding-top:5px; display:block;">&copy; 2021-2026 Bliss Promotions. Designed by Inovaceworld IT Solutions.</p>
	    </footer>
	
	</body>

</html>