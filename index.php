<?php get_header()?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

        <?php get_template_part("template-parts/index", "hero") ?>
        <?php get_template_part("template-parts/index", "welcome") ?>
        <?php get_template_part("template-parts/index", "testimonials") ?>
        <?php get_template_part("template-parts/index", "contact") ?>

    <?php endwhile ?>
  <?php endif ?> 
<?php get_footer()?>