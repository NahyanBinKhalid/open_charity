<header class="wrapper">
	<div class="row">
		<section id="logo" class="brand sm-12 md-2">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php elseif ($site_name || $site_slogan): ?>
				<div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>
					<?php if ($site_name): ?>
						<h1><?php print $site_name; ?></h1>
					<?php endif; ?>

					<?php if ($site_slogan): ?>
						<div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
							<?php print $site_slogan; ?>
						</div>
					<?php endif; ?>

				</div> <!-- /#name-and-slogan -->
			<?php endif; ?>
		</section>

		<section id="primary-menu" class="navigation sm-12 md-5 md-offset-5">
			<button class="btn-toggle icon right"><i class="fa fa-bars fa-2x"></i></button>
			<div class="nav row">
				<?php if ($main_menu): ?>
					<?php print theme("links__system_main_menu", array (
						'links' => $main_menu,
						'attributes' => array (
							'id' => 'main-menu-links',
							'class' => array ('list-inline', 'right')
						)
					)); ?>
				<?php endif; ?>
			</div>
		</section>
	</div>
</header>
<main>
	<?php if(isset($page['content']['system_main']['nodes'])) : ?>
		<section class="wrapper-responsive">
			<div class="wrapper">
				<h1 class="text-center"><?php print $title; ?></h1>
				<?php print render($page['content']); ?>
			</div>
		</section>
	<?php else : ?>
	<section id="slideshow" class="slideshow">
		<div id="banner-1" class="banner">
			<div class="wrapper">
				<div class="es-12 text-center">
					<h1>Sharing Ideas For Charities</h1>
					<div class="row">
						<div class="description es-12 sm-8 md-6 sm-offset-2 md-offset-3">
							<div class="row">
								<p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
								<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
								<p class="big">Together we can make a bigger diference.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="banner-2" class="banner">
			<div class="wrapper">
				<div class="es-12 text-center">
					<h1>Sharing Ideas For Charities</h1>
					<div class="row">
						<div class="description es-12 sm-8 md-6 sm-offset-2 md-offset-3">
							<div class="row">
								<p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
								<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
								<p class="big">Together we can make a bigger diference.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="banner-3" class="banner">
			<div class="wrapper">
				<div class="es-12 text-center">
					<h1>Sharing Ideas For Charities</h1>
					<div class="row">
						<div class="description es-12 sm-8 md-6 sm-offset-2 md-offset-3">
							<div class="row">
								<p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
								<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
								<p class="big">Together we can make a bigger diference.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="banner-4" class="banner">
			<div class="wrapper">
				<div class="es-12 text-center">
					<h1>Sharing Ideas For Charities</h1>
					<div class="row">
						<div class="description es-12 sm-8 md-6 sm-offset-2 md-offset-3">
							<div class="row">
								<p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
								<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
								<p class="big">Together we can make a bigger diference.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="banner-5" class="banner">
			<div class="wrapper">
				<div class="es-12 text-center">
					<h1>Sharing Ideas For Charities</h1>
					<div class="row">
						<div class="description es-12 sm-8 md-6 sm-offset-2 md-offset-3">
							<div class="row">
								<p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
								<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
								<p class="big">Together we can make a bigger diference.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="banner-6" class="banner">
			<div class="wrapper">
				<div class="es-12 text-center">
					<h1>Sharing Ideas For Charities</h1>
					<div class="row">
						<div class="description es-12 sm-8 md-6 sm-offset-2 md-offset-3">
							<div class="row">
								<p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
								<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
								<p class="big">Together we can make a bigger diference.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="events" class="grey wrapper-responsive">
		<div class="wrapper">
			<div class="events row">
				<div class="event es-12 sm-8 md-10">
					<date class="date"><span class="text-secondary">Next Event:</span> June 23rd 2016  18:30 - 21:00</date>
					<address>Cancer Research UK, Angel Buildivg, 407 St John Street, London EC1V 4AD</address>
				</div>

				<div class="register es-12 sm-4 md-2">
					<a href="#" class="btn">Register</a>
				</div>
			</div>
		</div>
	</section>

	<section id="groups" class="groups wrapper text-center">
		<h1>Get Involved</h1>
		<div class="row">
			<div class="group sm-12 md-4">
				<img src="<?php echo base_path().path_to_theme() ?>/images/groups/meetup.png" alt="">
				<h3>We do Meetings</h3>
				<p class="description">We organise our meetings through the OpenCharity MeetUp group</p>
				<a href="#" class="btn-outline-large">Meetup Group</a>
			</div>

			<div class="group sm-12 md-4">
				<img src="<?php echo base_path().path_to_theme() ?>/images/groups/slack.png" alt="">
				<h3>We Collaborate</h3>
				<p class="description">OpenCharity have a slack group for daily collaboration and Update</p>
				<a href="#" class="btn-outline-large">Slack Group</a>
			</div>

			<div class="group sm-12 md-4">
				<img src="<?php echo base_path().path_to_theme() ?>/images/groups/google.png" alt="">
				<h3>We Share</h3>
				<p class="description">We have a Google Group set up to share tools and documents</p>
				<a href="#" class="btn-outline-large">Google Group</a>
			</div>
		</div>
	</section>

	<div class="grey wrapper-responsive">
		<div class="row">
			<div class="wrapper">
				<section id="mission" class="missions text-center">
					<h1>Our Mission</h1>
					<p class="partners">Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</p>
					<p class="welcome">If you are a charity or a supplier, we are ready to welcome you.</p>

					<div class="row">
						<div class="sm-12 md-4">
							<div class="mission es-12">
								<img src="<?php echo base_path().path_to_theme() ?>/images/mission/bulb.png" alt="">
								<h4 class="text-secondary">We Help Charities</h4>
								<p>share knowledge and working practice to make the best technology choices.</p>
							</div>
						</div>

						<div class="sm-12 md-4">
							<div class="mission es-12">
								<img src="<?php echo base_path().path_to_theme() ?>/images/mission/group.png" alt="">
								<h4 class="text-secondary">We Bring Together</h4>
								<p>charities and suppliers to the charity sector to share best practices.</p>
							</div>
						</div>

						<div class="sm-12 md-4">
							<div class="mission es-12">
								<img src="<?php echo base_path().path_to_theme() ?>/images/mission/like.png" alt="">
								<h4 class="text-secondary">We Encourage</h4>
								<p>collaboration and innovation for the good of the charity sector.</p>
							</div>
						</div>
					</div>
				</section>

				<hr>

				<section id="members" class="members text-center">
					<h1>Our Members</h1>
					<ul class="list-inline">
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/cancer-research.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/compucorp.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/kop.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/zing.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/comic-releif.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/cancer-research.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/compucorp.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/kop.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/zing.png" alt=""></li>
						<li class="member"><img src="<?php echo base_path().path_to_theme() ?>/images/members/comic-releif.png" alt=""></li>
					</ul>
				</section>
			</div>
		</div>
	</div>

	<section id="blog" class="blog wrapper">
		<h1 class="text-center">Blog</h1>
		<div class="articles row">
			<div class="article sm-12 md-6 lg-3">
				<h5 class="title text-secondary">Online Donation Special</h5>
				<article class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
				<date>14 Nov 2014</date>
			</div>

			<div class="article sm-12 md-6 lg-3">
				<h5 class="title text-secondary">Online Donation Special</h5>
				<article class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
				<date>14 Nov 2014</date>
			</div>

			<div class="article sm-12 md-6 lg-3">
				<h5 class="title text-secondary">Online Donation Special</h5>
				<article class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
				<date>14 Nov 2014</date>
			</div>

			<div class="article sm-12 md-6 lg-3">
				<h5 class="title text-secondary">Online Donation Special</h5>
				<article class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
				<date>14 Nov 2014</date>
			</div>
		</div>
	</section>
	
	<?php endif; ?>
</main>

<footer class="dark-grey">
	<div class="wrapper">
		<section id="social" class="social">
			<ul class="list-inline text-center">
				<li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>
			</ul>
		</section>

		<hr>

		<section id="copyright" class="copyright text-center">
			<p>This site was built as a collaboration between <a href="#">Manifesto Digital</a> and <a href="#">Compucorp</a></p>
		</section>
	</div>
</footer>
<script>
	$(document).ready(function(){
		$(".slideshow").slick({
			accessability : false,
			adaptiveHeight : false,
			autoplay : true,
			fade: true,
			mobileFirst: true,
			speed: 500
		});

		$(".members .list-inline").slick({
			dots: true,
			centerMode: true,
			centerPadding: '60px',
			slidesToShow: 5,
			arrows: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
			}, {
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}]
		});

		$(".navigation .icon").click(function() {
			$(".nav").slideToggle();
		});
	});
</script>