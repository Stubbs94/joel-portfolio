<?php $g_settings = get_option('g_settings'); ?>
<?php get_header(); ?>
			
			<div class="wrapper">
											
				<section id="portfolio" >
				
				<header>
					<div class="intro">
						<h2><?php echo $g_settings['intro_headline']; ?></h2>
						<p class="sub-heading"><?php echo $g_settings['intro_subheading']; ?></p>
					</div>
					
					
					<div class="availability-box">
						<p>I am currently:</p>
						<?php if ($g_settings['available'] == 'Yes') { ?>
							<div class="available">Available for hire</div>
							<a href="mailto:<?php echo $g_settings['contact_email']; ?>" class="available-button">Contact Me</a>
						<?php } else { ?>
							<div class="available">Available for hire</div>
							<!-- <a href="mailto:<?php echo $g_settings['contact_email']; ?>" class="not-available-button">Contact Me</a> -->
						<?php } ?>
					</div>
					<br class="clear" />
				</header>
				
				<div class="hr"></div>
												
				<div class="wrapper">
						
						<h3>Recent Work</h3>
						
						<ul id="portfolio-filter" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
							<li><a href="#all">All</a></li>
							<?php $terms = get_terms("portfolio-categories");
							 $count = count($terms);
							 if ( $count > 0 ){
							     foreach ( $terms as $term ) {
							       echo "<li><a href='#$term->slug'>" . $term->name . "</a></li>";
							        
							     }
							 }?>
						</ul>
						
						<div class="clear"></div>
												
						
						<ul id="portfolio-list">
	
					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 100 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
												
						
					<li id="portfolio-<?php the_ID(); ?>" class="<?php $terms = get_the_terms( $post->ID , 'portfolio-categories' ); foreach( $terms as $term ) { print $term->slug . ' '; unset($term); } ?>">

						<section class="portfolio-image">
								<a href="<?php
							//Get the Thumbnail URL
							$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', true, '' );
							echo $src[0];
							?>"  rel="gallery"  class="pirobox_gall viewLink" title="<?php the_title()?>">
							<?php the_post_thumbnail('portfolio-image', array( 'alt' => get_the_title(), 'class' =>"cover", 'title' => get_the_title() . "" . get_the_excerpt() . "")); ?></a><br/>
						</section>
						
						<div class="description">
							<h4><?php the_title() ?></h4>
							<p><?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,15);
							?></p>
						</div><div class="description-shadow"></div>
						
					</li>
					<?php endwhile; ?>	
					</ul>

				<br class="clear" />
				</div>
				
				</section>
				
				<br class="clear"/>
				
				<article class="promo-blurb">
					<h3><?php echo $g_settings['actiontitle']; ?></h3>
					<p><?php echo $g_settings['actiondesc']; ?></p>
					
					<a href="<?php echo $g_settings['actionurl']; ?>" target="_blank" class="btn-promo"><?php echo $g_settings['actiontext']; ?></a>
					<div class="clear"></div>
				</article>
				
			</div><!-- end .wrapper -->
			

<?php get_footer(); ?>