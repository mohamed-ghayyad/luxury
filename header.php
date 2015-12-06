<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<?php wp_enqueue_script("jquery"); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>
<?php wp_head(); ?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
 </head>
<body <?php body_class(); ?>>

<div class="top-bar">
<div class="row">
<div class="top-bar-left">
<ul class="menu">
<li ><a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><i class="fa fa-home"></i> <?php bloginfo( 'name' ); ?></a></li>
</ul>
</div>
<div class="top-bar-right">
<ul class="menu">
  <?php wp_list_pages(array('title_li' => '','sort_column'=>'post_date','sort_order'=>'DESC')); ?>
</ul>
</div>
</div>
</div>

        
