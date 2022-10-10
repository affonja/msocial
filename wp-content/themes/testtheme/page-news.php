<?php get_header(); ?>

<div class="container flex-grow-1">
    <h2 class="mt-5 mb-3"><?= $wp_post_types["newstest"]->label; ?></h2>
    <?php
    $args = [
        'post_type' => 'newstest',
        'numberposts' => 20,
        'meta_query' => ['date' => ['key' => '_news_date']],
        'order' => 'DESC',
//        'post_status'=> 'publish ',
    ];

    $news = get_posts($args);
    foreach ($news as $new) {
        setup_postdata($new);
        $img = wp_get_attachment_image_src(get_post_meta($new->ID, '_news_img|||0|value', 1));
        ?>
        <div class="article-elem row mb-3">
            <div class="float-left col-2"><img src="<?= $img[0]; ?>" class="img-thumbnail" alt=""></div>
            <div class="col-10 position-relative">
                <div class="row">
                    <h3><a href="<?php the_permalink(); ?>"><?=get_post_meta($new->ID, '_news_title', 1); ?></a></h3>
                </div>
                <div class="row">
                    <div><?=get_post_meta($new->ID, '_news_text', 1); ?></div>
                </div>
                <div class="row position-absolute bottom-0">
                    <div class="fst-italic"><?=get_post_meta($new->ID, '_news_date', 1); ?></div>
                </div>
            </div>
        </div>
        <div class="clearfix mb-5"></div>
        <?php
    }
    wp_reset_postdata();
    ?>

</div>


<?php get_footer(); ?>
