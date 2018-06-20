<?php
get_header();
?>
<div class="site-header-content">
    <h2>
    <?php
    if (is_category()){
        #echo 'Category';
        single_cat_title();
    }
    elseif (is_tag()){
        #echo 'Tag';
        single_tag_title();
    }
    elseif (is_author()){
        #echo 'Author';
        the_post();
        echo 'Author Archives: ' . get_the_author();
        rewind_posts();
    }
    elseif (is_day()){
        #echo 'Day';
        echo 'Date Archives: ' . get_the_date();
    }
    elseif (is_month()){
        #echo 'Month';
        echo 'Month Archives: ' . get_the_date('F Y');
    }
    elseif (is_year()){
        #echo 'Year';
        echo 'Year Archives: ' . get_the_date('Y');
    }
    else {
        #echo 'Archive';
    }
    ?>
    </h2>
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
    </div><!-- end site-content-main -->
    <div class="site-content-sidebar">
        <?php dynamic_sidebar('sidebar'); ?>
    </div>
</div>
<?php
get_footer();
?>
