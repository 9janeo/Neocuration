<?php
/*
Single Project Template: [Template to Display Single Portfolio Projects]
Description: This part is optional, but helpful for describing the Post Template

*/
 

get_header(); ?>
<!-- Single Portfolio Project [NeoCuration theme] -->
<div id="box">
  <div id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <article class="post"> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">            	
                             
        </header>
        <a href = '<?php the_permalink(); ?>'>
        	<div class="projectHead">								
				    <div class="projectThumb">
					    <?php the_post_thumbnail( array(300, 300) ); ?>
            </div>
            <div class="projectTitle"><h2><?php the_title(); ?></h2></div>
          </div>
        </a>			
        <br /> 
        <!-- Display movie review contents -->
        <div id="box" class="entry-content content-area"><?php the_content(); ?></div>
      </article> 
    <?php endwhile; ?>
      
    <?php endif; ?>
    <article class="navigation">
      <span class="prev-link"><?php previous_post_link('<< %link') ?></span>
      <span class="next-link"><?php next_post_link(' %link >>') ?></span>           
    </article>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>