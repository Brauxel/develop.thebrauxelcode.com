<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Brauxel Code</title>
    <link type="text/css" rel="stylesheet" href="css/thebrauxelcode.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/responsiveslides.js"></script>
	<script type="text/javascript" src="js/core.js"></script>
</head>
<body>
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
    
    <main id="home-page">
<?php
$fn = '/images/filler/1.jpg';
$headers = apache_request_headers();
if (isset($headers['If-Modified-Since']) && (strtotime($headers['If-Modified-Since']) == filemtime($fn))) {
	// Client's cache IS current, so we just respond '304 Not Modified'.
		header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 304);
	} else {
		// Image not cached or cache outdated, we respond '200 OK' and output the image.
		header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
		header('Content-Length: '.filesize($fn));
		header('Content-Type: image/jpg');
		print file_get_contents($fn);
}
?>
        <ul class="rslides">
            <li><img src="images/filler/1.jpg" alt="Banner" title="Banner"></li>
            <li><img src="images/filler/2.jpg" alt="Banner" title="Banner"></li>
            <li><img src="images/filler/3.jpg" alt="Banner" title="Banner"></li>
        <!-- div#slider ENDS -->
        </ul>
        
        <section class="featured-categories three-columns">
        	<div class="wrap">
                <article class="column">
                    <div class="border">
                        <h3>Wordpress</h3>
                        <img src="images/logos/wordpress-logo.png" alt="Wordpress" title="Wordpress" width="150">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mauris ut tortor posuere vulputate. Mauris congue ante sed nisl tempus bibendum. Vestibulum dictum nec lorem non dictum. Nulla ultrices enim a varius accumsan. Quisque lobortis tellus id elit ultrices, at tempor leo elementum. Nullam convallis pretium posuere. Vestibulum faucibus, nibh nec consectetur mattis, nisi enim ultrices felis, eu interdum sem odio a erat. Cras metus turpis, vulputate sit amet ligula a, efficitur ultrices nibh. Etiam suscipit nec nisl eu interdum.</p>
                        <a class="link-1" href="">Read More &#8594;</a>
                    <!-- div.border ENDS -->
                    </div>
                </article>
    
                <article class="column">
                    <div class="border">
                        <h3>Wordpress</h3>
                        <img src="images/logos/wordpress-logo.png" alt="Wordpress" title="Wordpress" width="150">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mauris ut tortor posuere vulputate. Mauris congue ante sed nisl tempus bibendum. Vestibulum dictum nec lorem non dictum. Nulla ultrices enim a varius accumsan. Quisque lobortis tellus id elit ultrices, at tempor leo elementum. Nullam convallis pretium posuere. Vestibulum faucibus, nibh nec consectetur mattis, nisi enim ultrices felis, eu interdum sem odio a erat. Cras metus turpis, vulputate sit amet ligula a, efficitur ultrices nibh. Etiam suscipit nec nisl eu interdum.</p>
                        <a class="link-1" href="">Read More &#8594;</a>
                    <!-- div.border ENDS -->
                    </div>
                </article>
    
                <article class="column">
                    <div class="border">
                        <h3>Wordpress</h3>
                        <img src="images/logos/wordpress-logo.png" alt="Wordpress" title="Wordpress" width="150">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mauris ut tortor posuere vulputate. Mauris congue ante sed nisl tempus bibendum. Vestibulum dictum nec lorem non dictum. Nulla ultrices enim a varius accumsan. Quisque lobortis tellus id elit ultrices, at tempor leo elementum. Nullam convallis pretium posuere. Vestibulum faucibus, nibh nec consectetur mattis, nisi enim ultrices felis, eu interdum sem odio a erat. Cras metus turpis, vulputate sit amet ligula a, efficitur ultrices nibh. Etiam suscipit nec nisl eu interdum.</p>
                        <a class="link-1" href="">Read More &#8594;</a>
                    <!-- div.border ENDS -->
                    </div>
                </article>
            <!-- div.wrap ENDS -->
			</div>
        <!-- section.featured-categories ENDS -->
        </section>
		
        <div class="contact-widget wrap">
        	<h2>Select the services</h2>
        	<ul class="five-columns">
            	<li class="column"><a href="#">Wordpress</a></li>
            	<li class="column"><a href="#">Magento</a></li>
            	<li class="column"><a href="#">Ruby</a></li>
            	<li class="column"><a href="#">Wordpress</a></li>
            	<li class="column"><a href="#">Wordpress</a></li>
            	<li class="column"><a href="#">Wordpress</a></li>
            	<li class="column"><a href="#">Magento</a></li>
            	<li class="column"><a href="#">Ruby</a></li>
            	<li class="column"><a href="#">Wordpress</a></li>
            	<li class="column"><a href="#">Wordpress</a></li>
            <!-- ul.wrap ENDS -->
            </ul>
        </div>
        
        <section class="featured-posts">
        	<div class="wrap">
             <!-- div.wrap ENDS -->
             </div>
        <!-- section.featured-posts ENDS -->
        </section>
    </main>
</body>
</html>