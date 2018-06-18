
<?php
get_header();
?>
<div class="site-content">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <!-- inside while loop -->
    <article class="post page">
        <?php
        if ( has_children() OR $post->post_parent > 0){
        ?>
        <nav class="site-nav children-links clearfix">
            <span class="parent-link">
                <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
                    <?php echo get_the_title(get_top_ancestor_id()); ?>
                </a>
            </span>
            <?php
                $args = array(
                    'child_of' => get_top_ancestor_id(),
                    'title_li' => ''
                );
            ?>
            <ul>
                <?php wp_list_pages($args); ?>
             </ul
            <?php the_content(); ?>
        </nav>
        <?php
		} else {
		?>
		<h2><?php the_title(); ?></h2>
		<?php
			the_content();
        } //end if
        ?>
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
