<?php get_header(); ?>
        <!-- home.php -->
        
        <div id="box">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            	
                <div class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>              
                    <div class="entry">                
                    	<?php the_content(); ?>
                        <p class="postmetadata">
							<?php // _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php // _e('by'); ?> <?php // the_author(); ?><br />
	                        <?php // comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
                        </p>          
                	</div>                
                </div><!-- End of Post -->
            
			<?php endwhile; ?>
            <!-- div class="navigation">
				<?php // posts_nav_link(); ?>            
            </div -->
            <?php endif; ?>            
            
        </div><!-- End of Box -->
        
       <?php //get_sidebar(); ?>
        
       <?php get_footer(); ?>

    
   