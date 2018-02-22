<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 * Template Name: Chats
 */

get_header();?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg1.jpg');"></div>
<div class="container contentPage">
  <div class="row text-center textChiensChats">
    <div class="col-md-8 col-md-offset-2">
      <?php while (have_posts()) {
      the_post();
      the_content();
      $malechatImage = get_field('image_chat_mâle');
      $malechatTexte = get_field('texte_chat_mâle');
      $malechatTexte = strlen($malechatTexte) > 100 ? substr($malechatTexte,0,100)."..." : $malechatTexte;
      $femellechatImage = get_field('image_chat_femelle');
      $femellechatTexte = get_field('texte_chat_femelle');
      $femellechatTexte = strlen($femellechatTexte) > 100 ? substr($femellechatTexte,0,100)."..." : $femellechatTexte;
      $bebechatImage = get_field('image_bebe_disponible');
      $bebechatTexte = get_field('texte_bebe_disponible');
      $bebechatTexte = strlen($bebechatTexte) > 100 ? substr($bebechatTexte,0,100)."..." : $bebechatTexte;
      };?>
      <div class="col-md-3 col-xs-12 colArchiveChat">
        <a href="<?php echo get_post_type_archive_link('chatsmale'); ?>">
          <div class="imageChat" style="background-image: url(<?php echo ($malechatImage); ?>)">
            <div class="hover">
              <p><?php the_title() ?> mâle</p>
              <p><?php echo $malechatTexte;?></p>
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
        <a href="<?php echo get_post_type_archive_link('chatsfemelle'); ?>">
          <div class="imageChat" style="background-image: url(<?php echo ($femellechatImage); ?>)">
            <div class="hover">
              <p><?php the_title() ?> femelle</p>
              <p><?php echo $femellechatTexte;?></p>
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
        <a href="<?php echo get_post_type_archive_link('bebechats'); ?>">
          <div class="imageChat" style="background-image: url(<?php echo ($bebechatImage); ?>)">
            <div class="hover">
              <p>Bébé disponible</p>
              <p><?php echo $bebechatTexte;?></p>
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