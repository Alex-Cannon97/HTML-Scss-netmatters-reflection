<?php
require "./inc/connection.php";
$reuslts = $db->query(SELECT * FROM news);
var_dump $results
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://kit.fontawesome.com/be4ae0c476.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="node_modules/slick-carousel/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="node_modules/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Netmatters | Full Service Digital Service Agency | Norwich, Norfolk | Netmatters</title>
</head>
 
<body>
	<!--empty greybox div class to be assinged using JS with 100vh and 100vw z-index set to 8-->
	
	<div class="scroll-div">
		<div class="greybox-div"></div>
<div class="big-container">
	<div class="grey-backing">
		<div class="cookie-container">
			<h3>Cookies Policy</h3>
			<div class="lines">
				<p>We use cookies to obtain aggregate data regarding site traffic and interaction, in order to identify user trends and obtain insights in order to continually improve our site. These cookies enable us to improve your customer experience as you use our site and help provide you with relevant online marketing.</p>
				<p>You can see a list of the other companies who use cookies on this website, by visiting cookie settings at the bottom of each page. For full details of how we use your personal information, and your rights in relation to it, view our privacy policy.</p>
			</div>
			<div class="cookie-buttons">
				<a class="btn"href="#">CHANGE SETTINGS</a>
				<button class="cookie-button btn">ACCEPT COOKIES</button>
			</div>
		</div>
	</div>
</div>
<header id=main-header>    
	<!--Finally have a working top nav-->
	<div class="top-nav">
		<a href="Netmatters.co.uk" class="header-logo">
			<img src="images/netmatters-logo.PNG" alt="netmatters logo"></a>
			<nav id="main-nav">
			<div class="hidden-phone">
				<a href="#">
					<i class="fas fa-phone-alt"></i>
				</a>
			</div>
			<a href="#" class="btn support-button">
				<div class="btn-main-nav"><i class="fas fa-mouse"></i>
					<span>SUPPORT</span>
				</div>
			</a>
			<a href="#" class="btn contact-button">
				<div class="btn-main-nav"><i class="fas fa-paper-plane"></i>
					<span>CONTACT</span>
				</div>
			</a>
			<form class="search-bar">
				<input type="search" id="search" placeholder="Search...">
				<div class="btn btn-search"><i class="fas fa-search"></i>
				</div>
			</form>
			<div class="btn burger-icon">
				<a href="#"><div id="burger-lines">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>	
                			</div>
                <p class="menu-title">MENU</p>							
				</a>
			</div>
			<div class="btn other-menu-btn">
				<a href="#">
					<i class="fas fa-times"></i>
	                <p class="menu-title">MENU</p>
            	</a>
        	</div>
		</nav>
	</div>
<!--search bar funtion on extra small screens only-->	
	<form id="xs-search">
		<input type="search" name="xs-search" placeholder="Search...">
		<div class="btn btn-search-xs">
			<i class="fas fa-search"></i>
		</div>
	</form>
