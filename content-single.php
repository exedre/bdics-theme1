<?php
/**
 * @package BestCorporate
 * @since BestCorporate 2.2
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if (has_post_thumbnail()){?>
    	<div class="thumbImg"><a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('thumbnail');?></a></div>
    <?php }?>
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
    <div class="entry-meta">
      <?php bestcorporate_posted_on(); ?>
      <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
      <?php
      	/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'bestcorporate' ) );
		if ( $categories_list && bestcorporate_categorized_blog() ) :
		?>
      <span class="cat-links"> <?php printf( __( 'in %1$s', 'bestcorporate' ), $categories_list ); ?> </span> <span class="sep"> | </span>
      <?php endif; // End if categories ?>
      <?php endif; // End if 'post' == get_post_type() ?>
      <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
      <span class="comments-link">
      <?php comments_popup_link( __( 'Leave a comment', 'bestcorporate' ), __( '1 Comment', 'bestcorporate' ), __( '% Comments', 'bestcorporate' ) ); ?>
      </span> <span class="sep"> | </span>
      <?php endif; ?>
      <?php edit_post_link( __( 'Edit', 'bestcorporate' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <!-- .entry-meta -->
    </header>
    <!-- .entry-header -->
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bestcorporate' ), 'after' => '</div>' ) ); ?>
    </div>
    <!-- .entry-content -->
    <footer class="entry-meta">
      <?php
			$tag_list = get_the_tag_list( '', ', ' );

				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %1$s.', 'bestcorporate' );
				} 
				else
				{
				$meta_text='';	
				}
			printf(
				$meta_text,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>
      <?php edit_post_link( __( 'Edit', 'bestcorporate' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
    <!-- .entry-meta -->
</article>
<!-- #post-<?php the_ID(); ?> -->