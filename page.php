
<?php get_header(); ?>
<div class="callout small  bg primary">
<div class="row column text-center">
<h1 style="color:white;"><?php bloginfo('name'); ?></h1>
</div>
</div>
<div class="row column" id="content">
<div class="medium-9 columns">
            <div class="blog-post callout large animated bounceInLeft" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if ( have_posts() ) { 
	while ( have_posts() ){ 
	  the_post(); 	
	 the_content();
	
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
