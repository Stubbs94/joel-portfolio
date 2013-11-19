<?php 

// Register new options/settings
add_action('admin_init', 'g_theme_settings_init' );

function g_theme_settings_init(){
	register_setting( 'g_theme_settings', 'g_settings', 'g_no_html');
}

function g_no_html($input) {
	$input = $input;
	$input['facebook_link'] = mysql_real_escape_string($input['facebook_link']);
	$input['twitter_link'] = mysql_real_escape_string($input['twitter_link']);
	$input['linkedin_link'] = mysql_real_escape_string($input['linkedin_link']);
	$input['pinterest_link'] = mysql_real_escape_string($input['pinterest_link']);
	$input['dribble_link'] = mysql_real_escape_string($input['dribble_link']);
	return $input; // return validated input
}

function g_theme_settings(){
?>

<style>label{
	font-weight: bold;
}</style>
<div class="wrap">
	<div id="icon-themes" class="icon32"><br /></div>
	<h2>Solio Theme Settings</h2>
	
<form method="post" action="options.php">
	<?php settings_fields('g_theme_settings'); ?>
	<?php $options = get_option('g_settings'); ?>
	<?php $tcmcount = 1 ; ?>
	
	<br/>
			
<h2>Introduction Text</h2>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<td><strong>Large Headline <em>(80 Chars)</em> </strong><br/>
				<textarea id="textarea" cols="82" rows="2" maxlength="80"  name="g_settings[intro_headline]" ><?php echo $options['intro_headline']; ?></textarea></td>
			</tr>
			<tr valign="top">
				<td><strong>Subheading <em>(240 Chars)</em> </strong><br/>
				<textarea id="textarea" cols="82" rows="3" maxlength="240"  name="g_settings[intro_subheading]" ><?php echo $options['intro_subheading']; ?></textarea></td>
			</tr>
		</tbody>
	</table><br/>
	
<h2>Availability</h2>
	<table class="form-table">
		<tbody>
			<tr>
				<td width="220"><strong>Are you currently available for hire?</strong></td>
				<td>
					<input type="radio" name="g_settings[available]" value="Yes" <?php if ($options['available'] == 'Yes') {?> checked="checked"<?php } ?>/> &nbsp;Yes &nbsp;&nbsp;
					<input type="radio" name="g_settings[available]" value="No" <?php if ($options['available'] == 'No') {?> checked="checked"<?php } ?>/> &nbsp;No</td>
			</tr>
			<tr>
				<td><strong>Your Contact Email</strong></td>
				<td><input type="text" size="50" name="g_settings[contact_email]" value="<?php echo $options['contact_email']; ?>" ></td>
			</tr>
			</tr>
		</tbody>
	</table><br/>
			
<h2>Action Button</h2>
	<table class="form-table">
		<tbody>
			
			<tr valign="top">
			<td width="220"><strong>Action Title:</strong></td>
			<td><input type="text" class="textsmall" name="g_settings[actiontitle]" size="50" value="<?php echo $options['actiontitle']; ?>" /></td>
			</tr>
			
			<tr valign="top">
				<td><strong>Action Description:</strong></td>
				<td><input type="text" class="textsmall" name="g_settings[actiondesc]" size="50" value="<?php echo $options['actiondesc']; ?>" /></td>
			</td>
			</tr>
			
			<tr valign="top">
				<td><strong>Action Button URL:</strong></td>
				<td><input type="text" class="textsmall" name="g_settings[actionurl]" size="50" value="<?php echo $options['actionurl']; ?>" /></td>
			</tr>

			<tr valign="top">
				<td><strong>Action Button Text:</strong></td>
				<td><input type="text" class="textsmall" name="g_settings[actiontext]" size="50" value="<?php echo $options['actiontext']; ?>" /></td>
			</tr>
			
		</tbody>
	</table><br/>
			
<h2>Social Media</h2>
	<table class="form-table">
		<tbody>
			<tr><td colspan="2"><p>Fill in the link to any social media accounts you'd like to appear in the header of your site. Leave them black to not include them.</p></td></tr>
			<tr><td width="220"><strong>Facebook</strong></td><td><input type="text" name="g_settings[facebook_link]" size="50" value="<?php echo $options['facebook_link'];?>" /></td></tr>
			<tr><td><strong>Twitter</strong></td><td><input type="text" name="g_settings[twitter_link]" size="50" value="<?php echo $options['twitter_link'];?>" /></td></tr>
			<tr><td><strong>LinkedIn</strong></td><td><input type="text" name="g_settings[linkedin_link]" size="50" value="<?php echo $options['linkedin_link'];?>" /></td></tr>
			<tr><td><strong>Pinterest</strong></td><td><input type="text" name="g_settings[pinterest_link]" size="50" value="<?php echo $options['pinterest_link'];?>" /></td></tr>
			<tr><td><strong>Dribbble</strong></td><td><input type="text" name="g_settings[dribble_link]" size="50" value="<?php echo $options['dribble_link'];?>" /></td></tr>
		</tbody>
	</table><br/>
	
<h2>Other Options</h2>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<td><strong>Header Scripts/Code </strong><br/>
				<textarea id="textarea" cols="82" rows="6"  name="g_settings[headercode]" ><?php echo $options['headercode']; ?></textarea></td>
			</tr>
			<tr valign="top">
				<td><strong>Footer Scripts/Code </strong><br/>
				<textarea id="textarea" cols="82" rows="6"  name="g_settings[footercode]" ><?php echo $options['footercode']; ?></textarea></td>
			</tr>
		</tbody>
	</table><br/>


<p><input type="submit" name="search" value="Update Options" class="button" /></p>
</form>

<?php
}
?>