<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package andshop
 */

?>

<li <?php post_class('category-NewsItem');?>>
  <a href="<?php the_permalink();?>" class="category-NewsItem_Link">
    <time class="category-NewsItem_Date"><?php echo get_the_date('Y.n.j');?></time>
    <span class="category-NewsItem_Title">
      <span class="category-NewsItem_Cat"><?php the_field('new-cat');?></span>
      <?php the_title();?>
    </span>
  </a>
</li>