<?php
/**
 * The template for displaying the footer.
 *
 * @package BestCorporate
 * @since BestCorporate 2.2
 */
?>
</div>
<!-- #main -->

<footer id="colophon" role="contentinfo">
  <div id="gotop"><a href="#branding">
    <?php _e('TOP OF PAGE', 'bestcorporate');?>
    </a></div>
  <div id="site-generator">
    <?php _e('Powered by', 'bestcorporate');?>
    <a href="<?php echo esc_url(__('http://wordpress.org', 'bestcorporate')); ?>" title="<?php esc_attr_e('WordPress', 'bestcorporate'); ?>">
    <?php _e('WordPress', 'bestcorporate'); ?>
    </a> and <a href="<?php echo esc_url(__('http://renniaofei.com/freebies/bestcorporate/', 'bestcorporate')); ?>" title="<?php esc_attr_e('Best Corporate Theme', 'bestcorporate'); ?>" target="_blank">
    <?php _e('Best Corporate Theme', 'bestcorporate'); ?>
    </a></div>
</footer>
<!-- #colophon -->
</div>
<!-- #page -->
<?php wp_footer(); ?>
</body></html>