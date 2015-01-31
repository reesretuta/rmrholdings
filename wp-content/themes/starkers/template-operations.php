<?php
/* Template Name: Operations */

get_header();

?>

<?php get_template_part( 'operations', 'sidebar' ); ?>

<section ui-view>
    <div id="industry" class="ng-scope">
      <!-- <h1>Operational Expertise</h1> -->
      <div id="hero-wrap">
        <img class="imageFrame" src="<?= bloginfo('template_url') ?>/images/industries/hero.jpg" />
        <!-- <div id="hero-text">
          <div>Operations.  It's what we do.</div>
          <span>these are the industries we excel in</span>
        </div> -->
      </div>
      
    </div>
</section>
<?php
get_footer();
?>