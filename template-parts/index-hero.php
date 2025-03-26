<?php 
        $heroImg = get_field("hero_image");

        ?>
<section>
<img src="<?php echo esc_url($heroImg["url"]) ?>" alt="">
</section>