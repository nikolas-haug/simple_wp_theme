<?php get_header(); ?>

<div class="container">
    <div class="main">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="meta">
                        Created by <?php the_author(); ?> on <?php the_date('F j, Y g:i a'); ?>
                    </div>
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                    <br>
                    <a class="button" href="<?php the_permalink(); ?>">
                        Read More
                    </a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found.'); ?>
        <?php endif; ?>
    </div>

    <div class="sidebar">
        <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>

    <div class="clr"></div>

    </div>

<?php get_footer(); ?>