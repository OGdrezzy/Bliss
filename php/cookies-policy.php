<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bliss Promotions</title>
        <meta name="Bliss Promotion Services" content="Blisspromotions">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstap.css">
        <link href ="../css/main.css" rel="stylesheet">
        <link href ="../css/socials.css" rel="stylesheet">
		<link href ="../css/cookies.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsrap@5.3.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    
		<script src="../js/jQuery.js"></script> 
        <script src="../js/sidenav.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/html5shiv.js"></script>
        <script src="../js/respond.min.js"></script>
        <script src="../js/index.js"></script>
        <script src="../js/loader.js"></script>
        <script src="../js/navbar.js"></script>    
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
	    					<a href="../index.php" class="nav-a">About Bliss Promoions</a>
	    				</li>
	    				<li>
	    					<a href="../index.php" class="nav-a">Contact Us</a>
	    				</li>
	    			</ul>
	    		</div>
	    	</div>
	    </nav>
	    	<div class="jumbotron text-center"  >
				<a href="../index.php">
	    	    <img src="/Bliss/images/Bliss_logo.jpg" width="190" height="150"/>
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
	    				<a href="./events.php">Bliss Events </a>
	    			</li>
	    		</ul>
	    
	        </div>
	    </nav>


		
			<div id="cookie-banner" class="cookie-banner" style="display: flex; position: fixed; bottom: 0; left: 0; width: 100%; background-color: #1a1a1a !important; color: #fff !important; padding: 15px 25px !important; z-index: 2147483647 !important; display: flex !important; justify-content: space-between !important; align-items: center !important; pointer-events: auto !important; box-sizing: border-box !important;">
				<span style="font-size: 14px; margin-right: 15px;">We use cookies to enhance your browsing experience on Bliss Promotion. By clicking Accept, you agree to use of our cookies. <a href="./privacy-policy.php"> Privacy Policy</a></span>

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


		
	    	<div id="cookiepolicy" class="container-fluid contentContainer bg-grey text-center">

			<h1>Cookies Policy</h1>
			<p>At Bliss Promotion, we believe in being clear and open about how we collect and use data related to you. This Cookies Policies explains what cookies are, how Bliss Promotion uses them on our website and how you can manage your preferences.</p>
			<p>This Cookies Policy forms an integral part of our Privacy Policy and Terms and Conditions.</p>

			<h2> What are Cookies?</h2>
			<p>Cookies are small text files containing small amounts of information that are downloaded and stored on your computer, mobile device or mobile browser when you visit a website.</p>
			<p>Cookies allow a website to recognize your device, remember your preferences(such as login details, language or display settings) and provide you with a smoother, more personalized browsing experience.</p>
			
			<h3>How Bliss Promotion uses Cookies</h3>
			<p>When you browse or interact with Bliss promotion-whether you are exploring our promotional packages for brands, listening to gospel music previews or reviewing startup case studies-we use cookies to enhance platform performance and user experience.</p>
			<p>Specifically we use cookies to:</p>
			<ul>
				<li>Ensure the essential functional perfromance of our website</li>
				<li>Understand visitor interactions and website traffic patterns.</li>
				<li>Optimize website navigation speed and layout responsiveness</li>
				<li>Deliver relevant promotional content, media and marketing updates.</li>
			</ul>

			<h4>Types of Cookies We Use</h4>
			<p>We classify the cookies used on our website into the following.</p>
			<h5>Essential(Strictly Necessary) Cookies</h5>
			<p>These Cookies are necessary for the website to function properly,They enable core functionalities like security, network management account accessibility and contact submission forms. you can set your browser to block these cookies but parts of the site might not function correctly as a result.</p>
			<h5>Performance and Analytics Cookies</h5>
			<p>These cookies helps us to understand how visitors interact with our website by collecting and reporting information anonymously. They allow us to count visits, track popular promotional pages and analzye traffic sources so we can measure and improve the performance of our site.</p>
			<h5>Functionality Cookies</h5>
			<p>These cookies allow our website to remember choices you make(such as your preferred language or location) to provide enhanced, more personal features. They may also be used to remember changes you have made to text size, fonts and other customizable web page elements</p>
			<h5>Targeting and Advertising Cookies</h5>
			<p>As a promotion and publicity platform, we may partner with third-paarty advertising networks, social media channels and media outlets. These cookies are set through site by these advertising partners to build a profile of your interests and sbhow you relevant promotion related ads on other sites.</p>

			<h4>Third-Party Cookies</h4>
			<p>In addition to our first-party cookies, Bliss promotion may also use various third-party services to gather statistics, embed promotional videos or audio players(streamin gospel music previews) and power social media integration.</p>
			<p>These third parties may set their own cookies on your device to collect information about your online activities across different platforms. Bliss promotion does not exercise direct control over third-party cookies settings; please check the respective privacyy and cookie policies of these external services.</p>

			<h4>Managing and Disabling Cookies </h4>
			<p>You have the right to decide whether to accept or decline cookies. You can manage or modify your cookies preferences in several ways:</p>
			<p><b>Browser Settings</b></p>
			<p>Most web browsers allow you to control cookies through their settings preferences. You can configure your browser to reject cookie, alert you when a cookie is being sent or delete exisiting cookies. To manage your browser cookies:
				<ul>
					<li>Google Chrome: Settings --- Privacy and security --- Cookies and other site data </li>
					<li>Mozilla Firefox: Options --- Privacy & Security --- Cookies and site Data </li>
					<li>Safari:Preferences --- Privacy --- Cookies and website data </li>
					<li>Microsoft Edge: Settings --- Cookies and site permissions </li>
				</ul>

			<h4>Updates to this Cookies Policy</h4>
			<p>We may update this Cookies Policy from time to time to reflect changes in technical requirements, legal compliance or our operational practices. Any updates will be posted on this page with an updated effective date. </p>

			<h4>Contact Us</h4>
			<p>If you have any questions or require further clarification regarding our use of cookies, please reach out to us:</p>
			<p>Email:blisspromotionss@gmail.com</p>
			<p>Phone:+1-516-734-1687</p>
			<p>Contact Us: <a href="../index.php">contact us</a></p>




			  <footer class="container-fluid contentContainer text-center" style="padding:40px 0; background-color:black;">
	

			<div class="footer-links" style="margin-bottom:15px; display:block; text-align:center; width:100%;">
				<a href="./privacy-policy.php" style="margin: 0 15px; display:inline-block; text-decorations:none; color:darkgoldenrod; font-weight:normal;">Privacy Policy</a>
				<a href="./terms.php" style="margin: 0 15px; display:inline-block; text-decoration:none; color:darkgoldenrod; font-weight:normal;">Terms & Conditions</a>
				<a href="./cookies-policy.php" style="margin: 0 15px; display:inline-block; text-decoration:none; color:darkgoldenrod; font-weight:normal;">Cookies Policy</a>
				</div>

                <ul class="social-icons" style="margin-bottom:15px;">
					<li>
                    <a href="https://instagram.com/blissservice" target="_blank" class="social-icon">
						<i class="fab fa-instagram"></i> </a> </li> 
						<li>
                    <a href="https://x.com/@badejoko96" target="_blank" class="social-icon">
						<i class="fa-brands fa-x-twitter"></i></a> </li>
					</ul>

	    	<p style="margin: 0; padding-top:5px; display:block;">&copy; 2021-2026 Bliss promotions. Designed by Inovaceworld IT Solutions.</p>
	    </footer>
	
          </body>
            </html>