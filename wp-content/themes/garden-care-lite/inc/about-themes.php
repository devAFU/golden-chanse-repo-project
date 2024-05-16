<?php
//about theme info
add_action( 'admin_menu', 'garden_care_lite_abouttheme' );
function garden_care_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'garden-care-lite'), esc_html__('About Theme', 'garden-care-lite'), 'edit_theme_options', 'garden_care_lite_guide', 'garden_care_lite_mostrar_guide');   
} 
//guidline for about theme
function garden_care_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'garden-care-lite'); ?>
		   </div>
          <p><?php esc_html_e('Garden Care Lite WordPress theme is flexible and scalable built using Elementor. Can be used for Planting, horticulture, cultivation, landscaping, farming, tending, nurturing, sowing, seeding, growing, greening, floriculture, botanizing, agrology, arboriculture, floristry, rake & shovel, Gloves, Pruning shears, Watering Can, Wheelbarrow, Garden Fork, Saws, Weeders, Hedge Shears, Loppers, Garden Hose, Watering Wand, cutting stems, plant nurseries, gardening enthusiasts. Can be used for online shopping, eCommerce, plant store and gardening tips. Local business hours, location, call to action, contact booking and forms support.','garden-care-lite'); ?></p>
          <a href="<?php echo esc_url(GARDEN_CARE_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(GARDEN_CARE_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'garden-care-lite'); ?></a> | 
				<a href="<?php echo esc_url(GARDEN_CARE_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'garden-care-lite'); ?></a> | 
				<a href="<?php echo esc_url(GARDEN_CARE_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'garden-care-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(GARDEN_CARE_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>