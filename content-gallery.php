<?php
/**
 * The template for displaying posts in the Gallery Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package BestCorporate
 * @since BestCorporate 2.2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bestcorporate' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h1>
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
  <?php if ( is_search() ) : // Only display Excerpts for search pages ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php if ( post_password_required() ) : ?>
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bestcorporate' ) ); ?>
    <?php else : ?>
    <?php
		$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
		if ( $images ) :
			$total_images = count( $images );
			$image = array_shift( $images );
			$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
	?>
    <figure class="gallery-thumb">
      <?php
      	$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
		$total_images = count( $images );
		$image = array_shift( $images );
		$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
		?>
      <a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a> </figure>
    <!-- .gallery-thumb -->
    <p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'bestcorporate' ),
						'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'bestcorporate' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
						number_format_i18n( $total_images )
					); ?></em></p>
    <?php endif; ?>
    <?php the_excerpt(); ?>
    <?php endif; ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bestcorporate' ), 'after' => '</div>' ) ); ?>
  </div>
  <!-- .entry-content -->
  <?php endif; ?>
</article>
<!-- #post-<?php the_ID(); ?> -->