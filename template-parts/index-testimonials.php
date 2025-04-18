<?php
            $arguments = array(
                "post_type" => "testimonial",
                "posts_per_page" => -1,
            );

            $loop = new WP_Query($arguments);
            ?>

            <?php if($loop->have_posts()): ?>
            <?php while($loop->have_posts()): $loop->the_post() ?>


<?php
    $testimonialImg = get_field('testimonial-image');
    $testimonialName = get_the_title();
    $testimonialText = get_field('quote');
    $testimonailRating = get_field('rating');
?>

<section>
    <img src="<?php echo esc_url($testimonialImg['url']); ?>" alt="">
    <h1><?php echo esc_html($testimonialName); ?></h1>
    <p><?php echo esc_html($testimonialText); ?></p>
    <p><?php echo esc_html($testimonailRating); ?></p>
</section>

<?php endwhile ?>
<?php endif ?>