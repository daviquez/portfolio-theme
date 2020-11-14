<?php
    get_header();

    /**
     * Template Name: Work Single
     * Template Post Type: david_portfolio
     */
?>

<?php 
    while(have_posts()){
        if(have_posts()){
            the_post(); ?>
            <?php $the_content = get_the_content('', true) ?>
            <div id="the_dark" class="z-99 col-12 col-md-3 p-4 bg-dark text-white d-flex flex-column justify-content-center">
                <div class="pl-4 ml-4">
                    <h1 class="font-weight-bold"><?php the_title(); ?></h1>
                    <div id="about" class="transition">
                        <p><?php _e('Detailes info about this work', 'david'); ?></p>
                        <a href="<?php echo site_url('/works', ''); ?>" class="btn btn-dark"><?php _e('Go back to works', 'david'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 p-0">
                <div class="the_content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="font-weight-bold my-5"><?php _e('Summary', 'david');?></h2>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-12 pb-5">
                            <?php echo wpautop($the_content) ?>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php }
    }

?>

<?php 
    get_footer();
?>