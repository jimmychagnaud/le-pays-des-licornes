<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 * Template Name: Chiens
 */

get_header();?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg2.jpg');"></div>
<div class="container contentPage">
  <div class="row text-center textChiensChats">
    <div class="col-md-8 col-md-offset-2">
      <?php while (have_posts()) {
      the_post();
      the_content();
      $malechienImage = get_field('image_chien_mâle');
      $malechienTexte = get_field('texte_chien_mâle');
      $malechienTexte = strlen($malechienTexte) > 100 ? substr($malechienTexte,0,100)."..." : $malechienTexte;
      $femellechienImage = get_field('image_chien_femelle');
      $femellechienTexte = get_field('texte_chien_femelle');
      $femellechienTexte = strlen($femellechienTexte) > 100 ? substr($femellechienTexte,0,100)."..." : $femellechienTexte;
      $bebechienImage = get_field('image_bebe_chien_disponible');
      $bebechienTexte = get_field('texte_bebe_chien_disponible');
      $bebechienTexte = strlen($bebechienTexte) > 100 ? substr($bebechienTexte,0,100)."..." : $bebechienTexte;
      };?>
      <div class="col-md-3 col-xs-12 colArchiveChat">
        <a href="<?php echo get_post_type_archive_link('chiensmale'); ?>">
          <div class="imageChat" style="background-image: url(<?php echo ($malechienImage); ?>)">
            <div class="hover">
              <p><?php the_title() ?> mâle</p>
              <p><?php echo $malechienTexte;?></p>
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
        <a href="<?php echo get_post_type_archive_link('chiensfemelle'); ?>">
          <div class="imageChat" style="background-image: url(<?php echo ($femellechienImage); ?>)">
            <div class="hover">
              <p><?php the_title() ?> femelle</p>
              <p><?php echo $femellechienTexte;?></p>
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
        <a href="<?php echo get_post_type_archive_link('bebechiens'); ?>">
          <div class="imageChat" style="background-image: url(<?php echo ($bebechienImage); ?>)">
            <div class="hover">
              <p>Bébé disponible</p>
              <p><?php echo $bebechienTexte;?></p>
            </div>
          </div>
          <div class="textChat">
            <div class="col-md-6 chatInfos">
              <h3>Bébé disponible</h3>
            </div>
          </div>
        </a>
      </div>
      <?php wp_reset_query();?>
    </div>
  </div>
</div>
<?php get_footer();?>