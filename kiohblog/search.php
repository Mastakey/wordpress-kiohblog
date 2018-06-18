<?php
get_header();
?>
<div class="site-content">
<h2>Search Results for: <?php the_search_query(); ?></h2>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
    get_template_part('template-content');
    endwhile;
else : {
    echo '<p>No content found</p>';
}
endif;
?>
</div>
<?php
get_footer();
?>
