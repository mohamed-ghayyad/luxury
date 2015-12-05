<?php
get_header(); ?>
<div class="callout small  bg primary">
<div class="row column text-center">
<h1 style="color:white;"><?php bloginfo('name'); ?></h1>
</div>
</div>
<div class="row column" id="content">
<div class="medium-9 columns">
		<?php if ( have_posts() ) { ?>



          
			<?php
			// Start the Loop.
			while ( have_posts() ) {

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
// 				 */
	        echo '<div class="blog-post callout large">';
	        echo '<h3><a href="';
	         the_post();
	       the_permalink();
	  echo ' "> ' ;
	  the_title();
	  echo '</a></h3>';
				the_content();
				echo ' <hr/>';
				echo ' <small><i class="fa fa-calendar"></i> Published on ';
				the_time('j F Y , '); 
				the_time('g:i a');
				echo ' by ';
				the_author();
				echo '</small></div>';}
}
		?>

</div>
<div class="medium-3 columns" data-sticky-container>
<div class="sticky" data-sticky data-anchor="content">
<?php get_sidebar(); ?>
</div>
</div>
</div>
 
<?php get_footer(); ?>
