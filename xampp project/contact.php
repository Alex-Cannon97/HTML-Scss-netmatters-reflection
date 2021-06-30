<?php
require "./inc/connection.php";
$results = $db->query("SELECT * FROM news");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://kit.fontawesome.com/be4ae0c476.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Contact Us | Netmatters</title>
</head>
<body>
<?php 
require "./inc/header.php";
?>
<div class="contact-container">
    <div class="home">
        <ul class="home-list">
            <li><a href="/" class="home-link">Home </a></li>
            <li> / How Can We Help You?</li>
        </ul>
    </div>
    <div class="background">
            <div class="contact-section">
                    <div class="form-contact-section">
                        <div class="contact-title">
                         <h1>How Can We Help You?</h1>
                        </div>
                        <div class="bigboy-container">
                            <div class="inner-boy">
                                <div class="form-area">
                                    <form action="contact.php" method="post" class="cont-form">
                                        <fieldset id="cont-field">
                                            <!--this area meant for some form of error messages for issues-->
                                            <!--following are for the actual form-->
                                            <div class="cont-one">
                                                <div id="name-area" class="inputs-shrink">
                                                    <label for="name" class="cont-label">Your Name <span class="req">*</span></label><br>
                                                    <input type="text" id="name" name="user" class="cont-input" required="required"><br>
                                                </div>
                                                <div class="inputs-shrink">
                                                    <label for="email" class="cont-label">Your Email <span class="req">*</span></label><br>
                                                    <input type="email" id="email" name="user-email" class="cont-input" required="required" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"><br>
                                                </div>
                                            </div>
                                            <div class="cont-two">
                                                <div id="number-area" class="inputs-shrink">
                                                    <label for="phone" class="cont-label">Your Telephone Number <span class="req">*</span></label><br>
                                                    <input type="tel" id="telephone" name="user-tele" class="cont-input" required="required"><br>
                                                </div>
                                                <div class="inputs-shrink">
                                                    <label for="subject" class="cont-label">Subject <span class="req">*</span></label><br>
                                                    <input type="text" id="subject" name="user-sub" class="cont-input" required="required"><br>
                                                </div>
                                            </div>
                                            <div class="message-area">
                                                <label for="message" class="cont-label" id="message-label">Message <span class="req">*</span></label><br>
                                                <textarea id="message-input" name="sub-message" class="message-field" required="required"></textarea><br>
                                            </div>
                                            <div class="marketing-box2">
				                                <label class="marketing-label" for="marketing-optin">
					                                <input type="checkbox" name="accept-marketing" id="marketing-optin" value="1">
					                                <span>Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#" style="text-decoration: underline;">Privacy Policy</a> for more information on how we use your data.</span>
                                                    <button id="enquiry" class="btn btn-subscribe" type="submit">SEND ENQUIRY</button>
                                                </label>
			                                </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="cont-container">
                                    <p class="cont-info"><strong>Call us on:</strong></p>
                                    <p class="greyed">Wymondham Office</p>
                                    <p class="cont-info"><a href="tel:+44-1603-704-020">01603 70 40 20</a></p>
                                    <p class="greyed">Gorleston Office</p>
                                    <p class="cont-info"><a href="tel:+44-1493-603-204">01493 60 32 04</a></p>
                                    <p class="email-us"><strong>Email Us On:</strong></p>
                                    <p class="cont-info"><a href="sales@netmatters.com">sales@netmatters.com</a></p>
                                    <p class="open-hours"><strong>Buisness Hours:</strong></p>
                                    <p class="open-hours"><strong>Monday - Friday 07:00 - 18:00</strong></p>
                                    <p class="open-hours"><strong>Out of Hours IT Support </strong><i class="fas fa-angle-down"></i></p>
                                </div>
                            </div>
                            <div class="map-card-container">
                                <div class="cards-cont">
                                    <div class="map-card1">
                                        <div class="card-icon"><i class="fas fa-home"></i></div>
                                        <span class="title">Netmatters Office: Wymondham</span>
                                        <span class="line"></span>
                                        <span class="address-box">Netmatters<br>11 Penfold Drive<br>Wymondham<br>Norfolk<br>NR18 0WZ</span>
                                    </div>
                                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4077.7787467891594!2d1.133428643560811!3d52.57572798009639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1625054883870!5m2!1sen!2suk" width="555" height="300" allowfullscreen="" loading="lazy"></iframe></div>
                                </div>
                                <div class="cards-cont">
                                    <div class="map-card2">
                                        <div class="card-icon"><i class="fas fa-home"></i></div>
                                        <span class="title">Netmatters Office: Gorleston, Great Yarmouth</span>
                                        <span class="line"></span>
                                        <span class="address-box">Netmatters - Great Yarmouth<br>Suite F23 Beacon Innovation Centre, Beacon Park<br>Gorleston, Great Yarmouth<br>Norfolk<br>NR31 7RA</span>
                                    </div>
                                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.7233105421165!2d1.7104906159999724!3d52.556529641273535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Great%20Yarmouth!5e0!3m2!1sen!2suk!4v1625055450440!5m2!1sen!2suk" width="555" height="300" allowfullscreen="" loading="lazy"></iframe></div>
                                </div>
                            </div>
                        </div>
                    </div>    
            </div>
     </div>
     <?php
require "./inc/news-letter.php";
require "./inc/footer.php";
?>
</div>
</body>