<!--second slightly trickier nav (interactive dropdown)-->
	<div id="navbar">
		<div class="subnav Web-nav">
			<div class="second-nav-btn"><a href="#" class="Web nav-bar-tile"><i class="fas fa-code"></i><span>Web<br></span>Design</a></div>
			<div class="second-nav-background">
				<div class="second-nav-content Web-dropdown">
					<a href="#">Stylish Website</a>
					<a href="#">Ecommerce stores</a>
					<a href="#">Branding</a>
					<a href="#">Apps</a>
					<a href="#">Web hosting</a>
					<a href="#">Pay monthly websites</a>
				</div>
			</div>
		</div>
		<div class="subnav IT-nav">
			<div class="second-nav-btn"><a href="#" class="IT nav-bar-tile"><i class="fas fa-desktop"></i><span>IT<br></span>Support</a></div>
			<div class="second-nav-background">
				<div class="second-nav-content IT-dropdown">
					<a href="#">MANAGED IT</a>
					<a href="#">Buisness IT</a>
					<a href="#">Office 365</a>
					<a href="#">Consultancy</a>
					<a href="#">Cloud Provider</a>
					<a href="#">Data Backup</a>
				</div>
			</div>
		</div>
		<div class="subnav Telecoms-nav">
			<div class="second-nav-btn"><a href="#" class="Telecoms nav-bar-tile"><i class="fas fa-phone-alt"></i><span>Telecoms<br></span>Services</a></div>
			<div class="second-nav-background">
				<div class="second-nav-content Telecoms-dropdown">
					<a href="#">Gigabit voucher</a>
					<a href="#">Hosted VOIP</a>
					<a href="#">Buisness VOIP</a>
					<a href="#">Buisness Broadband</a>
					<a href="#">Leased Line</a>
					<a href="#">3CX Systems</a>
				</div>
			</div>
		</div>
		<div class="subnav Software-nav">
			<div class="second-nav-btn"><a href="#" class="Bespoke nav-bar-tile"><i class="fas fa-th"></i><span>Bespoke<br></span>Software</a></div>
			<div class="second-nav-background">
				<div class="second-nav-content Software-dropdown">
					<a href="#">Workflow Solutions</a>
					<a href="#">Automation</a>
					<a href="#">System intergration</a>
					<a href="#">Database managment</a>
					<a href="#">Sharepoint</a>
					<a href="#">ERP</a>
				</div>
			</div>
		</div>
		<div class="subnav Digital-nav">
			<div class="second-nav-btn"><a href="#" class="Digital nav-bar-tile"><i class="fas fa-chart-bar"></i><span>Digital<br></span>Marketing</a></div>
			<div class="second-nav-background">
				<div class="second-nav-content Marketing-dropdown">
					<a href="#">Search (SEO)</a>
					<a href="#">Paid (PPC)</a>
					<a href="#">Conversion (CRO)</a>
					<a href="#">Email</a>
					<a href="#">Social media</a>
					<a href="#">Content</a>
				</div>
			</div>
		</div>
		<div class="subnav Cyber-nav">
			<div class="second-nav-btn"><a href="#" class="Cyber nav-bar-tile"><i class="fas fa-shield-alt"></i><span>Cyber<br></span>Security</a></div>
			<div class="second-nav-background">
				<div class="second-nav-content Cyber-dropdown">
					<a href="#">Assesment</a>
					<a href="#">Managment</a>
					<a href="#">Penetration Testing</a>
					<a href="#">Cyber Essentials</a>
					<a href="#">PCI/DSS</a>
					<a href="#">Hacker Prevention</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="carousel">
	<div class="carousel-content">
		<div class="hero-banner webslide">
			<div class="hero-content">
				<div class="hero-text">
					<h1>WEB DESIGN</h1>
					<p>For businesses looking to make a strong<br>and effective first impression.</p>
					<a class="btn btn-hero herobtn-web" href="#">
						<span>find out more </span><i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-content">
		<div class="hero-banner ITslide">
			<div class="hero-content">
				<div class="hero-text">
					<h1>IT SUPPORT</h1>
					<p>Fast and cost-effective IT support<br>services for your business.</p>
					<a class="btn btn-hero herobtn-IT" href="#">
						<span>find out more </span><i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-content">
		<div class="hero-banner telecomsslide">
			<div class="hero-content">
				<div class="hero-text">
					<h1>TELECOMS SERVICES</h1>
					<p>A new approach to connectivity, see how<br>we can help your business.</p>
					<a class="btn btn-hero herobtn-telecoms" href="#">
						<span>find out more </span><i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-content">
		<div class="hero-banner bespokeslide">
			<div class="hero-content">
				<div class="hero-text">
					<h1>BESPOKE SOFTWARE</h1>
					<p>Bring your business together<br>with solutions that grow with you.</p>
					<a class="btn btn-hero herobtn-bespoke" href="#">
						<span>find out more </span><i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-content">
		<div class="hero-banner digitalslide">
			<div class="hero-content">
				<div class="hero-text">
					<h1>DIGITAL MARKETING</h1>
					<p>Generating you new business through<br>results-driven marketing activities.</p>
					<a class="btn btn-hero herobtn-digital" href="#">
						<span>see how we can help you </span><i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-content">
		<div class="hero-banner cyberslide">
			<div class="hero-content">
				<div class="hero-text">
					<h1>CYBER SECURITY</h1>
					<p>Keeping business and their customers<br>sensitive information protected.</p>
					<a class="btn btn-hero herobtn-cyber" href="#">
						<span>find out more </span><i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="service-cards">
	<div class="card-content">
		<a class="card card-Bespoke card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-th"></i>
			</div>
			<h3>Bespoke Software</h3>
			<span class="line"></span>
			<p>Tailored software to imporve business productivity and online profits. Our expert team will ensure a software solution.</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
		<a class="card card-IT card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-desktop"></i>
			</div>
			<h3>IT Support</h3>
			<span class="line"></span>
			<p>Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
		<a class="card card-Digital card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-chart-bar"></i>
			</div>
			<h3>Digital Marketing</h3>
			<span class="line"></span>
			<p>Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
		<a class="card card-Telecoms card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-phone-alt"></i>
			</div>
			<h3>Telecoms Services</h3>
			<span class="line"></span>
			<p>Stay connected with bespoke telecoms solutions when you need it most.</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
		<a class="card card-Web card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-code"></i>
			</div>
			<h3>Web Design</h3>
			<span class="line"></span>
			<p>User-centric design for businesses looking to make a lasting impression.</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
		<a class="card card-Cyber card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-shield-alt"></i>
			</div>
			<h3>Cyber Security</h3>
			<span class="line"></span>
			<p>Ensuring your online business stays secure 24/7, 365 days of the year.</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
		<a class="card card-Web card-btn" href="#">
			<div class="card-icon">
				<i class="fas fa-graduation-cap"></i>
			</div>
			<h3>Developer Training</h3>
			<span class="line"></span>
			<p>Have you considered a career in web development but you aren&apos;t sure where to start?</p>
			<div class="btn btn-card">
				<span>read more</span>
			</div>
		</a>
	</div>
