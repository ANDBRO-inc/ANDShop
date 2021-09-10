<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package andshop
 */

?>

<li class="category-NewsItem">
  <a href="<?php the_permalink();?>" class="category-NewsItem_Link">
    <span class="category-NewsItem_Title">
      <?php the_title();?>
    </span>
  </a>
</li>