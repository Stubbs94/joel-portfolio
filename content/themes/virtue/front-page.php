 			
 			<?php  global $smof_data; ?>
			<?php if(isset($smof_data['mobile_slider'])) { 
				$mobile_slider = $smof_data['mobile_slider'];
			} else {
				$mobile_slider = '';
			}
			if(isset($smof_data['choose_slider'])) {
				$slider = $smof_data['choose_slider'];
			} else {
				$slider = 'mock_flex';
			}
			if(detect_mobile() && $mobile_slider == '1') {
		 		$slider = $smof_data['choose_mobile_slider'];
					 if ($slider == "flex") {
					get_template_part('templates/mobile_home/mobileflex', 'slider');
				}
				else if ($slider == "video") {
					get_template_part('templates/mobile_home/mobilevideo', 'block');
				} 
	} else { ?>
    		<?php if ($slider == "flex") {
					get_template_part('templates/home/flex', 'slider');
				}
				else if ($slider == "thumbs") {
					get_template_part('templates/home/thumb', 'slider');
				}
				else if ($slider == "fullwidth") {
					get_template_part('templates/home/fullwidth', 'slider');
				}
				else if ($slider == "video") {
					get_template_part('templates/home/video', 'block');
				}
				else if ($slider == "mock_flex") {
					get_template_part('templates/home/mock', 'flex');
				}
}?>
	
    <div id="content" class="container homepagecontent">
   		<div class="row">
          <div class="main <?php echo kadence_main_class(); ?>" role="main">

          	<div class="container">
				<h3>Hi there, my name is Joel Stubbs I'm a Web Designer & Front-end WordPress Developer. I am currently avalible for hire, feel free to contact me via the hire me page.</h3>

			<?php $g_settings = get_option('g_settings'); ?>
							
<!-- 			<div class="availability-box">
				<p>I am currently:</p>
				<?php if ($g_settings['available'] == 'Yes') { ?>
					<div class="available">Available for hire</div>
					<a href="mailto:<?php echo $g_settings['contact_email']; ?>" class="available-button">Contact Me</a>
				<?php } else { ?>
					<div class="available">Available for hire</div>
					<!-- <a href="mailto:<?php echo $g_settings['contact_email']; ?>" class="not-available-button">Contact Me</a> -->
				<?php } ?>
			</div> 

      	<?php if(isset($smof_data['homepage_layout'])) { $layout = $smof_data['homepage_layout']['enabled']; } else {$layout = array("block_one" => "block_one", "block_two" => "block_two"); }

				if ($layout):

				foreach ($layout as $key=>$value) {

				    switch($key) {

				    	case 'block_one':?>

								<?php get_template_part('templates/page', 'header'); ?>
								</div><!--container-->

							</div><!--titleclass-->
					    <?php 
					    break;
						case 'block_four': ?>
							<?php if(is_home()) { ?>
							<div class="homecontent postlist fullwidth clearfix home-margin"> 
							<?php while (have_posts()) : the_post(); ?>
							  <?php get_template_part('templates/content', 'fullwidth'); ?>
							<?php endwhile; ?>
							</div> 
						<?php } else { ?>
						<div class="homecontent clearfix home-margin"> 
							<?php get_template_part('templates/content', 'page'); ?>
						</div>
						<?php 	}
						break;
						case 'block_five':
								get_template_part('templates/home/blog', 'home'); 
						break;
						case 'block_six':
								get_template_part('templates/home/portfolio', 'carousel');		 
						break; 
						case 'block_seven':
								get_template_part('templates/home/icon', 'menu');		 
						break;  
					    }

}
endif; ?>   


</div><!-- /.main -->