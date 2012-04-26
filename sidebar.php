<?php
/**
 * @package WordPress
 * @subpackage modest3
 */
?>

<nav id="sidebar">
  <h3><a href="<?php bloginfo('url'); ?>/aboutmodest/">About</a></h3>

  <h3>Search</h3>
  <?php get_search_form(); ?>

  <h3>
    <?php
      // Output the link of "event" page.
      $baseURL = get_bloginfo('url');
      $catgoryPath = '/?post_type=event';
      echo '<a href="' .  $baseURL . $catgoryPath . '">Event</a>';
    ?>
  </h3>

  <h3>
    <?php
      // Output the link of "project" page.
      $category_id = get_cat_ID('projects');
      $category_link = get_category_link($category_id);
      echo '<a href="' . $category_link . '">Project</a>';
    ?>
  </h3>
  <ul>
    <?php wp_list_categories('show_count=1&title_li='); ?>
  </ul>

  <aside>
    <ul>
      <li><?php wp_register(); ?></li>
      <li><?php wp_loginout(); ?></li>
    </ul>
  </aside>
</nav>
