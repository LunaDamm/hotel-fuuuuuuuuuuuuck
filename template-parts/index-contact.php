<?php 
    $contactPhone = get_field("contact-phone");
    $contactEmail = get_field("contact-email");
    $contactAddress = get_field("contact-address");
    ?>

    <section>
        <p>
            <?php echo esc_html($contactPhone) ?>
            <?php echo esc_html($contactEmail) ?>
            <?php echo esc_html($contactAddress) ?>
        </p>
    </section>