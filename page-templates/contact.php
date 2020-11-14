<?php 

    /**
     * Template Name: Contact
     * 
     * 
     */

    get_header(); 

?>

<div id="the_dark" class="pt-4 pt-md-0 z-99 col-12 col-md-4 bp-md-4 p-4 bg-dark text-white d-flex flex-column justify-content-center">
    <div class="pt-5 pt-md-0 pl-0 pl-md-4 ml-0 ml-md-4 text-center text-md-left title">
        <p id="greet" class="mb-0"><?php _e('Hello, I am', 'david'); ?></p>
        <h1 class="font-weight-bold"><?php _e('David Víquez', 'david'); ?></h1>
        <div id="about" class="transition">
            <p><?php _e('and this is my online portfolio', 'david'); ?></p>
            <a href="<?php echo site_url('/about', ''); ?>" class="btn btn-dark"><?php _e('Know more about me', 'david'); ?></a>
        </div>
        <div class="d-none d-md-block signature mt-5">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/signature.svg" alt="david signature" width="120">
        </div>
    </div>
</div>

<div class="col-12 col-md-8 px-5 pt-5 pb-0">
    <div class="the_content">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold mt-5 title"><?php _e('Get in touch!', 'david');?></h2>
                <p class="mb-1 d-none">
                    <?php _e('What do you need for your website?', 'david')?>
                </p>
                <p class="mb-4 d-none">
                    <?php _e('Let me know it', 'david')?>
                </p>
            </div>
        </div>
        <div class="row my-4 opacity">
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="text-bold mb-4"><?php _e('Location', 'david') ?></h5>
                <p class="pt-2">San José, Costa Rica</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="text-bold mb-4"><?php _e('Mail', 'david') ?></h5>
                <a class="text-dark pt-4" href="mailto:contact@davidviquez.com" target="_blank">contact@davidviquez.com</a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="text-bold mb-3"><?php _e('Social', 'david') ?></h5>
                <div class="david-icons d-flex justify-content-between align-items-center pt-2">
                    <div>
                        <a href="https://www.t.me/IamDH" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/telegram.svg" alt="icono de Telegram" class="img-fluid" width="25"></a>
                    </div>
                    <div>
                        <a href="https://github.com/daviquez" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/github.svg" alt="icono de GitHub" class="img-fluid" width="25"></a>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/in/david-v%C3%ADquez-valverde-282621199/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.svg" alt="icono de LinkedIn" class="img-fluid" width="25"></a>
                    </div>
                    <div class="position-relative">
                        <a id="discord-link" class="toggle-tooltip" href="https://discordapp.com/users/711640736260423742" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/discord.svg" alt="icono de Discord" class="img-fluid" width="25">
                        </a>
                        <span class="da-tooltip tooltip-bottom">IamDavid#4638</span>
                        <input id="tooltip-text" type="text" value="IamDavid#4638">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-bold title"><?php _e('Or just send me an email', 'david')?></h3>
                <div class="mt-5 david-form opacity">
                    <?php echo do_shortcode('[contact-form-7 id="137" title="Contact Form"]') ?>
                </div>
            </div>
        </div>
    </div>
    <?= do_shortcode('[subfooter]') ?>
</div>

<?php get_footer(); ?>