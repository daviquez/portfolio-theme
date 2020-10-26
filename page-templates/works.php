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
        <p id="greet" class="mb-0"><?php _e('Hello, I am', 'david'); ?></p>
        <h1 class="font-weight-bold"><?php _e('David Víquez', 'david'); ?></h1>
        <div id="about" class="transition">
            <p><?php _e('and this is my online portfolio', 'david'); ?></p>
            <a href="<?php echo site_url('/about', ''); ?>" class="btn btn-dark"><?php _e('Know more about me', 'david'); ?></a>
        </div>
    </div>
</div>

<div class="col-8 p-5">
    <div class="the_content">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-5"><?php _e('Summary', 'david');?></h2>
                <p class="my-5">
                    <?php _e('Web developer, what they call a full-stack, from Costa Rica. I have studied in the other side of the world, represented Costa Rica worldwide in the biggest technical olympics and created alliances with some of the best developer of many countries. In addition to sharing my knowledge to other students and teachers through trainings in order to improve the web development in my country.', 'david')?>
                </p>
                <a href="<?php echo site_url('/about', ''); ?>" class="btn font-weight-bold mb-5"><?php _e('READ MORE', 'david'); ?></a>
            </div>
        </div>
        <div class="row mt-5">
            hello work
        </div>
    </div>
</div>

<?php get_footer(); ?>