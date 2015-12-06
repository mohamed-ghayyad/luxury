<?php 
update_option('siteurl','http://modydev.club');
update_option('home','http://modydev.club');
if ( ! isset( $content_width ) ) $content_width = 900;

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="callout small animated bounceInRight widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

function custom_theme_setup() {
add_theme_support( 'automatic-feed-links' );
add_theme_support( "post-thumbnails" );
add_theme_support( "title-tag" );
add_theme_support( "custom-header", $args );
add_theme_support( "custom-background", $args ) ;
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
function luxury_callback( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
 
    ?>
        <article id="comment-<?php comment_ID(); ?>" class="comment">
	<div class="comment-author"><a class="th" href="#"><?php echo get_avatar( $comment, 40 ); ?> </a><?php comment_author_link();?> </div>
	<div class="dialogbox">
	<div class="body">
	<span class="tip tip-up"></span>
	<div class="message">
            <div class="comment-content"><?php comment_text(); ?></div>
	    </div>
	       <div class="reply">
                 <small><i class="fa fa-calendar"></i> <?php comment_time('j F Y '); echo '@'; comment_time(' g:i a'); echo ' |  ';?> </small><?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
               </div>
	    </div>
	           </div>    
        </article>
    
    <?php
}
function my_search_form( $form ) {
	$form = '<form method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div class="row">
	<div class="large-12 small-12 columns">
        <div class="input-group">
	<input type="text" value="' . get_search_query() . '" name="s" placeholder="Search" class="input-group-field"/>
	<span class="input-group-label primary"><i class="fa fa-search"></i></span>
</div></div></div></form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );



/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @uses	get_bloginfo()
 * @uses	is_home()
 * @uses	is_front_page()
 */




function tags_after_single_post_content($content) {

if( is_singular('post') && is_main_query() ) {

    }
return $content;
}
add_filter( 'the_content', 'tags_after_single_post_content' );




?>
