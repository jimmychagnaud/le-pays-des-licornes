<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 * Template Name: Pages
 */

get_header();?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg1.jpg');"></div>
<div class="container contentPage">
	<?php if (is_page('contact')) {  ?>
	<div class="row text-center textContact">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
				    the_post();
				    the_content();};
				  wp_reset_query();
				  ?>
		</div>
	</div>
	<?php } else { ?>
	<div class="row text-center textContact">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
				    the_post();
				    the_content();};
				  wp_reset_query();};
				  ?>
		</div>
	</div>
	<div class="container contactForm">
		<div class="row">
			<?php if (is_page('contact')) {?>
				<div class="col-md-6">
					<div class="row text-center">
						<div class="col-md-12">
							<h2>Contactez moi !</h2>
							<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
								<?php echo do_shortcode(get_field('shortcodeContact')); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row text-center">
						<div class="col-md-12">
							<h2>Ou me trouver ?</h2>
							<p>Aurore Jumeaux - Les saliès - 32100 condom</p>
							<p>
								<span class="glyphicon glyphicon-phone"></span> ------------------
								<span class="glyphicon glyphicon-envelope"></span> ----------------
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11487.159452039043!2d0.3866802369954731!3d43.96371261064073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aa3b1511d573c3%3A0x66aeed2d0de9b338!2sLes+Sali%C3%A8s%2C+32100+Condom!5e0!3m2!1sfr!2sfr!4v1507397626630" width="100%" height="450" frameborder="0" style="border:0; padding: 10px;" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			<?php };?>
		</div>
	</div>
</div>
<?php get_footer();?>
