
<?php get_header(); ?>
<div class="callout small bg">
<div class="row column text-center">
<h1 style="color:white;"><?php bloginfo('name'); ?></h1>
</div>
</div>
<div class="row column" id="content">
<div class="medium-9 columns">
            <div class="blog-post callout large animated bounceInLeft" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( have_posts() ) { 
	while ( have_posts() ){ 
	  the_post(); 	
	  ?>
	  <small><i class="fa fa-calendar"></i> Published on <?php the_time('j F Y'); ?> By <i class="fa fa-user"></i> <?php the_author(); ?> - <a href="<?php comments_link(); ?>"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></a></small>
<?php
	 the_content();
	 echo '<hr>';
comments_template(); 
    }}
    ?>
</div>

</div>
	
<div class="medium-3 columns" data-sticky-container>
<div class="sticky" data-sticky data-anchor="content">
<?php get_sidebar(); ?>
</div>
</div>
<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
 </div>
<?php get_footer(); ?>
