<?php 

    /**
     * Template Name: About
     */

    get_header('light');
?>

<div class="order-1 order-md-0 col-12 col-md-8 p-5">
    <div class="the_content">
        <div class="row">
            <div class="col-12">
                <h2 class="font-weight-bold my-2 my-lg-5 title"><?php _e('Hello World!', 'david');?></h2>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col-2 pt-4">
            <p class="d-none d-lg-block counter">0<span id="scrolly-number">1</span> <span class="dash">-</span> 03</p>
            </div>
            <div id="about_resume" class="col-12 col-lg-9 scrolly">
                <section class="hellow mb-5 m-md-0 pt-md-4 fade show">
                    <p><?php _e('Mi name is David; I am a Web Developer with experience in functional websites and web apps as well. Representative of Costa Rica in the biggest international competitions in the area of web technologies. My knowledge includes responsive design, UI, UX and accessibility.', 'david') ?></p>
                    <p><?php _e('I like to learn about everything is this world, to play video games, and to do digital paintings', 'david') ?></p>
                    <p><?php _e('In 2019 decided to participate in WorldSkills competition of Costa Rica. These competitions were supervised by Koreans experts. For these competitions dealt with topics about web design and its technologies. ', 'david') ?></p>
                    <p><?php _e('As a summary, the experts were satisfied with the results, so I achieved not only a gold medal, but also a scholarship in South Korea.', 'david') ?></p>
                    <p><?php _e('', 'david') ?></p>
                </section>
                <section class="korea mb-5 m-md-0 fade">
                    <h2 class="font-weight-bold mb-4 mb-md-0"><?php _e('Korea', 'david');?></h2>
                    <p class="mb-3 my-md-5"><?php _e('In Korea, I had the oportunity to be thaught by one of the biggest developers in this world and his student, the korean competitor. We had to learn and train in order to copete in the international WorldSkills.', 'david') ?></p>
                    <p class="mb-3 my-md-5"><?php _e('We had to solve some tests from the past years of the WorldSkills competitons, create tests proposals and strategies to the next competition.', 'david') ?></p>
                </section>
                <section class="russia fade">
                    <h2 class="font-weight-bold"><?php _e('Russia', 'david');?></h2>
                    <h3 class="text-gold"><?php _e('WorldSkills, Kazan 2019', 'david');?></h3>
                    <p class="my-md-5 mt-4 pt-3 m-md-0 p-md-0 pb-lg-5"><?php _e('In this case, I represented Costa Rica in the skill of Web Technologies. This competition took 4 days long in which all kind of tests about web development were applied. These tests consisted in speed challenges, web site designs, web site building, CMS, plugins and functions creating, theme developing, web apps, APIs creation and more. All that focused in giving solutions to projects using the best practices and the most demanded technologies worldwide. In addition, I had the opportunity to cooperate with competitors from other countries As a summary, I qualified in order to take part in the national competitions which', 'david') ?></p>
                    <div class="mt-md-5 pb-md-5">
                        <a href="" class="btn text-bold"><?php _e('LEARN MORE ABOUT WORLDSKILLS', 'david') ?></a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div id="the_dark" class="globe-container order-0 order-md-1 col-12 col-md-4 p-4 bg-dark text-white d-flex flex-column justify-content-center step-1">
    <div id="globe" class="bg-dark globe">
        <img src="<?php echo get_template_directory_uri() ?>/assets/svg/dotted-world.svg" alt="Dotted World">
        <span class="globe-dot cr"></span>
        <span class="globe-dot ko"></span>
        <span class="globe-dot ru"></span>
    </div>
    
    <div class="d-none d-md-block">
        <?= do_shortcode('[subfooter]') ?>
    </div>
</div>


<?php get_footer(); ?>