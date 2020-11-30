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
                <h2 class="font-weight-bold my-lg-5 title mt-4 mt-md-0"><?php _e('Hello World!', 'david');?></h2>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col-2 pt-4">
            <p class="d-none d-lg-block counter">0<span id="scrolly-number">1</span> <span class="dash">-</span> 03</p>
            </div>
            <div id="about_resume" class="col-12 col-lg-9 scrolly">
                <section class="hellow mb-5 m-md-0 pt-md-4 fade show">
                    <h2 class="font-weight-bold mb-4 mb-md-4"><?php _e('Aobut me', 'david');?></h2>
                    <p><?php _e('My name David, I am a web developer with experience in functional web sites and web applications. Representative of Costa Rica in the largest international competitions in the area of web technologies. My knowledge includes design, UI, UX and accessibility.', 'david') ?></p>
                    <p><?php _e('I like to always be learning about anything, play video games and create digital paintings.', 'david') ?></p>
                    <p><?php _e('In 2019 I decided to participate in the WorldSkilss Costa Rica competitions. These competitions were supervised by experts from South Korea. The competitions dealt with various topics on web design and its technologies.', 'david') ?></p>
                    <p><?php _e('In summary, the experts were satisfied with the results, in this way I managed to obtain not only a gold medal but also a scholarship in South Korea.', 'david') ?></p>
                    <p><?php _e('', 'david') ?></p>
                </section>
                <section class="korea mb-5 m-md-0 fade">
                    <h2 class="font-weight-bold mb-4 mb-md-0"><?php _e('Korea', 'david');?></h2>
                    <p class="mb-3 my-md-4"><?php _e('In Korea I had the opportunity to train and learn from one of the greatest developers in this world and his student, the gold medalist in Korea.', 'david') ?></p>
                    <p class="mb-3 my-md-4"><?php _e('The training focused not only on learning all the necessary technologies for the international competitions, we also had to solve the previous competition projects and, in addition, create project proposals for the competition that would be in Kazan, Russia.', 'david') ?></p>
                    <p class="mb-3 my-md-4"><?php _e('This training definitely boosted my skills significantly.', 'david') ?></p>
                </section>
                <section class="russia fade">
                    <h2 class="font-weight-bold"><?php _e('Russia', 'david');?></h2>
                    <h3 class="text-gold"><?php _e('WorldSkills, Kazan 2019', 'david');?></h3>
                    <p class="mt-md-4 mt-2 pt-2 m-md-0 p-md-0"><?php _e('Once the training was finished, I returned to Costa Rica, where I had to continue preparing to compete in Russia on my own, which meant not having access to a preparation environment for the competitions, even so, I continued to prepare myself with the tools that I had in that moment.', 'david') ?></p>
                    <p class="mt-md-4 mt-2 pt-2 m-md-0 p-md-0"><?php _e('The international competition was a full week of tests on speed, WordPress, databases, JavaScript, PHP and Js frameworks, interface design and application development with augmented reality.', 'david') ?></p>
                    <p class="my-md-4 mt-2 pt-2 m-md-0 p-md-0"><?php _e('Today, I continue to expand my knowledge and share it with the people I have been able to meet throughout this process. I also continue to cooperate with WorldSkills Costa Rica in the hope of improving the development scene in Costa Rica and that more young people are motivated to improve their skills and cooperate with the development of the country.', 'david') ?></p>
                    <div class="mt-md-5 pb-md-4">
                        <a href="https://worldskills.org/" target="_blank" class="btn text-bold"><?php _e('LEARN MORE ABOUT WORLDSKILLS', 'david') ?></a>
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