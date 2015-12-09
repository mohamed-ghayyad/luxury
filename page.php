
<?php get_header(); ?>
<div class="callout small bg">
<div class="row column text-center">
<h1 style="color:white;"><?php bloginfo('name'); ?></h1>
</div>
</div>
<div class="row column" id="content">


<div class="small-9 large-9 columns">
            <div class="blog-post callout large animated bounceInLeft" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( have_posts() ) { 
	while ( have_posts() ){ 
	  the_post(); 	
	  ?>
<br/>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="humb text-center">
<img src="<?php echo $image[0]; ?>" width="100%" />
</div>
<?php endif; ?>
	  <?php
	 the_content();
//	 echo '<hr>';
//	 the_tags( ' <i class="fa fa-tags"></i> tagged with: ', ', ', '' ); 
//comments_template(); 
    }}
    ?>
</div>

</div>
	

<div class="small-3 large-3 columns" data-sticky-container>
<div class="sticky" data-sticky data-anchor="content">
<?php get_sidebar(); ?>
</div>
</div>

<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
 </div>
<?php get_footer(); ?>