</div>
<div class="hero-brand">
	<div class="hero-brand-content">
		<h2>netmatters</h2>
		<p><strong>Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk.</strong></p>
		<p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.</p>
		<p>We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>
		<a class="btn btn-brand" href="#">Our Culture<i class="fas fa-arrow-right"></i></a>
	</div>
</div>
<div class="news-area">
	<div id="news-tag">
		<div id="news-tag-latest">
			<span>latest</span>
		</div>
	</div>
	<div id="news-cards">
		<div id="news-container">
			<div id="news-story-1" class="news-story">
				<div class="img-container">
					<a href="#">
						<figure class="story-fig">
							<img src="images/job-net.jpg" class="story-img" alt="job image">
							<div class="image-caption one">NEWS</div>
						</figure>
					</a>
				</div>
				<article>
					<h3 class="bespoke-title"><a href="#">Are you looking to recruit a junior developer...</a></h3>
					<p>Many businesses will benefit from having someone in-house to work on development on an ongoin...</p>
					<a href="#">
						<div class="btn btn-read-more btn-bespoke">
							<span>read more</span>
						</div>
					</a>
					<footer class="story-ftr">
						<div class="auth-img">
							<img src="images/tessa-woodrow-.jpg" alt="profile img">
						</div>
						<div class="author">
							<ul>
								<li><strong>Posted by Tessa Woodrow</strong></li>
								<li>1st April 2021</li>
							</ul>
						</div>
					</footer>
				</article>
			</div>
			<!--<div id="news-story-2" class="news-story">
				<div class="img-container">
					<a href="#">
						<figure class="story-fig">
							<img src="images/grants-available-for.jpg" class="story-img" alt="grants image">
							<div class="image-caption two">NEWS</div>
						</figure>
					</a>
				</div>
				<article>
					<h3 class="design-title"><a href="#">Grants Available For Breckland Businesses Loo...</a></h3>
					<p>Businesses in Breckland are being offered a fantastic opportunity to embrace the digital worl...</p>
					<a href="#">
						<div class="btn btn-read-more btn-design">
							<span>read more</span>
						</div>
					</a>
					<footer class="story-ftr">
						<div class="auth-img">
							<img src="images/netmatters-ltd.PNG" alt="profile img">
						</div>
						<div class="author">
							<ul>
								<li><strong>Posted by Netmatters Ltd</strong></li>
								<li>25th March 2021</li>
							</ul>
						</div>
					</footer>
				</article>
			</div>
			<div id="news-story-3" class="news-story">
				<div class="img-container">
					<a href="#">
						<figure class="story-fig">
							<img src="images/case-study-warren-ie.jpg" class="story-img" alt="study image">
							<div class="image-caption three">CASE STUDIES</div>
						</figure>
					</a>
				</div>
				<article>
					<h3 class="telecoms-title"><a href="#">Case Study Warren Services</a></h3>
					<p>The Client: Warren Services was founded in 1990. They manufacture high-quality components...</p>
					<a href="#">
						<div class="btn btn-read-more btn-telecoms">
							<span>read more</span>
						</div>
					</a>
					<footer class="story-ftr">
						<div class="auth-img">
							<img src="images/netmatters-ltd.PNG" alt="profile img">
						</div>
						<div class="author">
							<ul>
								<li><strong>Posted by Netmatters Ltd</strong></li>
								<li>24th March 2021</li>
							</ul>
						</div>
					</footer>
				</article>
			</div>-->
		</div>
	</div>
