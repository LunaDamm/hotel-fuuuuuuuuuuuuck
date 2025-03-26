
<?php 

$welcomeText = get_field("welcome-Text");
$welcomeTextSmall = get_field("welcome-Text-Small")

?>

<section>
    <h1>
    <?php echo esc_html($welcomeText) ?>
    <?php echo esc_html($welcomeTextSmall) ?>
    </h1>
</section>