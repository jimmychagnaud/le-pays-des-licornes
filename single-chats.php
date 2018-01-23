<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 * Template Name: Single-chat
 */
get_header();?>
<div class="container chatSingle">
	<div class="row">
		<?php while (have_posts()) {
					 	the_post();
						$chatImage = get_field('imageChat');
						$chatTexte = get_field('texteChat');
						$prix = get_field('prixChat');
						$age = get_field('ageChat');
						$couleur = get_field('couleurChat');
						$sexe = get_field('sexeChat');
						$race = get_field('raceChat');
		?>
		<h1><?php echo the_title();?></h1>
		<div class="col-md-6 col-xs-12 colSingle">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	<?php for ($i = 0; $i < sizeof($chatImage); $i++) : 
		  					if ($i == 0):?>
		    					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  					<?php else :?>
		    					<li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
		  	<?php endif; endfor; ?>
			</ol>
		  <div class="carousel-inner">
		  	<?php for ($i = 0; $i < sizeof($chatImage); $i++) : 
		  					if ($i == 0):?>
		    					<div class="item active">
							    	<div class="imageSingle" style="background-image: url(<?php echo ($chatImage[0]['url']); ?>)"></div>
							    </div>
		  					<?php else :?>
		    					<div class="item">
							    	<div class="imageSingle" style="background-image: url(<?php echo ($chatImage[$i]['url']); ?>)"></div>
							    </div>
		  	<?php endif; endfor; ?>
		  </div>
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Suivant</span>
		  </a>
		</div>
		</div>
		<div class="col-md-6 col-xs-12 colSingle textChat">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<p>Age: <?php echo $age ;?> mois</p>
					<p>Couleur: <?php echo $couleur ;?></p>
					<p>Sexe: <?php echo $sexe ;?></p>
					<p>Race: <?php echo $race ;?></p>
				</div>
				<div class="col-md-6 col-xs-6 divPrice">
					<p class="price" ><?php echo $prix ;?><span> €</span></p>
					<a href="/contact" class="btn btn-primary">Me contacter</a><br>
					<a href="/contact" class="phoneNumber"><span class="glyphicon glyphicon-earphone"></span> -------------- </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 25px;">
					<p><?php echo $chatTexte ;?></p>
				</div>
			</div>
		</div>
	</div>
		<?php };
		wp_reset_query();
		?>
</div>
<?php get_footer();?>