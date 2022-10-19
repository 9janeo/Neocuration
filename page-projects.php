<?php
 /*Template Name: Single Project Template
 */

get_header(); ?>
<!-- Portfolio Projects [When do I even Use this?] -->
<div id="primary">
    <div role="main">
    <?php
    $mypost = array( 'post_type' => 'project', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
 
                <!-- Display featured image in right-aligned floating div -->
                <div style="float: left; margin: 10px">
                    <?php the_post_thumbnail( array( 300, 300 ) ); ?>
                </div>
 
                <!-- Display Title and Author Name -->
                <strong>Title: </strong><?php the_title(); ?><br />
                <strong>Type: </strong>
                <?php echo esc_html( get_post_meta( get_the_ID(), 'project_type', true ) ); ?>
                <br />
 
                <!-- Display yellow stars based on rating -->
                <strong> <!-- Status: --></strong>
            </header>
 
            <!-- Display movie review contentseesesese -->
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
 
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>