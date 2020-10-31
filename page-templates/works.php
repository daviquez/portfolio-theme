<?php 

    /**
     * Template Name: Works
     * 
     * 
     */

    get_header(); 

?>

<div class="z-99 col-4 p-4 bg-dark text-white d-flex flex-column justify-content-center">
    <div class="pl-4 ml-4">
        <div class="col-8">
            <h1 class="font-weight-bold"><?php _e('What do I do exactly?', 'david'); ?></h1>
            <div id="about" class="transition">
                <p><?php _e('and this is my online portfolio', 'david'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="col-8 p-5">
    <div class="the_content">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-5"><?php _e('Hightlights', 'david');?></h2>
            </div>
        </div>
        <div class="row"></div>
    </div>
</div>

<?php get_footer(); ?>