</div>
<div class="clients-container">
	<div class="clients-logos">
		<div class="tooltip-clients">
			<div class="black-color">
				<img src="images/busseys.jpg" alt="busseys-black">
				<img src="images/busseys-color.PNG" alt="busseys-color">
			</div>
			<div class="tooltip-box">
				<span>Busseys</span>
				<div class="tooltip-line"></div>
				<p>One of the UK's leading Ford dealerships.</p>
			</div>
			<div class="tooltip-point"></div>
		</div>
		<div class="tooltip-clients">
			<div class="black-color">
				<a href="#">
					<img src="images/crane-black.jpg" alt="crane-black">
					<img src="images/crane.PNG" alt="crane-color">
				</a>
			</div>
			<div class="tooltip-box">
				<span>Crane Garden Builders</span>
				<div class="tooltip-line"></div>
				<p>Leading manufacturer abd supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
			</div>
			<div class="tooltip-point"></div>
		</div>
		<div class="tooltip-clients">
			<div class="black-color">
				<img src="images/beat.jpg" alt="beat-black">
				<img src="images/beat-color.PNG" alt="beat-color">
			</div>
			<div class="tooltip-box">
				<span>Beat</span>
				<div class="tooltip-line"></div>
				<p>The UK's eating disorder charity founded in 1989.</p>
			</div>
			<div class="tooltip-point"></div>
		</div>
		<div class="tooltip-clients">
			<div class="black-color">
				<a href="#">
					<img src="images/northern.jpg" alt="northern-black">
					<img src="images/northern-color.PNG" alt="northern-color">
				</a>
			</div>
			<div class="tooltip-box">
				<span>Northern Driver</span>
				<div class="tooltip-line"></div>
				<p>Global water based equipment manufactures for sport, military, commercial and rescue businesses.</p>
			</div>
			<div class="tooltip-point"></div>
		</div>
	</div>
</div>
<div id="newsletter-container">
	<form class="newsletter-form" action="#" method="POST">
		<h2>Email Newsletter Sign-Up</h2>
		<fieldset class="newsletter-fieldset">
			<div class="newsletter-fields">
				<div class="name-field">
					<label class="signup-label" for="name">Your Name <span class="required">*</span></label><br>
					<input type="text" id="name" name="user_name">
				</div>
				<div class="email-field">
					<label class="signup-label" for="email">Your Email <span class="required">*</span></label><br>
					<input type="email" id="email" name="user_email">
				</div>
			</div>
			<div class="marketing-box">
				<label class="marketing-label" for="marketing-optin">
					<input type="checkbox" name="accept-marketing" id="marketing-optin" value="1">
					<span>Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#" style="text-decoration: underline;">Privacy Policy</a> for more information on how we use your data.</span>
				</label>
			</div>
		</fieldset>
		<button class="btn btn-subscribe" type="submit">Subscribe</button>
	</form>
</div>
<footer>
<div id="first-ftr">
	<div>
		<h4>Contact us</h4>
		<ul>
			<li>11 Penfold Drive</li>
			<li>Wymondham</li>
			<li>Norfolk</li>
			<li>NR18 0WZ</li>
			<li>&nbsp;</li>
			<li>Tel: <a href="#">01603 70 40 20</a></li>
			<li>Email: <a href="#">support@netmatters.com</a></li>
		</ul>
	</div>
	<div>
		<h4>About Netmatters</h4>
		<ul>
			<li><a href="#">News</a></li>
			<li><a href="#">Our Careers</a></li>
			<li><a href="#">Our Team</a></li>
			<li><a href="#">Our Office Tour</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Cookie Policy</a></li>
			<li><a href="#">Terms & Conditions</a></li>
			<li><a href="#">UK Domains</a></li>
		</ul>
	</div>
	<div>
		<h4>Website</h4>
		<ul>
			<li><a href="#">Sitemap</a></li>
			<li>&copy; Copyright Netmatters Ltd. 2021</li>
			<li>All rights reserved</li>
		</ul>
	</div>
	<div id="socials">
		<h4>Social Media</h4>
		<div id="socials-links">
			<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
			<div class="gap"></div>
			<a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
			<a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
			<div class="gap"></div>
			<div class="empty"></div>
		</div>
	</div>
