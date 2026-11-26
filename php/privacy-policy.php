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
	    					<a href="../index.php" class="nav-a">About Bliss Promotions</a>
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


        
	    	<div id="privacypolicy" class="container-fluid contentContainer bg-grey text-center">
				
	    		<h1>Privacy Policy</h1>
	    		<p>At Bliss Promotions, one of our main priorities is the privacy of our visitors and clients. This Privacy Policy document contains types of information that is collected and recorded by Bliss Promotion and how we use it.</p>
                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us at blisspromotionss@gmail.com.</p>

                <h2>Information We Collect</h2>
                <p>We collect several types of information to provide and improve our promotional services for brands, gospel music artists and startup companies:
                    <ul>
                        <li>Personal Identification Information: When you register, request a promotion package, or contact us, we may ask for your name, email address, phone number, company/artist name and social media handles.</li>
                        <li>Media and Content Submissions: If you submit music tracks, promotional graphics, brand assets for us to promote, we store these files securely to execute our services.</li>
                        <li>Log Files: Bliss promotion follows a standard procedure of using log files. These files log visitors when they visit websites. The information collected includes internet protocol addresses, browser type, internet service provider, date and time stamp, referring/exit pages and possibly the number of clicks.</li>
                </ul>

                <h3>How We Use Your Information</h3>
                <p>We use the information we collect in various ways, including to:</p>
                
                <p>Provide, operate and maintain our promotion platform</p>
                <p>Process your promotional campaigns and deliver analytics/results</p>
                <p>Communicate with you regarding campaign updates, support and marketing offers</p>
                <p>Understand and analyze how you use our website to improve its functionality.</p>
                <p>Prevent fraudulent activities and ensure transaction security.</p>

                <h4>Sharing Your Information(Third-Party Services)</h4>
                <p>To Successfully run promotions for gospel artists, startups and brands, we may share relevant promotional material(such as music links or brand press releases) with third-party advertising networks, social media platforms, influencers and digital streaming outlets.</p>
                <p>We do not sell or rent your personal contact information to third parties for their own marketing purposes.</p>

                <h5>Security of Your Data</h5>
                <p>The security of your personal and professional data is important to us.We implement standard commercial security measures to protect your information,but please remember that no method of transmission over the internet or method of electronic storage is 100% secure.</p>

                <h6>Your Data Rights</h6>
                <p>Depending on your location, you may have the right to request access to the personal data we hold about you, request corrections or ask that we delete your personal information from our active promotional databases. To exercise these rights, please contact us directly.</p>

                <h7>Changes to This Privacy Policy</h7>
                <p>We may update our Privacy Policy from time to time. We advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page.</p>

                <h8>Contact Us</h8>
                <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us:
                   <p>By Email: blisspromotionss@gmail.com</p>
                    <p>By Phone: +1-516-734-1687</p>
                   <p> Contact Page: <a href="../index.php">contact us</a></p>

	    	
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