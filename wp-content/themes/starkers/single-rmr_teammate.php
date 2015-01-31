<?php get_header(); ?>
<div class="">
    
    <?php get_template_part( 'team', 'sidebar' ); ?>

  <section ui-view team-bio id="teamBios" autoscroll="false">

      <?php if (have_posts()) : while (have_posts()) : the_post();?>

        <? //retain content for the loop that will supercede it.

        $the_content = get_the_content(); 
        $the_content = apply_filters('the_content', $the_content);
        // $the_content = str_replace(']]>', ']]&gt;', $the_content);
        $the_excerpt = $post->post_excerpt;
        
    
 
        
        ?>

        
        
        <h1><?php the_title(); ?></h1>

        <div class="bio">
            <?php
            if (has_post_thumbnail( $post->ID )): 
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
            echo '<img ng-if="profileUrl" src="'.$image[0].'" class="imageFrame"/>';
            endif;
            ?>
        
        					<h3><?= $the_excerpt; ?></h3>
                  <p><?= $the_content; ?></p>
        </div>
        
	
	
      <?php endwhile; endif; ?>
    
    
  </section>

</div>

<?php
get_footer();
?>