</div>
<div class="awards">
	<div class="partners">
		<div class="google">
			<a href="#"><img src="images/google.PNG" alt="google partner"></a>
		</div>
		<div class="microsoft">
			<img src="images/microsoft-partner.jpg" alt="microsoft partner">
		</div>
		<div class="future blacktocolor">
			<img src="images/future-50-bw.jpg" alt="future 50">
			<img src="images/future-50.jpg" alt="future colored">
		</div>
		<div class="qms blacktocolor">
			<img src="images/qms-bw.jpg" alt="qms">
			<img src="images/qms.jpg" alt="qms registered">
		</div>
		<div class="norfolk-cc blacktocolor">
			<img src="images/norfolk-carbon-charter-bw.jpg" alt="ncc">
			<img src="images/norfolk-carbon-charter.jpg" alt="norfolk carbon charter partner">
		</div>
	</div>
	<div class="awards-section">
		<div class="future-growth blacktocolor">
			<img src="images/investing-in-future-growth-bw.jpg" alt="future growth">
			<img src="images/investing-in-future-growth.jpg" alt="winner of investing in future growth award">
		</div>
		<div class="princess blacktocolor">
			<img src="images/princess-royal-training-bw.jpg" alt="princess">
			<img src="images/princess-royal-training.jpg" alt="princess award">
		</div>
		<div class="skills-of-tomorrow blacktocolor">
			<img src="images/skills-of-tomorrow-bw.jpg" alt="skills">
			<img src="images/skills-of-tomorrow.jpg" alt="skill of tomorrow award">
		</div>
	</div>
