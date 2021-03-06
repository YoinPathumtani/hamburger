<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="l-main">
    <section class="l-section-mv p-mainVisual-si p-mainVisual">
        <div>
            <h2 class="c-text-mv c-text-mvTitle"><?php the_title(); ?></h2>
        </div>
    </section>
    <section class="p-card p-card-h">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    }
                    ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
        else :
            ?>
            <p>表示する記事がありません</p>
        <?php endif; ?>
    </section>
</main><!-- l-main -->
<?php get_footer(); ?>