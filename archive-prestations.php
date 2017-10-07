<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 * Template Name: Prestations
 */
get_header();?>
	<div class="container-fluid prestationArchive">
		<div class="row">
			<h1>Toutes nos prestations</h1>
			<?php 
			$i = 0;
			$j = 0;
			$g = 0;
			while (have_posts()) :
			 	the_post();
				$prestationImage = get_field('prestationImage');
				$prestationTexte = get_field('prestationTexte');
				$colBgImage = get_field('bgImagePresta');
				$i ++;?>
				<div class="lineContentLg">
					<div class="<?php if($i%3 == 0 || $j == 1) : $j ++; echo 'left'; else: echo 'right'; endif; ?>">
						<div class="colArchivePresta colImage" style="background-image: url(<?php echo $colBgImage?>)"></div>
						<div class="colArchivePresta">
							<?php echo file_get_contents($prestationImage);?>
							<div class="contentArchivePresta">
								<h3><?php echo the_title();?></h3>
								<p><?php echo $prestationTexte ?></p>
							</div>
						</div>
					</div>	
				</div>
				<?php
				if ($j == 1) :
					$i = 2;
				endif; 
				$g++; ?>
				<div class="lineContentXs">
					<div class="<?php if($g%2 == 0) : echo 'left'; else: echo 'right'; endif; ?>">
						<div class="colArchivePresta colImage" style="background-image: url(<?php echo $colBgImage?>)"></div>
						<div class="colArchivePresta">
							<?php echo file_get_contents($prestationImage);?>
							<div class="contentArchivePresta">
								<h3><?php echo the_title();?></h3>
								<p><?php echo $prestationTexte ?></p>
							</div>
						</div>
					</div>	
				</div>
			<?php endwhile; wp_reset_query();?>
		</div>
		<?php $query = new WP_query(array('post_type' => 'marques', 'posts_per_page' => -1));
				if ($query->have_posts()): ?>
			<div class="row nosMarques">
				<h2 class="text-center">Nos marques</h2>
					<div class="references">
		        <div class="left-arrow"><span class="glyphicon glyphicon-menu-left"></span></div>
		        <div class="right-arrow"><span class="glyphicon glyphicon-menu-right"></span></div>
		        <div class="content-references">
	            <ul>
					<?php while ($query->have_posts()) : $query->the_post();
									$imageUrl = get_field('marqueImg'); ?>
	              <li style="background-image: url(<?php echo $imageUrl ?>)"></li>
					<?php endwhile;?>
							</ul>            
		        </div>
					</div>
				</div>
			</div>
		<?php endif; wp_reset_postdata();?>
	</div>
</div>
<?php get_footer();?>