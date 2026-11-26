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
	    	    
	    		<h1>Terms and Conditions</h1>
                <p>Welcome to Bliss Promotion! These Terms and Conditions outline the rules, regulations and legal agreements for the use of Bliss Promotion's website, promotional platform and associated marketing services.</p>
                <p>By accesing this website and utilizing our promotional services, you accept these Terms and Conditions in full. If you disagree with any part of these terms, you must not use our website or engage our promotional and marketing services.</p>

                <h2>Definitions and Interpretation</h2>
                <ul>
                    <li>"Bliss Promotion","We","Us",refers to the Bliss Promotion platform.</li>
                    <li>"Client","You",refers to the individual,corporate entity, start-up, brand or gospel music artist accessing this site and employing our promotional assets.</li>
                    <li>"Services"refers to all digital promotion, public relations, social media marketing campaign analytics and influencer outreach services provided by Bliss Promotion</li>
                </ul>

                <h3>Scope of Services</h3>
                <p>Bliss Promotion provides tailored digital marketing and distribution services for brands, gospel music artists and start-up companies. While we deploy professional standards and strategic campaigns to optimize public outreach, exposure and engagement, specific performance metrics depend heavily on target audience reception and external platform algorithms. Consequently, specific results cannot be legally guaranteed.</p>

                <h4>User Submissions and Intellectual Property Rights</h4>
                <p>To execute our promotional services, you will be required to submit media assets, including music tracks, artworks, logos, press kits, biographical descriptions and promotional graphics.</p>
                <p>Ownership: You retain full ownership and intellectual property titles to all original assets submitted to Bliss Promotion.</p>
                <p>License Grant: By submitting material, you grant Bliss Promotion a worldwide, royalty-free, non-exclusive license to display, broadcast, distribute, format and share your submitted assets strictly for the purposes of executing your agreed promotional campaign.</p>
                <p>Representation: You explicitly warrant that you own or possess the mandatory licensing rights for all submitted content. You guarantee that your submissions do not violate the intellectual property rights, copyrights or legal rights of any third party.</p>

                <h4>Client Responsibilities and Prohibited Activities</h4>
                <p>As a condition of using our services, you agree to provide complete, accurate and truthful corporate or artistic details. Furthermore, you agree not to utilize our platform to distribute or promote content that:
                    <ul>
                        <li>is unlawful, fraudulent, defamatory, malicious or intentionally deceptive.</li>
                        <li>infringes upon any third-party patent, trademark, trade secret or copyright.</li>
                        <li>Contains malicious software code, viruses or scripts intended to disrupt or compromise website infrastructure or analytics logging.</li>

                </ul>

                <h4>Distribution to Third-Party Platforms</h4>
                <p>In alignment with our Privacy Policy, our promotional services involve distributing your content to third-party channels, including digital streaming platforms, social media networks, journalists and public influencers. Bliss Promotion exercises no direct structural control over the individual operational rules, moderation policies or content retention schedules of these external entities.</p>

                <h4>Limitation of Liability</h4>
                <p>To the maximum extent permitted by applicable law, Bliss Promotions, its directors, employees or operational partners shall not be held liable for any indirect, incidental, special, consequential or punitive damages.This includes without limitation,loss of profits,data corruption, or operational downtime arising out of your access to or inability to access our promotional distribution networks.</p>

                <h4>Indemnification</h4>
                <p>You agree to defend, indemnify and hold harmless Bliss Promotion and its personnel from and against any claims, damages, liabilities, losses, obligations or expenses(including legal fees)stemming directly from your breach of these Terms, your submision of infringing content or your violation of third-party rights.</p>

                <h4>Severability and Modifications</h4>
                <p>If any provision of these Terms is deemed invalid or unenforceable by a court of competent jurisdiction, the remaining clauses shall continue in full force. Bliss Promotion reserves the right to amend, update or revise these terms at any time.Material changes will be updated on this page with a revised effective date.</p>

                <h4>Governing Law</h4>
                <p>These Terms and Conditions shall be governed by and interpreted in accordnace with the applicable laws regulating digital commerce and intellectual property in your jurisdiction, without regard to conflict of law provisions.</p>

                <h4>Contact Information</h4>
                <p>If you have any questions regarding these Terms and Conditions, Please contact our administrative team at:
                    <p>Email: blisspromotionss@gmail.com</p>
                    <p>Phone: +1-516-734-1687</p>
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