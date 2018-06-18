<?php
get_header();
?>
<div class="site-content">
    <div class="site-content-main">
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
    </div><!-- end site-content-main -->
    <div class="site-content-sidebar">
        <?php dynamic_sidebar('sidebar'); ?>
    </div>
</div>

<?php
get_footer();
?>
