<?php
/*
Template Name: Feature
*/
?>

	<?php global $post; $headoption = get_post_meta( $post->ID, '_kad_page_head', true ); 
				if ($headoption == 'flex') {
					get_template_part('templates/flex', 'slider');
				}
				else if ($headoption == 'carousel') {
					get_template_part('templates/carousel', 'slider');
				}
				else if ($headoption == 'rev') {
					get_template_part('templates/rev', 'slider');
				}
				else if ($headoption == 'video') {
					?>
					 <section class="postfeat container">
				          <div class="videofit">
				              <?php global $post; $video = get_post_meta( $post->ID, '_kad_post_video', true ); echo $video; ?>
				          </div>
				        </section>
					<?php 
				}
				else if ($headoption == 'image') {
                global $post; $height = get_post_meta( $post->ID, '_kad_posthead_height', true ); if (!empty($height)) $slideheight = $height; else $slideheight = 400; 
                          $swidth = get_post_meta( $post->ID, '_kad_posthead_width', true ); if (!empty($swidth)) $slidewidth = $swidth; else $slidewidth = 1170;             
                    $thumb = get_post_thumbnail_id();
                    $img_url = wp_get_attachment_url( $thumb,'full' ); 
                    $image = aq_resize( $img_url, $slidewidth, $slideheight, true ); //resize & crop the image
                    ?>
                    <?php if($image == "") { $image = $img_url; } ?>
                      <div class="container"><div class="imghoverclass img-margin-center"><a href="<?php echo $img_url ?>" rel="lightbox[pp_gal]" class="lightboxhover"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a></div></div>
                    <?php
				}
		?>

	<div id="pageheader" class="titleclass">
		<div class="container">
			<?php get_template_part('templates/page', 'header'); ?>
		</div><!--container-->
	</div><!--titleclass-->
	
    <div id="content" class="container">
   		<div class="row">
     		<div class="main <?php echo kadence_main_class(); ?>" role="main">
				<?php get_template_part('templates/content', 'page'); ?>
			</div><!-- /.main -->