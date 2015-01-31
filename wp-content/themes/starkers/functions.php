<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
    
    
    
    
    
    
    
    
    add_action( 'init', 'create_post_type' );
    function create_post_type() {
        
        
        
        
        
    	//add the team members
    	register_post_type( 'rmr_teammate',
    		array(
    			'labels' => array(
    				'name' => __( 'Team' ),
    				'singular_name' => __( 'Person' ),
    				'add_new_item' => __( 'New Person' ),
    				'edit_item' => __( 'Edit Person' ),
    				'new_item' => __( 'New Person' ),
    				'new_item' => __( 'View Person' ),
    			),
    			'menu_position' => 21,
    			'public' => true,
    		    'capability_type' => 'post',
    		    'exclude_from_search' => true,
    			'rewrite' => array('slug' => 'team'),
    			'supports' => array( 'title','editor', 'thumbnail', 'excerpt','page-attributes')
    	));
        
        
        
    	//add the team members
    	register_post_type( 'rmr_operations',
    		array(
    			'labels' => array(
    				'name' => __( 'Operations' ),
    				'singular_name' => __( 'Operation' ),
    				'add_new_item' => __( 'New Operation' ),
    				'edit_item' => __( 'Edit Operation' ),
    				'new_item' => __( 'New Operation' ),
    				'new_item' => __( 'View Operation' ),
    			),
    			'menu_position' => 21,
    			'public' => true,
    		    'capability_type' => 'post',
    		    'exclude_from_search' => true,
    			'rewrite' => array('slug' => 'operations'),
    			'supports' => array( 'title','editor', 'thumbnail', 'excerpt','page-attributes')
    	));
        
        
        
        
    }