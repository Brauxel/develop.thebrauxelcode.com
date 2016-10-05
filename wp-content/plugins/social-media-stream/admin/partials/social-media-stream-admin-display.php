<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://thebrauxelcode.com/
 * @since      1.0.0
 *
 * @package    Social_Media_Stream
 * @subpackage Social_Media_Stream/admin/partials

 * Render the HTML for Settings in the admin area.
 * @since    1.0.0
 
 */
?>

<?php
	// Create an instance of the plugin's admin class to access the functions
	$pluginAdmin = new Social_Media_Stream_Admin('social-media-stream', '1.0.0');
	
	// Begin updating the DB based on the values passed from the sms-general-settings form
	if ( isset($_POST['twit_gs']) ) {
		//print_r($_POST['twit_gs']);
		update_option('sms_twitter_gs', $_POST['twit_gs'], no);
	}
	if ( isset($_POST['fb_gs']) ) {
		update_option('sms_fb_gs', $_POST['fb_gs'], no);
	}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
	<div class="sms-general-settings">
        <h2>General Settings</h2>
        <h4>Social Network APIs &amp; Authentication</h4>
        <p>For step-by-step instructions on how to create your Twitter API settings please see plugin documentation section: Social Network APIs &amp; Authentication</p>
        <?php 
			$twit_gs = get_option( 'sms_twitter_gs' );
			$fb_gs = get_option( 'sms_fb_gs' );
		?>
    
        <form name="sms-general-settings" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        	<h4>Twitter API Credentials - Required For All Twitter Feeds</h4>
            <div class="field">
                <label for="tck">Consumer Key:</label>
                <input type="text" name="twit_gs[tck]" id="tck" class="input-text" placeholder="Please enter the consumer key" value="<?php if(isset($twit_gs['tck'])) echo $twit_gs['tck']; ?>" required>
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
        
            <div class="field">
                <label for="tcs">Consumer Secret:</label>
                <input type="text" name="twit_gs[tcs]" id="tcs" class="input-text" placeholder="Please enter the consumer secret" value="<?php if(isset($twit_gs['tcs'])) echo $twit_gs['tcs']; ?>" required>
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
            
            <div class="field">
                <label for="tak">OAuth Access Token:</label>
                <input type="text" name="twit_gs[tak]" id="tak" class="input-text" placeholder="Please enter the auth token" value="<?php if(isset($twit_gs['tak'])) echo $twit_gs['tak']; ?>" required>
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
        
            <div class="field">
                <label for="tas">OAuth Access Token Secret:</label>
                <input type="text" name="twit_gs[tas]" id="tas" class="input-text" placeholder="Please enter the auth secret" value="<?php if(isset($twit_gs['tas'])) echo $twit_gs['tas']; ?>" required>
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
    
            <h4>Facebook APP Details - Required For All Facebook Page Feeds</h4>
            <div class="field">
                <label for="fai">Facebook App ID:</label>
                <input type="text" name="fb_gs[fai]" id="fai" class="input-text" placeholder="Please enter the facebook ID" value="<?php if(isset($fb_gs['fai'])) echo $fb_gs['fai']; ?>" required>
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
    
            <div class="field">
                <label for="fas">Facebook App Secret:</label>
                <input type="text" name="fb_gs[fas]" id="fas" class="input-text" placeholder="Please enter the facebook secret" value="<?php if(isset($fb_gs['fas'])) echo $fb_gs['fas']; ?>" required>
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
            <?php submit_button( 'Save', 'button-primary', 'instigate-edit', false ); ?>
        </form>
    <!-- div.sms-general-settings ENDS -->
	</div>
    
    <div class="sms-streams">
        <h2>Social Streams</h2>
        
        <form>
            <h3>Twitter</h3>
            <div class="field">
                <label for="twid">Twitter username (no @):</label>
                <input type="text" name="twid" id="twid" class="input-text" placeholder="Please enter the twitter username without the @" value="">
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
    
            <h3>Facebook</h3>
            <div class="field">
                <label for="fbid">Facebook ID:</label>
                <input type="text" name="fbid" id="fbid" class="input-text" placeholder="Please enter the FB page ID" value="">
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
    
            <h3>Google +</h3>
            <div class="field">
                <label for="goid">Google ID:</label>
                <input type="text" name="goid" id="goid" class="input-text" placeholder="Please enter the google profile ID" value="">
                <div class="clear"></div>
            <!-- div.field ENDS -->
            </div>
            <?php submit_button( 'Save', 'button-primary', 'instigate-edit', false ); ?>
        </form>
        
        <h2>Existing Streams</h2>
    <!-- div.sms-streams ENDS -->
    </div>
<!-- div.wrap ENDS -->
</div>