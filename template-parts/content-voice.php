<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package andshop
 */

?>

<article class="category-CasesItem col-sm-6 col-lg-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php

    ?>
    <!-- <div class="entry-meta">
      <?php
				andshop_posted_on();
				andshop_posted_by();
				?>
    </div> -->
    <!-- .entry-meta -->

  </header><!-- .entry-header -->

  <div class="entry-content">
    <!-- <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'andshop' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'andshop' ),
				'after'  => '</div>',
			)
		);
		?> -->

    <a href="<?php the_permalink();?>" class="category-CasesItem_Link">
      <div class="category-CasesItem_Img">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="category-CasesItem_Inner">
        <ul class="category-CasesItem_Tags">
          <li class="category-CasesItem_Tag"><?php the_field('voice_cat'); ?></li>
        </ul>
        <h3 class="category-CasesItem_Title"><?php the_title(); ?></h3>
        <p><?php the_excerpt();?></p>
      </div>
    </a>
    <!-- /Entry -->

  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php andshop_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->