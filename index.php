<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet"/>
	<script src="https://kit.fontawesome.com/cc821e5d4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css" />
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="css/about.css" />
	<link rel="stylesheet" type="text/css" href="css/skills.css" />
	<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
	<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script defer src="js/app.js"></script>
	<title>Pablo Garay</title>
	<!-- Open Graph metadata -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Pablo Garay - Web Developer" />
	<meta property="og:description" content="Pablo Garay, web developer portfolio. You can also use this portfolio website to profile him, just download it from my github." />
	<meta property="og:url" content="https://pablogarayok/" />
	<meta property="og:site_name" content="Pablo Garay Porfolio" />
	<meta property="og:image" content="https://pablogarayok/img/web-site.png" />
	<meta property="og:image:secure_url" content="https://pablogarayok/img/web-site.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="296" />
	<meta property="og:image:height" content="156" />
	<meta property="og:image:alt" content="portfolio web site" />
	<!-- Open Graph metadata for Twitter -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@_pablogaray" />
	<meta name="twitter:title" content="Pablo Garay - Web Developer" />
	<meta name="twitter:creator" content="@_pablogaray" />
	<meta name="twitter:description" content="Pablo Garay, web developer portfolio. You can also use this portfolio website to profile him, just download it from my github." />
	<meta name="twitter:image" content="https://pablogarayok/img/web-site.png" />
