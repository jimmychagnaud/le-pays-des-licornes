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
	<?php } else { ?>
	<div class="row text-center textChiensChats">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
					the_post();
					the_content();
					$maleImage = get_field('image_chat_mâle');
					$maleTexte = get_field('texte_chat_mâle');
					$maleTexte = strlen($maleTexte) > 100 ? substr($maleTexte,0,100)."..." : $maleTexte;
					$femelleImage = get_field('image_chats_femelle');
					$femelleTexte = get_field('texte_chat_femelle');
					$femelleTexte = strlen($femelleTexte) > 100 ? substr($femelleTexte,0,100)."..." : $femelleTexte;
					$bebeImage = get_field('image_bebe_disponible');
					$bebeTexte = get_field('texte_bebe_disponible');
					$bebeTexte = strlen($bebeTexte) > 100 ? substr($bebeTexte,0,100)."..." : $bebeTexte;
				};?>
				<?php if (is_page('Maine coon')):?>
					<div class="col-md-3 col-xs-12 colArchiveChat">
						<a href="<?php the_permalink() ?>">
							<div class="imageChat" style="background-image: url(<?php echo ($maleImage); ?>)">
								<div class="hover">
									<p><?php the_title() ?> mâle</p>
									<p><?php echo $maleTexte;?></p>
								</div>
							</div>
							<div class="textChat">
								<div class="col-md-6 chatInfos">
									<h3><?php the_title();?> mâle</h3>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 col-xs-12 colArchiveChat">
						<a href="<?php the_permalink() ?>">
							<div class="imageChat" style="background-image: url(<?php echo ($femelleImage); ?>)">
								<div class="hover">
									<p><?php the_title() ?> femelle</p>
									<p><?php echo $femelleTexte;?></p>
								</div>
							</div>
							<div class="textChat">
								<div class="col-md-6 chatInfos">
									<h3><?php the_title();?> femelle</h3>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 col-xs-12 colArchiveChat">
						<a href="<?php the_permalink() ?>">
							<div class="imageChat" style="background-image: url(<?php echo ($bebeImage); ?>)">
								<div class="hover">
									<p>Bébé disponible</p>
									<p><?php echo $bebeTexte;?></p>
								</div>
							</div>
							<div class="textChat">
								<div class="col-md-6 chatInfos">
									<h3>Bébé disponible</h3>
								</div>
							</div>
						</a>
					</div>
				<?php	endif;};
				if (is_page('Épagneuls nains continentaux Papillon')): ?>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam hic, autem ullam adipisci sed, qui vitae, consectetur itaque praesentium modi molestias laudantium magnam repellat unde est sapiente dignissimos minus quod. Repudiandae rem inventore atque voluptatem dolore, asperiores tempora praesentium velit esse omnis maiores vitae alias minima libero eos nihil dicta.
				<?php endif; wp_reset_query();?>
		</div>
	</div>
</div>
<?php get_footer();?>