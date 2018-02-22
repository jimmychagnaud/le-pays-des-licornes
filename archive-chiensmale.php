<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$chiens= new WP_Query(array(
    'post_type'=>'chiensmale',
    'posts_per_page' => 12,
    'paged' => $paged,
));
?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg2.jpg');"></div>
<div class="container chienArchive">
	<div class="row">
		<h1>Tous mes chiens mâle</h1>
		<?php while ($chiens->have_posts()) {
					 	$chiens->the_post();
						$chienImage = get_field('imageChien');
						$chienTexte = get_field('texteChien');
						$chienTexte = strlen($chienTexte) > 300 ? substr($chienTexte,0,300)."..." : $chienTexte;
						$prix = get_field('prixChien');
						$age = get_field('ageChien');
						$couleur = get_field('couleurChien');
						$status = get_field('status_chiens');
						$titres = get_field('titres_recompenses_chiens');
		?>
		<div class="col-md-3 col-xs-12 colArchiveChien">
			<a href="<?php the_permalink() ?>">
				<div class="imageChien" style="background-image: url(<?php echo ($chienImage[0]['url']); ?>)">
					<div class="hover">
						<p><?php the_title() ?></p>
						<p><?php echo $chienTexte;?></p>
					</div>
				</div>
				<div class="textChien">
					<div class="col-md-6 chienInfos">
						<h3><?php the_title();?></h3>
						<p><?php echo $age;?></p>
						<p><?php echo $status;?></p>
					</div>
					<div class="col-md-6 chienPrix">
						<?php if ($prix != 0){ 
							echo ('<p>'.$prix.'<span style="font-size: .6em;"> €</span></p>');
						};?>
					</div>
				</div>
			</a>
		</div>
		<?php };
		$total_pages = $chiens->max_num_pages;
    if ($total_pages > 1):
      $current_page = max(1, get_query_var('paged')); ?>
		</div>
		<div class="pagination">
			<?php	echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text'    => __('precedent'),
        'next_text'    => __('suivant'),
	    ));
    endif;
		wp_reset_query();?>
	</div>
</div>
<?php get_footer();?>