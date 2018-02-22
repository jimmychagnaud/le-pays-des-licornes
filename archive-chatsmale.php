<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$Chats= new WP_Query(array(
    'post_type'=>'chatsmale',
    'posts_per_page' => 12,
    'paged' => $paged,
));
?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg1.jpg');"></div>
<div class="container chatArchive">
	<div class="row">
		<h1>Tous mes chats mâle</h1>
		<?php while ($Chats->have_posts()) {
					 	$Chats->the_post();
						$chatImage = get_field('imageChat');
						$chatTexte = get_field('texteChat');
						$chatTexte = strlen($chatTexte) > 300 ? substr($chatTexte,0,300)."..." : $chatTexte;
						$prix = get_field('prixChat');
						$age = get_field('ageChat');
						$couleur = get_field('couleurChat');
						$status = get_field('status_chats');
						$titres = get_field('titres_recompenses_chats');
		?>
		<div class="col-md-3 col-xs-12 colArchiveChat">
			<a href="<?php the_permalink() ?>">
				<div class="imageChat" style="background-image: url(<?php echo ($chatImage[0]['url']); ?>)">
					<div class="hover">
						<p><?php the_title() ?></p>
						<p><?php echo $chatTexte;?></p>
					</div>
				</div>
				<div class="textChat">
					<div class="col-md-6 chatInfos">
						<h3><?php the_title();?></h3>
						<p><?php echo $age;?></p>
						<p><?php echo $status;?></p>
					</div>
					<div class="col-md-6 chatPrix">
						<?php if ($prix != 0){ 
							echo ('<p>'.$prix.'<span style="font-size: .6em;"> €</span></p>');
						};?>
					</div>
				</div>
			</a>
		</div>
		<?php };
		$total_pages = $Chats->max_num_pages;
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