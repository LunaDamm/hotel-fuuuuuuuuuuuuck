<?php 
        $heroImg = get_field("hero_image");

        ?>
<section>
<p><?php echo esc_url($heroImg["url"]) ?></p>
</section>