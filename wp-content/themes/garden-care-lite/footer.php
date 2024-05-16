<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Garden Care Lite
 */
?>
<div id="footer">
<?php if ( is_active_sidebar( 'fc-1-gcl' ) || is_active_sidebar( 'fc-2-gcl' ) || is_active_sidebar( 'fc-3-gcl' ) ) : ?>
<div class="footerarea">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1-gcl' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1-gcl' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2-gcl' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2-gcl' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3-gcl' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3-gcl' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 	
            <div class="clear"></div>
            </div>
        </div><!--end .container--> 
</div>
<?php endif; ?> 
<div class="copyright-area">
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php if (!empty($footer_text)) { ?>
	 		<?php echo esc_html($footer_text); ?>
		<?php } ?>
        <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','garden-care-lite');?>
        <?php if( is_home() || is_front_page()) {?>
        <br/><a href="<?php echo esc_url('https://www.sktthemes.org/');?>" target="_blank"><?php esc_html_e('SKT Themes','garden-care-lite'); ?></a>
        <?php } else { ?>
        <br/><?php esc_html_e('SKT Themes','garden-care-lite'); ?>
        <?php } ?>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
</div>
<?php wp_footer(); ?>
</body>
</html>