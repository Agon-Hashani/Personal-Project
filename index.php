<?php get_header(); ?>

<main id="site-content" role="main" <?php body_class(); ?>>

    <?php if ( have_posts() ) : ?>
        <div class="post-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                        <?php the_tags(); ?>
                        <?php edit_post_link(__('Edit'), '<span class="edit-link">', '</span>'); ?>
                    </div>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    <?php else : ?>
        <p><?php _e('No posts found.', 'wp-advanced'); ?></p>
    <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>