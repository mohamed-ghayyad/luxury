
<?php get_header(); ?>
<div class="callout large bg">
<div class="row column text-center">
<h1 style="color:white;"><?php bloginfo('name'); ?></h1>
</div>
</div>
<div class="row" id="content">

	<div class="small-9 medium-9 columns">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog-post callout large animated bounceInLeft">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<small><i class="fa fa-calendar"></i> Published on <?php the_time('j F Y'); ?> By <i class="fa fa-user"></i> <?php the_author(); ?> - <a href="<?php comments_link(); ?>"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></a></small>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="humb text-center">
<img src="<?php echo $image[0]; ?>" width="100%"/>
</div>
<?php endif; ?>
<?php the_content(); ?>

<hr/>
    <?php
    echo 'filed under : ';
foreach((get_the_category()) as $category) {
    echo '<a href="' . get_category_link( $category->cat_ID  ) . '">' . $category->cat_name . '</a> ';
}
the_tags( ' <i class="fa fa-tags"></i> tagged with: ', ', ', '' ); 

?>  
</div>

    <?php endwhile; else: ?>
      <p><?php echo 'We are sorry but there is no posts yet.'; ?></p>
    <?php endif; ?>
 </div>

 
  
<div class="medium-3 columns " data-sticky-container>
<div class="sticky" data-sticky data-anchor="content">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<div class="row column">
<ul class="pagination" aria-label="Pagination">
<?php
$pagination = get_the_posts_pagination( array(
    'mid_size' => 2,
    'screen_reader_text' => 'A',
) );
$pagination = str_replace('<h2 class="screen-reader-text">A</h2>', '', $pagination);
$pagination = str_replace('<nav class="navigation pagination" role="navigation">',"",$pagination);
$pagination = str_replace('</nav>',"",$pagination);
$pagination = str_replace('<div class="nav-links"><span class=\'page-numbers current\'>','<li class="current">',$pagination);
$pagination = str_replace('</span>','</li>',$pagination);
$pagination = str_replace('</div>','',$pagination);
$pagination = str_replace('<a','<li><a',$pagination);
$pagination = str_replace('</a>','</a></li>',$pagination);
echo $pagination;
?>
<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
</ul>
</div>
<?php get_footer(); ?>


