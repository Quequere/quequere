<?php
/* Template Name: Quequeré Jogos */

$args = array( 'post_type' => 'quequere-jogo', 'posts_per_page' => 100);
$loop = new WP_Query( $args );
$titles = array();
$contents = array();
while ( $loop->have_posts() ) : $loop->the_post();
  $titles[] = get_the_title();
  $slugs[] = $post->post_name;
  $contents[] = get_the_content();
endwhile;

get_header();
?>
<div id="gamelist">
  <ul>
  <?php
  foreach ($titles as $key => $title) {
    $slug = $slugs[$key];
    _e("<li><a href=\"#$slug\">$title</a></li>");
  }
  ?>
  </ul>
</div>
<div id="balao">
  <!-- <p>Clique em um título ao lado para conhecer mais sobre o jogo.</p> -->
  <?php
  foreach ($contents as $key => $content) {
    $slug = $slugs[$key];
    $title = $titles[$key];
    ?>
    <section class="gamecontent" id="<?php _e($slug); ?>">
      <h1><?php _e($title); ?></h1>
      <?php _e(wpautop($content)); ?>
    </section>
    <?php
  }
  ?>
</div>
<?php get_footer(); ?>