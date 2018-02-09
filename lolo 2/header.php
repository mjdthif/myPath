<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width = device-width, initial-scale=1" >
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<!-- Site-header -->
	<header class="site-header " >
 
	 
		<h1 class="main-title">
		
			<?php
            $attachment_id = 64; // attachment ID

                $image_attributes = wp_get_attachment_image_src( $attachment_id, 'full' ); // returns an array
                if( $image_attributes ) {
                    ?>
				
				<?php } ?>
				<a href="<?php echo home_url(); ?>">
					<img id="logo-mj"  src="http://localhost:8888/Demo1/wp-content/uploads/2018/01/logo.jojo_.mj-ulvis.png"
					width="170px"  height="90px"  alt="ULVIS"  />
				</a>
		</h1>
		
   
 

		<!-- Site-Navigation -->
		<nav class="site-nav group">

			<?php
                    $args = array('theme_location' => 'main_menu');
                ?>

				<?php wp_nav_menu($args); ?>
		</nav>
		
		
		
		
		
	</header>