</div>
</footer>
</div>
<!-- this area is going to be for the menu side nav, which is weirdly coded at the foot of the page.-->
<div class="menu-container">
	<div class="menu-side">
		<div class="pad-div">
		<ul class="top-break">
			<li class="big-button">
				<a href="#">
					Contact Us
				</a>
			</li>
			<li class="web big-button">
				<a href="#">
					<span><i class="fas fa-code"></i></span>
					<small>Web</small>Design
				</a>
				<ul class="menu-xs topics display">
					<li>
						<a href="#">
							Stylish Websites
						</a>
					</li>
					<li>
						<a href="#">
							Ecommerce Stores
						</a>
					</li>
					<li>
						<a href="#">
							Branding
						</a>
					</li>
					<li>
						<a href="#">
							Apps
						</a>
					</li>
					<li>
						<a href="#">
							Web Hosting
						</a>
					</li>
					<li>
						<a href="#">
							Pay Monthly Websites
						</a>
					</li>
				</ul>
			</li>
			<li class="it big-button">
				<a href="#">
					<span><i class="fas fa-desktop"></i></span>
					<small>IT</small>Support
				</a>
				<ul class="menu-xs topics display">
					<li>
						<a href="#">
							Managed IT
						</a>
					</li>
					<li>
						<a href="#">
							Business IT
						</a>
					</li>
					<li>
						<a href="#">
							Office 365
						</a>
					</li>
					<li>
						<a href="#">
							Consultancy
						</a>
					</li>
					<li>
						<a href="#">
							Cloud Provider
						</a>
					</li>
					<li>
						<a href="#">
							Data Backup
						</a>
					</li>
				</ul>
			</li>
			<li class="telecom big-button">
				<a href="#">
					<span><i class="fas fa-phone-alt"></i></span>
					<small>Telecoms</small>Services
				</a>
				<ul class="menu-xs topics display">
					<li>
						<a href="#">
							Gigabit Voucher
						</a>
					</li>
					<li>
						<a href="#">
							Hosted Voip
						</a>
					</li>
					<li>
						<a href="#">
							Business Voip
						</a>
					</li>
					<li>
						<a href="#">
							Business Broadband
						</a>
					</li>
					<li>
						<a href="#">
							Leased Line
						</a>
					</li>
					<li>
						<a href="#">
							3cx Systems
						</a>
					</li>
				</ul>
			</li>
			<li class="bespoke big-button">
				<a href="#">
					<span><i class="fas fa-th"></i></span>
					<small>Bespoke</small>Software
				</a>
				<ul class="menu-xs topics display">
					<li>
						<a href="#">
							Workflow
						</a>
					</li>
					<li>
						<a href="#">
							Automation
						</a>
					</li>
					<li>
						<a href="#">
							Integration
						</a>
					</li>
					<li>
						<a href="#">
							Database
						</a>
					</li>
					<li>
						<a href="#">
							Sharepoint
						</a>
					</li>
					<li>
						<a href="#">
							Business Management
						</a>
					</li>
				</ul>
			</li>
			<li class="digital big-button">
				<a href="#">
					<span><i class="fas fa-chart-bar"></i></span>
					<small>Digital</small>Marketing
				</a>
				<ul class="menu-xs topics display">
					<li>
						<a href="#">
							Search (seo)
						</a>
					</li>
					<li>
						<a href="#">
							Paid (ppc)
						</a>
					</li>
					<li>
						<a href="#">
							Conversion (cro)
						</a>
					</li>
					<li>
						<a href="#">
							Email
						</a>
					</li>
					<li>
						<a href="#">
							Social Media
						</a>
					</li>
					<li>
						<a href="#">
							Content
						</a>
					</li>
				</ul>
			</li>
			<li class="cyber big-button">
				<a href="#">
					<span><i class="fas fa-shield-alt"></i></span>
					<small>Cyber</small>Security
				</a>
				<ul class="menu-xs topics display break-from-bottom">
					<li>
						<a href="#">
							Assessment
						</a>
					</li>
					<li>
						<a href="#">
							Management
						</a>
					</li>
					<li>
						<a href="#">
							Penetration Testing
						</a>
					</li>
					<li>
						<a href="#">
							Cyber Essentials
						</a>
					</li>
					<li>
						<a href="#">
							Pci/Dss
						</a>
					</li>
					<li>
						<a href="#">
							Hacker Prevention
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
		<ul class="lower-sidenav">
			<li class="block-container">
				<a href="#" class="heading">Training</a>
				<ul class="topics">
					<li>
						<a href="#" class="content">Web Developer Course</a>
					</li>
					<li>
						<a href="#" class="content">SCS Frequently Asked Questions</a>
					</li>
					<li>
						<a href="#" class="content">Scion Collaborations</a>
					</li>
				</ul>
			</li>
			<li class="block-container">
				<a href="#" class="heading">Events</a>
				<ul class="topics">
					<li>
						<a href="#" class="content">Business Automation Seminar</a>
					</li>
				</ul>
			</li>
			<li class="block-container">
				<a href="#" class="heading">Our Company</a>
				<ul class="topics">
					<li>
						<a href="#" class="content">Our Culture</a>
					</li>
					<li>
						<a href="#" class="content">Our Team</a>
					</li>
					<li>
						<a href="#" class="content">Our Careers</a>
					</li>
					<li>
						<a href="#" class="content">Our Benefits</a>
					</li>
					<li>
						<a href="#" class="content">Our Great Yarmouth Office</a>
					</li>
				</ul>
			</li>
			<li class="block-container">
				<a href="#" class="heading">Our Work</a>
				<ul class="topics">
					<li>
						<a href="#" class="content">Case Studies</a>
					</li>
				</ul>
			</li>
			<li class="block-container">
				<a href="#" class="heading">Our Knowledge</a>
				<ul class="topics">
					<li>
						<a href="#" class="content">Guides</a>
					</li>
					<li>
						<a href="#" class="content">News</a>
					</li>
					<li>
						<a href="#" class="content">Insights</a>
					</li>
				</ul>
			</li>
			<li><a href="#" class="heading">Covid Risk Assessments</a></li>
			<li><a href="#" class="heading">Contact Us</a></li>
			<li><a href="#" class="heading support-heading">Support</a></li>
		</ul>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="node_modules/slick-carousel/slick/slick.min.js"></script>
<script src="main.js"></script>
</body>
</html>