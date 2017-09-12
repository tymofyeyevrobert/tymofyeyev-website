<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="about" id="aboutMe">
	<div class="container">
		<div class="row">

			<div class="wp-about">
				<div class="about-img">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/dist/images/main-photo.jpg" alt="Main Photo">
				</div>
				<div class="about-description">
					<h3>Hello</h3>
					<h1>I'm <span>Robert Tymofyeyev</span></h1>
					<h2>Junior Front-end Developer</h2>
					<div class="about-description_details">
						<p>Age <span>24</span></p>
						<p>Address <br><span>14017, Ukraine, Chernigov, Zhabinskogo str.</span></p>
						<p>E-mail <br><a href="mailto:tymofyeyevrobert@gmail.com" title="Mail"><span>tymofyeyevrobert@gmail.com</span></a> </p>
						<p>Phone <br><a href="tel:+380930285403" title="Call"><span>+38 (093) 028-54-03</span></a></p>
					</div>
				</div>
				<div class="about-social">
					<a href="https://www.facebook.com/roberttymofyeyev?ref=bookmarks" target="_blank" title="FB Profile">
						<img src="<?php bloginfo('template_url'); ?>/dist/images/fb.png" alt="Facebook">
					</a>
					<a href="https://www.linkedin.com/in/robert-tymofyeyev-761409145" target="_blank" title="Link Profile">
						<img src="<?php bloginfo('template_url'); ?>/dist/images/link.png" alt="Linkedin">
					</a>
					<a href="https://www.instagram.com/tymofyeyev_robert/" target="_blank" title="Instagram Profile">
						<img src="<?php bloginfo('template_url'); ?>/dist/images/inst.png" alt="Instagram">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="resume" id="myResume">
	<div class="container">

		<div class="about-pdfdoc">
			<a class="resume-pdf" href="/wp-content/uploads/2017/09/cv_tymofyeyev.pdf" title="cv_tymofyeyev" target="_blank">Download Resume</a>
			<p>Hello! I'm Robert Tymofyeyev. Front-end Developer. Experienced in e-commerce websites creation, based on Woocommerce, and adaptive websites development. </p>
		</div>

	</div>
</section>

<section class="skills" id="mySkills">
	<div class="container">
		<div class="row">

			<h2 class="topic">Professional Skills</h2>
			<div class="wp-skills">
				<div class="left col-sm-12 col-md-6 col-lg-6">
					<div class="skillbar clearfix " data-percent="85%">
						<div class="skillbar-title" style="background: #d35400;"><span>HTML & CSS</span></div>
						<div class="skillbar-bar" style="background: #e67e22;"></div>
						<div class="skill-bar-percent">85%</div>
					</div>

					<div class="skillbar clearfix " data-percent="85%">
						<div class="skillbar-title" style="background: #2980b9;"><span>Sass & Less</span></div>
						<div class="skillbar-bar" style="background: #3498db;"></div>
						<div class="skill-bar-percent">85%</div>
					</div>

					<div class="skillbar clearfix " data-percent="80%">
						<div class="skillbar-title" style="background: #563d7c;"><span>Bootstrap</span></div>
						<div class="skillbar-bar" style="background: #563d7c;"></div>
						<div class="skill-bar-percent">80%</div>
					</div>

					<div class="skillbar clearfix " data-percent="75%">
						<div class="skillbar-title" style="background: #46465e;"><span>WordPress</span></div>
						<div class="skillbar-bar" style="background: #46465e;"></div>
						<div class="skill-bar-percent">75%</div>
					</div>
				</div>
				<div class="right col-sm-12 col-md-6 col-lg-6">
					<div class="skillbar clearfix " data-percent="35%">
						<div class="skillbar-title" style="background: #333333;"><span>Photoshop</span></div>
						<div class="skillbar-bar" style="background: #525252;"></div>
						<div class="skill-bar-percent">35%</div>
					</div>

					<div class="skillbar clearfix " data-percent="15%">
						<div class="skillbar-title" style="background: #f7df1e;"><span>JavaScript</span></div>
						<div class="skillbar-bar" style="background: #f7df1e;"></div>
						<div class="skill-bar-percent">15%</div>
					</div>

					<div class="skillbar clearfix " data-percent="10%">
						<div class="skillbar-title" style="background: #124e8c;"><span>PHP</span></div>
						<div class="skillbar-bar" style="background: #4288d0;"></div>
						<div class="skill-bar-percent">10%</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>

<section class="portfolio" id="myPortfolio">
	<div class="container">
		<div class="row">

			<h2 class="topic">Portfolio</h2>
			<figure class="left col-sm-12 col-md-6 col-lg-6">
				<a href="http://usfgr.net/" target="_blank" title="USFGR">
					<img src="/wp-content/themes/robert/dist/images/golden.jpg" alt="USFGR">
				</a>
				<a href="http://themusicretailapp.com/" target="_blank" title="Music Retail App">
					<img src="/wp-content/themes/robert/dist/images/music.jpg" alt="MusicReatailApp">
				</a>
			</figure>
			<figure class="right col-sm-12 col-md-6 col-lg-6">
				<a href="http://fitoapoteka.com.ua/" target="_blank" title="Fito Apoteka">
					<img src="/wp-content/themes/robert/dist/images/apoteka.jpg" alt="FitoApoteka">
				</a>
				<a href="http://dentalartsofbedford.com/" target="_blank" title="Dental Arts Of Bedford">
					<img src="/wp-content/themes/robert/dist/images/dental.jpg" alt="DentalArtsOfBedford">
				</a>
			</figure>

		</div>
	</div>
</section>

<section class="experience" id="myExperience">
	<div class="container">
		<div class="row">

			<h2 class="topic">Work Experience</h2>
			<div class="wp-experience block-border left">
				<p class="block-border_top">July'16 - February'17</p>
				<h4>Transparen LLC</h4>
				<h5>Service Desk Operator</h5>
				<p class="block-description">Rapid Response to incoming calls, establishing a client-contractor communication, emails handling. Working with ERP and ticketing systems, uploading content onto websites.</p>
			</div>

			<div class="empty-center"></div>

			<div class="wp-experience block-border right">
				<p class="block-border_top">February'17 - present</p>
				<h4>Transparen LLC</h4>
				<h5>Front-end Developer</h5>
				<p class="block-description">Websites, landing pages and e-commerce development.</p>
			</div>

		</div>
	</div>

</section>

<section class="education" id="myEducation">
	<div class="container">
		<div class="row">

			<h2 class="topic">Education</h2>
			<div class="wp-education">
				<div class="wp-education block-border">
					<p class="block-border_top">2010 - 2013</p>
					<h4>High School of Tourism and Foreign Languages</h4>
				</div>
			</div>

		</div>
	</div>
</section>


<section class="interests" id="myInterests">
	<div class="container">
		<div class="row">

			<h2 class="topic">My Interests</h2>
			<div class="wp-interests">
				<p>Self-motivated, easy-going and ambitious. Prefer active sports. </p>
				<div class="icons">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/bball.png" alt="#">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/tennis.png" alt="#">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/chess.png" alt="#">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/racing.png" alt="#">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/guitar.png" alt="#">
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer();
