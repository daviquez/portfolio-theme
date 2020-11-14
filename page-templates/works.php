<?php 

    /**
     * Template Name: Works
     * 
     * 
     */

    get_header(); 

?>

<div id="the_dark" class="pt-4 pt-md-0 z-99 col-12 col-md-4 p-4 bg-dark text-white d-flex flex-column justify-content-center">
    <div class="pt-5 pt-md-0 pl-0 pl-md-4 ml-0 ml-md-4 text-center text-md-left">
        <div class="position-md-fixed col-12 title">
            <h1 class="font-weight-bold"><?php _e('What do I do exactly?', 'david'); ?></h1>
            <div id="about" class="transition">
                <p><?php _e('and this is my online portfolio', 'david'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-8 p-md-0">
    <div class="the_content container">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-5 title"><?php _e('Hightlights', 'david');?></h2>
            </div>
        </div>
        <div class="row mb-3">
            <div id="card-posts" class="col-12">

                <?php 
                    $args = array(
                        'post_type' => 'david_portfolio'
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()){ 
                        $i = 1 ?>
                        <div class="card-deck">

                        <?php while ($query->have_posts()) {
                            $query->the_post();
                            $id                 = $post->ID;
                            $taxonomy           = 'david_skills';
                            $thumbnail_url      = get_the_post_thumbnail_url();
                            $thumbnail_caption  = get_the_post_thumbnail_caption();
                            $link               = '#';
                            $title              = get_the_title();
                            $technologie        = get_the_terms($id, $taxonomy)[0]->name;

                            if( $post->post_content ){
                                $link = get_the_permalink();
                            }
                            ?>

                            <div class="card shadow mb-3 mx-0">
                                <div class="card-img-top">
                                    <a href="<?php echo $link ?>">
                                        <img class="thumb img-fluid" src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a class="text-dark card-text" href="<?php echo $link ?>">
                                        <h5 class="card-title text-bold"><?php echo $title; ?></h5>
                                    </a>
                                    <p><?php esc_html_e('Technologie', 'david'); ?> <span class="text-bold"><?php echo $technologie ?></span></p>
                                </div>
                            </div>
                        <?php 
                            if($i%2 == 0){ ?>
                                </div>
                                <div class="card-deck">
                            <?php }
                        $i++;
                        } ?>

                        </div>
                    <?php }

                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <?= do_shortcode('[subfooter]') ?>
</div>

<?php get_footer(); ?>