<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://thebrauxelcode.com/
 * @since      1.0.0
 *
 * @package    Social_Media_Stream
 * @subpackage Social_Media_Stream/public/partials
 */
?>


<?php
	/**
	 * Create an array for facebook feed from the open graph API
	 *
	 * @since    1.0.0
	 */
	function facebook_feed_rendered() {
		$pageUrl = 'https://graph.facebook.com/v2.7/nextminingboom?key=value&access_token=1803640773184106|7ed56bf876ba8aeaa2bcc2fae92f3afb&fields=id,link,name';
				  
		$graphUrl = 'https://graph.facebook.com/v2.3/finfeed/feed?key=value&access_token=1803640773184106|7ed56bf876ba8aeaa2bcc2fae92f3afb&fields=id,message,picture,link,name,description,type,icon,created_time,from,object_id,likes,comments&limit=10';
		
		// get page details
		$pageObject = file_get_contents($pageUrl);
		
		if ( $pageObject === false )
		{
			$pageObject = $this->dc_curl_get_contents($pageUrl);
		}
		
		
		$pageDetails  = json_decode($pageObject);
		$pageLink = isset($pageDetails->link) ? $pageDetails->link : '';
		$pageName = isset($pageDetails->name) ? $pageDetails->name : '';
		
		// get page feed
		$graphObject = file_get_contents($graphUrl);
		
		if ( $graphObject === false )
		{
			$graphObject = $this->dc_curl_get_contents($graphUrl);
		}
		
		$parsedJson  = json_decode($graphObject);
		$pagefeed = $parsedJson->data;
		$facebook_dets = array();
		$i = 0;
		foreach($pagefeed as $pageDetail):
			//print_r($pageDetail);
			$parts = parse_url($pageDetail->picture);
			parse_str($parts[query], $query);
			$facebook_dets[$i][link] = $pageDetail->link;
			$facebook_dets[$i][name] = $pageDetail->name;
			$facebook_dets[$i][pic] = $query['url'];
			$i++;
			//echo 'link:'.$pageDetail->link.'<br>name:'.$pageDetail->name.'<br>pic:'.$query['url'].'<br><br><br>';
		endforeach;
		
		return $facebook_dets;
	}
	
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