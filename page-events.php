<?php get_header() ?>
<?php
            $arguments = array(
                "post_type" => "event",
                "posts_per_page" => -1
            );

            $loop = new WP_Query($arguments);
            ?>

            <?php if($loop->have_posts()): ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>

    <?php
    $eventTitle = get_the_title();
    $eventDescription = get_field("event_description");
    $eventImg = get_field("event_image");
    $eventSchedule = get_field("event_schedule");

?>

<section>

<img src="<?php echo esc_url($eventImg['url']); ?>" alt="">
    <p><?php echo esc_html($eventDescription); ?></p>
    <p><?php echo esc_html($eventSchedule); ?></p>

</section>


    <?php endwhile ?>
  <?php endif ?> 

<?php get_footer() ?>
