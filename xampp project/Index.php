<?php
require "./inc/connection.php";
$results = $db->query("SELECT * FROM news");
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
 
<body onload="checkCookie(); slick()">
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
				<a class="btn" href="#">CHANGE SETTINGS</a>
				<button class="cookie-button btn">ACCEPT COOKIES</button>
			</div>
		</div>
	</div>
</div>
<?php
require "./inc/header.php";
?>
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
			<?php foreach ($results as $result) { ?>
			<div <?php echo 'id="news-story-'.$result['ID'].'"'?> class="news-story">
				<div class="img-container">
					<a href="#">
						<figure class="story-fig">
							<img <?php echo 'src="'.$result['images'].'"'?> class="story-img"  <?php echo 'alt="'.$result['image-alt'].'"'?>>
							<div <?php echo 'class="image-caption '.'tag-'.$result['ID'].'"'?>> <?php echo $result['catagories']?></div>
						</figure>
					</a>
				</div>
				<article>
					<h3 <?php echo 'class="title-'.$result['ID'].'"'?>><a href="#"><?php echo $result['titles']?></a></h3>
					<p><?php echo $result['content']?></p>
					<a href="#">
						<div <?php echo 'class="btn btn-read-more btn-'.$result['ID'].'"'?>>
							<span>read more</span>
						</div>
					</a>
					<footer class="story-ftr">
						<div class="auth-img">
							<img <?php echo 'src="'.$result['profile-image'].'"'?> alt="profile img">
						</div>
						<div class="author">
							<ul>
								<li><strong><?php echo $result['author-name']?></strong></li>
								<li><?php echo $result['date']?></li>
							</ul>
						</div>
					</footer>
				</article>
			</div>
			<?php } ?>
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
<?php
require "./inc/news-letter.php";
require "./inc/footer.php";
?>
</div>
<!-- this area is going to be for the menu side nav, which is weirdly coded at the foot of the page.-->
<?php 
require "./inc/side-menu.php";
?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="node_modules/slick-carousel/slick/slick.min.js"></script>
<script src="main.js"></script>
</body>
</html>