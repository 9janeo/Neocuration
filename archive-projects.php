<?php 
/*Template Name: Projects Template
 */
get_header(); ?>
    <!-- archive-projects.php [Neouration Template] -->
	<div role="main" class="wrapper post whitebg">
	    <?php
			$mypost = array( 'post_type' => 'projects', );
			$loop = new WP_Query( $mypost );
		?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>					
            <article class="projectCanvas" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            	<div class="projectShowcase">
                    <header class="entry-header">
                        <!-- Display Link, Project Title and Excerpt/Description -->
                        <strong><a href = '<?php the_permalink(); ?>'><?php the_title(); ?></a></strong><br />
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'project_type', true ) ); ?>
                        <br />
                        <!-- Display Project Featured Image -->
                        <div class="canvasThumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </header>
                    <!-- Display the project description text-->
                    <div class="entry-content">
                       <?php the_excerpt(); ?>
                    </div>
				</div><!-- Close projectShowcase -->
            </article>
		<?php endwhile; ?>
        <!--div class="navigation">
            <?php // posts_nav_link(); ?>            
        </div -->
	</div>			
	
    <?php // get_sidebar(); ?>        
<?php get_footer(); ?>
