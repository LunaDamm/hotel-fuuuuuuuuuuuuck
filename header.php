<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name")?></title>
  <?php wp_head(); ?> 
</head>
<body <?php body_class()?>>
  <div class="container">

    <nav class="navigation">
      <div class="menu-container">
        <ul>
          <li>
            <a href="<?php echo get_permalink(get_page_by_path("frontpage")->ID) ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo get_permalink(get_page_by_path("events")->ID) ?>">Events</a>
          </li>
        </ul>
        <?php get_search_form(); ?>
      </div>
    </nav>
    