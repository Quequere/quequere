<?php /* Template Name: Página de Sobre Template */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div id="balao">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>