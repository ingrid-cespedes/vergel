<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta name="viewport" content="initial-scale=1">
	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), esc_html( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), esc_html( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.icon" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/png"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/nhpup_1.1.js"></script>
</head>

<body class="<?php sandbox_body_class() ?>">

	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-51061031-1', 'vergel439.cl');
		ga('send', 'pageview');
	</script>

	<header>
	  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	    	<span class='cabecera visible-xs'><?php bloginfo('name'); ?></span>
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsible">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-vergel.png"></img></a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->

		<?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse pull-left',
        		'container_id'      => 'collapsible',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

		<?php if (is_page('home')) { echo "current_page_item"; }?>
			
	    <!-- <form class="navbar-form navbar-left" role="search"></form> -->
		<div class='pull-right collapse navbar-collapse'>
			<?php global $current_user; get_currentuserinfo(); if (is_user_logged_in () ) { ?>
			
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $current_user->display_name; ?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php echo '<li><a href="'.esc_url( get_permalink( get_page_by_title( __("Editar perfil", "vergel")))).'">Editar perfil</a></li>';	?>				
								<?php echo '<li><a href="'.wp_logout_url( home_url() ).'">Salir</a></li>'; ?>
							</ul>
					</li>
				</ul>

			<?php } else { ?>	
			
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Iniciar sesión/Registro<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php echo '<li><a href="'.esc_url( get_permalink( get_page_by_title( __("Regístrate", "vergel")))).'">Regístrate</a></li>';	?>				
								<?php echo '<li><a href="'.esc_url( get_permalink( get_page_by_title( __("Iniciar sesión", "vergel")))).'">Iniciar sesión</a></li>';	?>				
							</ul>
					</li>
				</ul>
				
			<?php }	?>
	    </div>

	  </div><!-- /.container-fluid -->
	  </nav>
	</header>