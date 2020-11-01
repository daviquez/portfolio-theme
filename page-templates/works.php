<?php 

    /**
     * Template Name: Works
     * 
     * 
     */

    get_header(); 

?>

<div id="the_dark" class="z-99 col-12 col-md-4 p-4 bg-dark text-white d-flex flex-column justify-content-center">
    <div class="pl-4 ml-4">
        <div class="col-12">
            <h1 class="font-weight-bold"><?php _e('What do I do exactly?', 'david'); ?></h1>
            <div id="about" class="transition">
                <p><?php _e('and this is my online portfolio', 'david'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-8 p-0">
    <div class="the_content">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-5"><?php _e('Hightlights', 'david');?></h2>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12 pb-5">

                <?php 
                    $args = array(
                        'post_type' => 'david_portfolio'
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()){ ?>
                        <div id="card-posts" class="card-deck">

                        <?php while ($query->have_posts()) {
                            $query->the_post();
                            $id                 = $post->ID;
                            $taxonomy           = 'david_skills';
                            $thumbnail_url      = get_the_post_thumbnail_url();
                            $thumbnail_caption  = get_the_post_thumbnail_caption();
                            $link               = get_the_permalink();
                            $title              = get_the_title();
                            $technologie        = get_the_terms($id, $taxonomy)[0]->name;

                            ?>

                            <div class="card shadow-sm mb-3 mx-0">
                                <a href="<?php echo $link ?>"><img class="img-fluid" src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>"></a>
                                <div class="card-body">
                                    <a class="text-dark card-text" href="<?php echo $link ?>"><h5 class="card-title text-bold"><?php echo $title; ?></h5></a>
                                    <p><?php esc_html_e('Technologie', 'david'); ?> <span class="text-gold"><?php echo $technologie ?></span></p>
                                </div>
                            </div>
                        <?php } ?>

                        </div>
                    <?php }

                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>