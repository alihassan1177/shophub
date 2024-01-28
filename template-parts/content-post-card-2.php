<article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card-img-top">
        <?php the_shophub_get_post_thumbnail(get_the_ID()) ?>
    </div>
    <header class="card-header">

        <?php
        the_title('<h2><a class="text-decoration-none" href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        ?>

    </header><!-- .entry-header -->

    <div class="card-body">
        <?php
        the_excerpt();
        ?>
    </div><!-- .entry-content -->


</article>