<!doctype html>
<html xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo( 'name' ); ?></title>
	<!--[if lt IE 9]>
		<script src="<?php bloginfo( 'template_url' ) ?>/js/jquery-migrate.js"></script>
		<script src="<?php bloginfo( 'template_url' ) ?>/js/html5-ie.js"></script>
	<![endif]-->
    
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
    	<div class="wrap">
            <a id="logo" href="#">The Brauxel Code</a>
            
            <nav>
                <ul id="main-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            
            <ul id="social-icons">
                <li class="twitter"><a href="#">Twitter</a></li>
                <li class="facebook"><a href="#">Facebook</a></li>
            </ul>

            <a href="#" class="scrollToTop">Back To Top</a>
            
            <div class="clear"></div>
        <!-- div.wrap ENDS -->
        </div>
    </header>
