<?php
 /*Template Name: Contact Template
 */

get_header(); ?>
<!-- Portfolio Contacts -->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="wrapper post whitebg">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>              
			<div class="entry">                
				<?php the_content(); ?>
				<p class="postmetadata">
					<?php // _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php // _e('by'); ?> <?php // the_author(); ?><br />
					<?php // comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>          
			</div>			
		</div><!-- End of Post -->
		<div class="wrapper post">	
			<h2>Social Media Platforms</h2>
			<div class="smCanvas">
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				<div id="twitter-timeline" class="smCanvasThumb twitter">			
					<a class="twitter-timeline" data-width="300" data-height="300" data-theme="light" href="https://twitter.com/niyi_adewole">
						Tweets by @niyi_adewole
					</a>
				</div>		
			</div>
			<div class="smCanvas">
				<div id="instagram" class="smCanvasThumb twitter">
					<?php echo do_shortcode('[ap_instagram_slider]'); ?>
					<a class="insta" href="https://www.instagram.com/neoadewole" target="blank">				
						Niyi on Instagram
					</a>
				</div>		
			</div>
		</div><!-- End of SM-post -->
	<?php endwhile; ?>
	<!-- div class="navigation">
		<?php // posts_nav_link(); ?>            
	</div -->
	<?php endif; ?>


<?php wp_reset_query(); ?>
<?php get_footer(); ?>