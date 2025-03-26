<b>lmao</b>
<?php
    $testimonialImg = get_field('testimonial_image');
    $testimonialName = get_field('testimonial_name');
    $testimonialText = get_field('testimonial_text');
    $testimonailRating = get_field('testimonial_rating');
?>

<section>
    <img src="<?php echo esc_url($testimonialImg['url']); ?>" alt="">
    <h1><?php echo esc_html($testimonialName); ?></h1>
    <p><?php echo esc_html($testimonialText); ?></p>
    <p><?php echo esc_html($testimonailRating); ?></p>
</section>
