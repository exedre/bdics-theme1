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
  <div id="site-maker">
    <?php _e('Il nuovo sito dei seminari è stato realizzato da ','bestcorporate')?><a href="mailto:emmanuele.somma@bancaditalia.it"><?php _e('E. Somma','bestcorporate')?></a><?php _e(' nel Febbraio 2014 (per maggiori informazioni ','bestcorporate')?><a href="/cs/?page_id=105"><?php _e('Sviluppo Decentrato','bestcorporate')?></a><?php _e(')','bestcorporate')?>
  </div> 
</footer>
<!-- #colophon -->
</div>
<!-- #page -->
<?php wp_footer(); ?>
</body></html>
