 <div class="sidebar">

            <ul>
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
            
				<?php wp_list_pages('depth2&title_li=<h2>Pages</h2>'); ?>
                
                <li><h2><?php _e('Categories'); ?></h2>                
                    <ul>                
                        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>                
                    </ul>                
                </li>                
                <li><h2><?php _e('Archives'); ?></h2>                
                    <ul>                    
                    	<?php wp_get_archives('type=monthly'); ?>                    
                    </ul>                
                </li>
                
                <?php get_links_list(); ?>
            	
            <?php endif; ?>
            </ul>
        <div class="clear"></div>
</div><!-- End of Sidebar -->