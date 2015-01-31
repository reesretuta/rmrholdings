<?php get_header(); ?>
<div class="">
    
    <?php get_template_part( 'operations', 'sidebar' ); ?>

  <section ui-view team-bio id="teamBios" autoscroll="false">

      <?php if (have_posts()) : while (have_posts()) : the_post();?>

        <? //retain content for the loop that will supercede it.

        $the_content = get_the_content(); 
        $the_content = apply_filters('the_content', $the_content);
        $the_content = str_replace(']]>', ']]&gt;', $the_content);

        $the_excerpt = $post->post_excerpt;

        if (has_post_thumbnail( $post->ID )): 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
        endif; 
        ?>
        
        
        
        
        <div id="industry">
          <div id="hero-wrap">
            <img src="<?= $image[0]; ?>" class="imageFrame"/>
          </div>
          <p>
        		<?php
        			echo $the_content;
        		?>
          </p>
        </div>
        



	
	
      <?php endwhile; endif; ?>
    
    
  </section>

</div>

<?php
get_footer();
?>