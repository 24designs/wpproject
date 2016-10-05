<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fabthemes
 */

?>

<!-- Mapbox -->

<div id="home-map-section">

<?php echo ft_of_get_option('fabthemes_map','');?>
    <div class="row">
        <div class="column medium-6 small-12 ">
            <div class="info-box">
                <h3><?php _e('Working Hours:','fabthemes'); ?></h3>
				<?php echo ft_of_get_option('fabthemes_address','');?><br>
				<?php _e('Phone: ','fabthemes'); ?><?php echo ft_of_get_option('fabthemes_phone','');?> <br>

                <h3> <?php _e('We Are Available At -','fabthemes'); ?></h3>
				<?php echo ft_of_get_option('fabthemes_timing','');?>

            </div>
        </div>
    </div>
</div>

	</div><!-- #content -->

	<div id="footer-widgets">
		<div class="row">
			<?php dynamic_sidebar( 'footerbar' ); ?>
		</div>
	</div>
<footer id="colophon" class="site-footer" role="contentinfo">
<div class="row">
<div class="column medium-6">
<div class="site-info">
Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?></a>

<!--<?php bloginfo('description'); ?> <br>
<?php fflink(); ?> | <a href="http://fabthemes.com/<?php echo FT_scope::tool()->themeName ?>/" ><?php echo FT_scope::tool()->themeName ?> WordPress Theme</a>-->
    			</div><!-- .site-info -->
		    </div>
            <div class="column medium-6">
                    <div class="social-icons">
                        
                    </div>
            </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>