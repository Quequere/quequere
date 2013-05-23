<?php /* Template Name: Página de Contatos Template */ ?>

<?php get_header(); ?>

<div id="mascote">
</div>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div id="balao">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>