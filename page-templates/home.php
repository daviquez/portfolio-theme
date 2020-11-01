<?php 

    /**
     * Template Name: Home 
     * 
     * 
     */

    get_header(); 

?>

<div id="the_dark" class="pt-4 pt-md-0 z-99 col-12 col-md-4 p-4 bg-dark text-white d-flex flex-column justify-content-center">
    <div class="pt-5 pt-md-0 pl-0 pl-md-4 ml-0 ml-md-4 text-center text-md-left">
        <p id="greet" class="mb-0"><?php _e('Hello, I am', 'david'); ?></p>
        <h1 class="font-weight-bold"><?php _e('David Víquez', 'david'); ?></h1>
        <div id="about" class="transition">
            <p><?php _e('and this is my online portfolio', 'david'); ?></p>
            <a href="<?php echo site_url('/about', ''); ?>" class="btn btn-dark"><?php _e('Know more about me', 'david'); ?></a>
        </div>
    </div>
</div>

<div class="col-12 col-md-8 p-md-5 right">
    <div class="the_content container">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-5"><?php _e('Summary', 'david');?></h2>
                <p class="my-5">
                    <?php _e('Web Developer with experience in functional websites and web apps as well. Representer of Costa Rica in the international WorldSkills competitions in the area of web technologies. My knowledge includes responsive design, UI, UX and accessibility.', 'david')?>
                </p>
                <a href="<?php echo site_url('/about', ''); ?>" class="btn font-weight-bold mb-5"><?php _e('READ MORE', 'david'); ?></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="d-none d-md-block col-2 pt-5">
                <p class="pt-5"><span id="section-number">01</span> <span class="dash">-</span> 02</p>
            </div>
            <div id="home_resume" class="col-12 col-md-10 scroll-snap-y">
                <section class="skills mb-0">
                    <h2 class="font-weight-bold mb-4"><?php _e('Skills', 'david');?></h2>
                    <div class="d-flex mb-4">
                        <ul class="ul-gold">
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>WordPress</li>
                        </ul>
                        <ul class="ml-3 ul-gold">
                            <li>React</li>
                            <li>Vue.js</li>
                            <li>Laravel</li>
                        </ul>
                    </div>
                    <a href="<?php site_url('/works', ''); ?>" class="btn"><?php _e('CHECK MY WORK', 'david') ?></a>
                </section>
                <section class="experience">
                    <h2 class="font-weight-bold"><?php _e('Experience', 'david');?></h2>
                    <div class="d-lg-flex justify-content-start">
                        <ul class="mt-4 mb-0">
                            <li>
                                <h5 class="text-bold mb-0">Broccoli Studios</h5>
                                <p class="ml-1 text-gold"><?php _e('Web Programmer', 'david') ?></p>
                            </li>
                            <li>
                                <h5 class="text-bold mb-0">Accenture</h5>
                                <p class="ml-1 text-gold"><?php _e('Training', 'david') ?></p>
                            </li>
                            <li>
                                <h5 class="text-bold mb-0">Freelance</h5>
                                <p class="ml-1 text-gold"><?php _e('WordPress Specialist', 'david') ?></p>
                            </li>
                        </ul>
                        <ul class="ml-lg-5 mb-0">
                            <li class="py-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/svg/wscr.svg" alt="Worls Skills Costa Rica Logo in grayscales" width="90">
                            </li>
                            <li class="py-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/svg/ws2019.svg" alt="Worls Skills Kazan 2019 Logo in grayscales" width="90">
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>