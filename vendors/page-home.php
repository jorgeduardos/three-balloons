<?php
/*
	Template Name: Home Page
*/	

//advanced custom fields

$hero_quote = get_field('hero_quote');
$who_are_we1 = get_field('who_are_we1');
$who_are_we2 = get_field('who_are_we2');
$the_team = get_field('the_team');
$phone = get_field('phone');
$email = get_field('email');

get_header(); ?>
<header id="hero" class="js-home">
		<div id="hero-bkg-div">
			<div id="quote-div"><blockquote><?php echo $hero_quote; ?></blockquote></div>
		</div>
		<div class="arrow"><i class="ion-md-arrow-down"></i></div>
	</header>
	<!-- GALLERY -->
	<section id="gallery">
		<div class="icon-container">
			<i class="icon ion-md-close"></i>
		</div>
		<div class="gallery-div container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
		</div>
	</section>
	<section id="about" class="js-about">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/finalAboutBkg.png" alt="old man puppet">
		<!-- <img src="root/style/css/imgs/balloons.png" alt="balloons"> -->
		<div>
			<div>
				<h1>Who are we ?</h1>
				<hr>
				<p><?php echo $who_are_we1 ?></p>
				<p><?php echo $who_are_we2 ?></p>
			</div>
		</div>
	</section>
	<section id="who" class="js-team">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/15-little-custom-puppet-1920x1280-cropped.png" alt="worker puppet" id="bkg-img">
		<div>
			<div>
				<h2>The Team</h2>
				<hr>
				<p><?php echo $the_team ?><br> <span id="member-open">Click here for more information</span></p>
				<div id="profile-pics-div">
					<div class="prof-img-div leonardo-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/leonardo-perfil.jpg" alt="Leonardo" class="profile-img"></div>
					<div class="prof-img-div maise-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/maise-perfil.png" alt="Maria Gisela" class="profile-img"></div>
					<div class="prof-img-div geraldine-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/geraldine-perfil.jpg" alt="Geraldine" class="profile-img"></div>
				</div>

			</div>
		</div>
	</section>
	<section id="member-info">
		<div class="icon-container"><i class="icon ion-md-close"></i></div>
		<div class="contrainer-fluid" id="member-container-main">
			<div class="row">
				<div class="col-lg-4 member leonardo">
					<div class="member-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/leonardo-perfil.jpg" alt="man"></div>
					<div class="member-p">
						<p>Leonardo holds a Master’s degree in Educational Psychology and a Bachelor’s Degree in Education. Leonardo began his puppet career 16 years ago producing outstanding children’s productions that have been seen by hundreds of audiences across Venezuela and Houston with his former company Balalin Balalan. In addition to his work as a puppeteer and artistic writer/director, Leonardo has also been a drama teacher for Spanish-speaking children.</p>
					</div>
				</div>
				<div class="col-lg-4 member maise">
					<div class="member-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/maise-perfil.png" alt="woman"></div>
					<div class="member-p">
						<p>Maria holds a Bachelor’s Degree in Early Childhood Education and has about 8 years of experience working as a teacher for kids 0-5 years old in well-known schools in Venezuela and Houston. In her free time, Maria volunteers to help children with special needs and teaches Spanish for kids of all ages. Maria enjoys organizing activities so children can learn about the world, explore interests, and develop talents.</p>
					</div>
				</div>
				<div class="col-lg-4 member geraldine">
					<div class="member-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/geraldine-perfil.jpg" alt="woman 2"></div>
					<div class="member-p">
						<p>With a Bachelor’s degree in Chemical Engineering and a Master of Business Administration, Geraldine discovered her passion for children education and entertainment after having her first child, Victoria. Geraldine strongly believes that the well-being of society begins with the well-being of children and that play is critical to the healthy growth and development of kids. Geraldine spends all her free time playing with her daughter and creating fun activities, games, toys, and stories to provide Victoria and other children with the childhood they deserve.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="js-services">
		<div class="services-container">
			<h3>Services</h3>
			<div class="services-list container">
				<p class="service-paragraph">Three Balloons offers the following services in both Spanish and English:</p>
				<div class="row">
					<div class="col-sm-4">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/style/icons/png/006-puppet-show.png" alt="puppet show icon">
							<p class="feature">Unique, Fun and Educational Puppet Shows</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/style/icons/png/005-reading.png" alt="storytelling icon">
							<p class="feature">Storytelling</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/style/icons/png/002-business.png" alt="workshops icon">
							<p class="feature">Puppet Workshops for Kids and Adults</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/style/icons/png/001-brush.png" alt="crafts icon">
							<p class="feature">Arts and crafts</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/style/icons/png/transport.png" alt="van icon">
							<p class="feature">Our programs are mobile and can travel</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/style/icons/png/baby.png" alt="baby icon">
							<p class="feature">Toddlers Play, Learn & Laugh</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map"></div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/prueba1_editada.png" alt="puppeteer performing" id="services-img">
	</section>
	<section class="contact js-contact">
		<div class="container">
			<div class="jumbotron">
				<img id="balloons-contact" src="<?php echo get_stylesheet_directory_uri(); ?>/root/style/css/imgs/globos-tri-balloon.png" alt="balloons">
				<div class="row">
				<div class="col-lg-6">
					<h2>Contact Us</h2>
					<p>If you have any questions, or if you would like to schedule a show, do not hessitate to contact us by filling up the form below. You can also give us a call or, shooting us a message to our email.</p>
					<div class="contactLine"></div>
					<p class="contact-way"><?php echo $phone ?></p>
					<p class="contact-way"><?php echo $email ?></p>
				</div>
				<div class="col-lg-6">
					<form method="post" action="php/phpMailerForms/contactMailer.php">
						<div class="input-group input-group-lg">
							<div class="input-group-prepend">
						  <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
						  	</div>
						  <input type="text" class="form-control" name="name" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group input-group-lg">
							<div class="input-group-prepend">
						  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
						  	</div>
						  <input type="text" class="form-control" name="email" aria-describedby="inputGroup-sizing-default">
						</div>
						
						 <textarea class="form-control" id="mensaje" name="message" rows="5" placeholder="Message"></textarea>
						<button type="submit" class="btn btn-primary btn-lg">Send</button>
					</form>
					<?php //echo do_shortcode("[contact-form-7 id='137' title='Primary Contact Form']"); ?>
				</div>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>