</head>
<body>
	<header class="topheader">
		<nav class="topnav">
			<a href="#" class="brand">
				<h2><span>P</span>G</h2>
			</a>
			<button class="open-menu" aria-label="Abrir menú">
				<img src="img/hamburger-icon.svg" alt="abrir menú" />
			</button>
			<ul class="menu">
				<button class="close-menu" aria-label="Cerrar menú">
					<img src="img/close-icon.svg" alt="cerrar menú" />
				</button>
	        	<li><a class="active" href="#home">Home</a></li>
				<li><a href="#aboutme">About me</a></li>
	        	<li><a href="#skills">Skills</a></li>
	        	<li><a href="#portfolio">Portfolio</a></li>
	        	<li><a href="#contact">Contact</a></li>
	        </ul>
		</nav>
	</header>
	<div class="main">
		<div class="horizontal-padding vertical-padding">
			<section class="home" id="home">
				<div class="home-img">
					<img src="./img/pablo-garay-picture.jpg" alt="pablo garay picture">
				</div>
				<div class="home-info">
					<h1>Hi<span>!</span><br>I'm <span>Pablo </span>Garay</h1>
					<h4 class="home-subtitle">Web Developer</h4>
					<button class="home-download-resume">
						<a target="_blank" href="./pdf/john-doe-resume.pdf">Download Resume</a>
					</button>					
				</div>
			</section><!--end section home-->
		</div><!--end horizontal/vertical padding-->
		<section class="about" id="aboutme">
			<div class="horizontal-padding vertical-padding">
				<div class="about-title">
					<h2 class="uppercase">About me</h2>
					<div class="about-divider"></div>
				</div>
				<div class="about-content">
					<div class="about-content-info">
						<h3>Who I am?</h3>
						<p>
							I am a proactive person, I can quickly adapt to changes. I like what I do and I really want to learn, that's why I continue training myself day by day in a self-taught way to grow as a professional. 
						</p>
						<p>
							I have communication and empathy skills to work in a team. Now I am looking for the opportunity to join a technology company, although at the moment I work autonomously.
						</p>						
					</div>				
					<div class="about-content-details">
						<h3>My Hobbies</h3>
						<p>
							I like outdoor sports, especially soccer, although the important thing is to get together with friends. Photography, meeting new places and people.
						</p>
					</div>
				</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section about me-->
		<div class="horizontal-padding vertical-padding">
			<section class="skills" id="skills">
				<div class="skills-content-title">
					<h2 class="uppercase">Skills & Tools</h2>
					<div class="skills-divider"></div>
				</div>
				<ul class="skills-list">
					<li>Linux</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>SQL</li>
					<li>MySQL</li>
					<li>PHP</li>
					<li>Laravel</li>
					<li>Git</li>
					<li>GitHub</li>
					<li>Corel</li>
					<li>Illustrator</li>
					<li>Photoshop</li>
				</ul>
			</section><!--end section skills-->
		</div><!--end horizontal/vertical padding-->
		<section class="portfolio" id="portfolio">
			<div class="horizontal-padding vertical-padding">
				<div class="portfolio-content-title">
					<h2 class="uppercase">Portfolio</h2>
					<div class="portfolio-divider"></div>
				</div>
				<div class="center-950">
				<div class="porfolio-container-cards">
					<div class="portfolio-card">
						<a href="./portfolio/apirest" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/apirest.png" width="156" height="296" alt="apirest">
							</div>
						</a>
						<h4 class="portfolio-card-title">Api REST</h4>
						<p>User management, login password, method access token and cron job. Technologies: PHP, MySQL.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com/PabloGarayOk/apirest-pacientes.git" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="#" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 1-->
					<div class="portfolio-card">
						<a href="./portfolio/blog" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/blog.png" width="156" height="296" alt="blog">
							</div>
						</a>
						<h4 class="portfolio-card-title">BLOG</h4>
						<p>Blog with MVC design pattern under development. Technologies used PHP, MySQL, CSS, HTML.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com/PabloGarayOk/Blog.git" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="#" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 2-->
					<div class="portfolio-card">
						<a href="./portfolio/crud_con_paginacion_mvc" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/crud-mvc.png" width="156" height="296" alt="crud mvc">
							</div>
						</a>
						<h4 class="portfolio-card-title">CRUD MVC</h4>
						<p>Development of CRUD with paging done in MVC design pattern. Technologies used PHP, MySQL, CSS, HTML.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="#" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 3-->
					<div class="portfolio-card">
						<a href="https://www.laberintolibros.com.ar" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/web-site-wordpress.png" width="156" height="296" alt="web site wordpress">
							</div>
						</a>
						<h4 class="portfolio-card-title">E-commerce WordPress</h4>
						<p>Development of e-commerce website on WordPress platform. Technologies used PHP.</p>
						<div class="portfolio-card-links">							
							<!-- <a href="" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a> -->
							<a href="https://www.laberintolibros.com.ar" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 4-->
					<div class="portfolio-card">
						<a href="./portfolio/contact-form" target="_blank">
							<div class="portfolio-card-img ">
								<img src="img/contact-form.png" width="156" height="296" alt="contact form">
							</div>
						</a>
						<h4 class="portfolio-card-title">Contact Form</h4>
						<p>Simple contact form with multiple validations. Technologies used PHP, JAVASCRIPT, CSS, HTML.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com/PabloGarayOk/contact-form.git" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="#" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 5-->
					<div class="portfolio-card">
						<a href="#" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/web-site.png" width="156" height="296" alt="web site">
							</div>
						</a>
						<h4 class="portfolio-card-title">Portfolio Website</h4>
						<p>One page portfolio website for developers. Technologies used PHP, JAVASCRIPT, CSS, HTML.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com/PabloGarayOk/Portfolio-website" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="#" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 6-->
				</div><!--end porfolio-container-cards-->
			</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section portfolio-->
		<section class="contact" id="contact">
			<div class="horizontal-padding vertical-padding">
				<div class="contact-content-title">
					<h2 class="uppercase">Contact</h2>
					<div class="contact-divider"></div>
				</div>
				<form name="contact_form" id="contact_form" action="php/contact-form.php" method="post" onsubmit="return validar();">
					<div class="contact-group">
						<?php
                            include("php/feedback.php");
                        ?>
						<div class="contact-row">
							<input type="text" name="name" id="name" placeholder="" value="<?= $_GET['name'] ? $_GET['name'] : "" ?>" required="">
							<span class="contact-line"></span>
							<label>Name</label>
						</div>
						<div class="contact-row">
							<input type="email" name="email" id="email" placeholder="" value="<?= $_GET['email'] ? $_GET['email'] : "" ?>" required="">
							<span class="contact-line"></span>
							<label>E-mail</label>             
						</div>
						<div class="contact-row">    
							<textarea name="message" id="message" rows="3" placeholder="" required=""><?= $_GET['message'] ? $_GET['message'] : "" ?></textarea>
							<span class="contact-line"></span>
							<label class="contact-message">Message</label>
						</div>
						<button class="contact-btn-send" type="submit" name="submit-form" onclick="validar();">
							<span>Send Message</span>
						</button>
					</div>
				</form>
				<div class="contact-links">							
					<a href="mailto:hello@pablogaray.com.ar">
						<i class="fa-solid fa-envelope"></i>
					</a>
					<a target="_blank" href="https://twitter.com/_pablogaray">
						<i class="fa-brands fa-twitter"></i>
					</a>
					<a target="_blank" href="https://github.com/PabloGarayOk">
						<i class="fa-brands fa-github"></i>
					</a>
					<a target="_blank" href="https://www.linkedin.com/in/pablo-garay-ok">
						<i class="fa-brands fa-linkedin-in"></i>
					</a>
					<a target="_blank" href="https://www.behance.net/pablogaray1">
						<i class="fa-brands fa-behance"></i>
					</a>
				</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section contact-->
	</div><!--end main-->
	<footer class="footer">
		<div class="footer-credits">
			<?php include_once "./php/malvinas.php";?>
			<p class="footer-malvinas"><?= $conmemoracion; ?><img src="./img/islas-malvinas.png" width="40" height="17" alt="islas malvinas"> Years.</p>
			<p class="footer-autor"><i>&copy; <?php echo date("Y");?> · Powered by: <span class="footer-name">Pablo Garay</span> · C&oacute;rdoba, Argentina.</i></p>
		</div>
	</footer>
</body>
</html>