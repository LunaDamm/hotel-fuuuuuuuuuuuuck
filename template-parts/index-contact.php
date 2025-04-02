<?php 
    $contactPhone = get_field("contact-phone");
    $contactEmail = get_field("contact-email");
    $contactAddress = get_field("contact-address");
    ?>

    <section>
        <p>
            Contact us at: <br>
            <?php echo esc_html($contactPhone) ?> <br>
            <?php echo esc_html($contactEmail) ?> <br>
            <?php echo esc_html($contactAddress) ?>
        </p>
    </section>