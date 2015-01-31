<?php
/* Template Name: Team */

get_header();

?>
<div class="">
        <?php get_template_part( 'team', 'sidebar' ); ?>
  <section ui-view team-bio id="teamBios" autoscroll="false">
    <!-- team-bio autoscroll="true" id="teamBios"  -->
    
      <div id="hero-wrap">
        <img class="imageFrame" src="<?php bloginfo('template_url') ?>/images/bio/Group.jpg" />
        <!-- <div id="hero-text">
          <div>We are the best of the best</div>
          <span>We will work with you to achieve your goals</span>
        </div> -->
      </div>
    
    
  </section>

</div>

<?php
get_footer();
?>