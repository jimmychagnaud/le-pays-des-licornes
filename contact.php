<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 * Template Name: Contact
 */

get_header();?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg1.jpg');"></div>
<div class="container contentPage">
	<div class="row text-center textContact">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
				    the_post();
				    the_content();
				  ?>
		</div>
	</div>
	<div class="container contactForm">
		<div class="row">
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
						<p>Aurore Jumeaux - 32100 condom</p>
						<p>
							<span class="glyphicon glyphicon-phone"></span> 06 78 92 16 94
							<span class="glyphicon glyphicon-envelope"></span> royaumedeslicornes@hotmail.fr
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91894.60094572659!2d0.3081216170400438!3d43.96544161773468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aa3b61145eec19%3A0x406f69c2f410740!2s32100+Condom!5e0!3m2!1sfr!2sfr!4v1519229325060" width="100%" height="450" style="border:0; padding: 10px;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }; wp_reset_query(); get_footer();?>