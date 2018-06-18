<?php
/*
Template Name: Add Post
*/
get_header();
?>
<div class="site-content">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <!-- inside while loop -->
    <article class="post">
        <?php the_content() ?>
    </article>
<?php
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

