<header id=main-header>    
	<!--Finally have a working top nav-->
	<div class="top-nav">
		<a href="Index.php" class="header-logo">
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
			<a href="contact.php" class="btn contact-button">
				<div class="btn-main-nav"><i class="fas fa-paper-plane"></i>
					<span>CONTACT</span>
				</div>
			</a>
			<form class="search-bar">
				<input type="search" id="search" placeholder="Search...">
				<div class="btn btn-search"><i class="fas fa-search"></i>
				</div>
			</form>
			<!-- <div class="btn burger-icon">
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
        	</div> -->
			<button class="btn burger-icon hamburger hamburger--spin " type="button">
  				<span class="hamburger-box">
    			<span class="hamburger-inner"></span>
  				</span>
				  <p class="menu-title">MENU</p>
			</button>
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