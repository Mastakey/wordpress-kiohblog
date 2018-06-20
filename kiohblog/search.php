<?php
get_header();
?>
<div class="site-header-content">
    <h2>Search Results for: <?php the_search_query(); ?></h2>
</div>
<div class="site-content">
    <div class="site-content-main">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
    get_template_part('template-content');
    endwhile;
?>
    <div class="pagination">
<?php
    echo paginate_links();
?>
    </div>
<?php
else : {
    echo '<p>No content found</p>';
}
endif;
?>
    </div>
</div>
<?php
get_footer();
?>
