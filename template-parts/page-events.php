<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

    <?php
    $eventTitle = get_the_title();
    $eventDescription = get_field("event_description");
    $eventImg = get_field("event_image");
    $eventSchedule = get_field("event_schedule");

?>

<section>

<img src="<?php echo esc_url($eventImg['url']); ?>" alt="">
    <h1><?php echo esc_html($eventDescription); ?></h1>
    <p><?php echo esc_html($eventSchedule); ?></p>

</section>


    <?php endwhile ?>
  <?php endif ?> 

<?php get_footer() ?>
