<?php 
include_once("conn.php");


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
        <link href="../css/video.css" rel="stylesheet">
		<link href="../css/photogrid.css" rel="stylesheet">
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

			<div class="event-grid">
				<div class="event-card">
					<img src="/Bliss/images/event1.jpg" alt="Church Event">
					<div class="event-overlay">
						<span class="event-tag">Church</span>
						<h3 class="event-title">Church Event</h3>
						<p class="event-date">June 20, 2024</p>
				</div>
				</div>

				<div class="event-card">
					<img src="/Bliss/images/event2.jpg" alt="Event">
					<div class="event-overlay">
						<span class="event-tag">Event</span>
						<h3 class="event-title">Event</h3>
						<p class="event-date">August 12, 2024</p>
				</div>
				</div>

				<div class="event-card">
					<img src="/Bliss/images/event3.jpg" alt="Event">
					<div class="event-overlay">
						<span class="event-tag">Event</span>
						<h3 class="event-title">Event</h3>
						<p class="event-date">August 12, 2024</p>
				</div>
				</div>

				<div class="event-card">
					<img src="/Bliss/images/event4.jpg" alt="Church Worship">
					<div class="event-overlay">
						<span class="event-tag">Church</span>
						<h3 class="event-title">Church Worship</h3>
						<p class="event-date">September 10, 2024</p>
				</div>
				</div>

				<div class="event-card">
					<img src="/Bliss/images/event5.jpg" alt="Praise and Worship Event">
					<div class="event-overlay">
						<span class="event-tag">Praise and Worship</span>
						<h3 class="event-title">Praise and Worship Event</h3>
						<p class="event-date">March 24, 2025</p>
				</div>
				</div>
				
				<div class="event-card">
					<img src="/Bliss/images/event6.jpg" alt="Praise and Worship Event">
					<div class="event-overlay">
						<span class="event-tag">Praise and Worship</span>
						<h3 class="event-title">Praise and Worship Event</h3>
						<p class="event-date">March 24, 2025</p>
				</div>
				</div>
				</div>


        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-uppercase tracking-wider">Our Promotions</h2>
                    <p class="text-muted">Explore our campaigns, events and highlights.</p>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm video-card">
                        <div class="ratio ratio-16x9">
                            <video src="../videos/bliss.mp4" poster="../videos/bliss_1.jpg" controls preload="metadata" class="rounded-top"></video>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Bliss events</h5>
                            <p class="card-text text-muted small">A Bliss Events video.</p>
                        </div>
                        </div>
                        </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm video-card">
                        <div class="ratio ratio-16x9">
                            <video src="../videos/bliss2.mp4" poster="../videos/bliss_2.jpg" controls preload="metadata" class="rounded-top"></video>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Bliss Events</h5>
                            <p class="card-text text-muted small">A Church Program.</p>
                        </div>
                        </div>
                        </div>        

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm video-card">
                        <div class="ratio ratio-16x9">
                            <video src="../videos/bliss3.mp4" poster="../videos/bliss_3.jpg" controls preload="metadata" class="rounded-top"></video>
                    <div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Bliss Events</h5>
                            <p class="card-text text-muted small">A Church Program</p>
                        </div>
                        </div>
                        </div>
                        
                </div>
                </div>
            </section>




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