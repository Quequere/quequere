<?php
/* Template Name: Quequeré Home */

$args = array( 'post_type' => 'quequere-fala', 'posts_per_page' => 1, 'orderby' => 'rand' );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
  $content = get_the_content();
endwhile;

get_header();
?>
<div id="mascote">
  <img src="<?php echo get_template_directory_uri(); ?>/img/home_personagem.png" alt="Quequeré" />
  <div id="balao">
    <div id="balao_rabo"></div>
    <blockquote><?php _e(wpautop($content)); ?>
    </blockquote>
  </div>
</div>
<?php get_footer(); ?>