<?php get_header(); ?>
    <main>
        <div class="wrap">
            <h1><?php the_title(); ?></h1>
            <?php 
			$pageUrl = 'https://graph.facebook.com/v2.3/nextminingboom/feed?key=value&access_token=EAACEdEose0cBAPlJXyCkhLJt1XR29vuC4nfG81dFFrLMu5ZBup8nNrXf7WJu2BZCv8sZAUvzoz0aZAO78evr0ZAZCr4GuFXpGTMRmqE7LEP5cyLaLPnU5DkC9me9eGqNZAYmJ5hfAFvWDVi4ZAT2qtVGiuz6VLBZC4QVsH6IlchjE4wZDZD';
			$pageObject =  dc_curl_get_contents($pageUrl);
			$pageDetails  = json_decode($pageObject);
			?>
            <p><a target="_blank" href="https://graph.facebook.com/v2.3/nextminingboom/feed?key=value&access_token=EAACEdEose0cBAPlJXyCkhLJt1XR29vuC4nfG81dFFrLMu5ZBup8nNrXf7WJu2BZCv8sZAUvzoz0aZAO78evr0ZAZCr4GuFXpGTMRmqE7LEP5cyLaLPnU5DkC9me9eGqNZAYmJ5hfAFvWDVi4ZAT2qtVGiuz6VLBZC4QVsH6IlchjE4wZDZD">https://graph.facebook.com/v2.3/nextminingboom/feed?key=value&amp;access_token=EAACEdEose0cBAPlJXyCkhLJt1XR29vuC4nfG81dFFrLMu5ZBup8nNrXf7WJu2BZCv8sZAUvzoz0aZAO78evr0ZAZCr4GuFXpGTMRmqE7LEP5cyLaLPnU5DkC9me9eGqNZAYmJ5hfAFvWDVi4ZAT2qtVGiuz6VLBZC4QVsH6IlchjE4wZDZD</a><?php echo 't:'.$pageLink;	?></p>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <?php the_content(); ?>
            <?php endwhile; else: ?>
	            <p>No content!</p>
            <?php endif; ?>
        <!-- div.wrap ENDS -->
        </div>
    </main>
    <?php 
function dc_curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
	?>
<?php get_footer(); ?>