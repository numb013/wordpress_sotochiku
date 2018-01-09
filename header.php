<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ultrabootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php $header_text_color = get_header_textcolor();?>
<header role="banner" id="fh5co-header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container" style="width: 100%">
		<div class="navbar-header">
			<!-- Mobile Toggle Menu Button -->
			<a href="index.html" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<h1 class="navbar-brand" style="color:<?php echo "#". $header_text_color;?>"><?php echo bloginfo( 'name' ); ?></h1>
			</a>  
		</div>
		<div id="navbar" class="navbar-collapse collapse">
<!-- 			<ul class="nav navbar-nav navbar-right">
				<li><a href="about.html"><span>About</span></a></li>
				<li><a href="business.html"><span>Business</span></a></li>
				<li><a href="works.html"><span>Works</span></a></li>
				<li><a href="material.html"><span>Material</span></a></li>
				<li><a href="providing.html"><span>Providing</span></a></li>
				<li><a href="contact.html"><span>Contact</span></a></li>
				<li><a href="toukou.html"><span>素材提供</span></a></li>
			</ul> -->

			<?php
				wp_nav_menu( array(
					'menu_class' => 'nav navbar-nav navbar-right'
				) );
			?>

		</div>
	</div> <!-- /.end of container -->
	</nav>
</header>