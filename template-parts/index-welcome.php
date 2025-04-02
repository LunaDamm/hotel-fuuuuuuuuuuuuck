
<?php 

$welcomeText = get_field("welcome-text");
$welcomeTextSmall = get_field("welcome-text-small")

?>

<section>
    <h1>
        <?php echo esc_html($welcomeText) ?>
    </h1>
    <p>
        <?php echo esc_html($welcomeTextSmall) ?>
    </p>
</section>