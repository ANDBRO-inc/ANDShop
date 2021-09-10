<!-- bread -->
<?php if ( is_home() || is_front_page() ) : ?>
  <div style="display: none;"></div>
<?php else : ?>
<div class="bread container">
  <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
</div>
<?php endif; ?>