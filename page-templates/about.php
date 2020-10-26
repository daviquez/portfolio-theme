<?php 

    /**
     * Template Name: About
     */

    get_header('light');
?>

<div class="col-8 p-5">
    <div class="the_content">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-5"><?php _e('Summary', 'david');?></h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <p>01 <span class="dash">---</span> 02</p>
            </div>
            <div class="col-10">
                <section class="hellow d-none">
                    <h2 class="font-weight-bold"><?php _e('WorldSkills Kazan', 'david');?></h2>
                    <ul class="ul-gold">
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>WordPress</li>
                        <li>React</li>
                        <li>Vue.js</li>
                        <li>Laravel</li>
                    </ul>
                    <a href="<?php site_url('/works', ''); ?>" class="btn"><?php _e('CHECK MY WORK', 'david') ?></a>
                </section>
                <section class="korea">
                    <h2 class="font-weight-bold"><?php _e('Experience', 'david');?></h2>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="col-4 p-4 bg-dark text-white d-flex flex-column justify-content-center">
    <div class="globekit-module--globekitContainer--14tak">
        <canvas class="globekit-module--globekitCanvas--1NHhU" width="1519" height="921"></canvas>
        <div class="callout-manager-module--calloutManager--EnI85"></div>
    </div>
</div>


<?php get_footer(); ?>