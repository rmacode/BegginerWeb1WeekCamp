<?php
    $sql = 'select * from camp_enrollment';
    global $wpdb;
/**
 * @var $wpdb wpdb;
 */

$results = $wpdb->get_results( $sql );

echo '<script>';
echo 'var rma_enrollment_numbers = ' . json_encode( $results );
echo '</script>';
?>

<section class="section first-section">
    <div class="row">
        <div class="columns small-12">

            <div class="row">
                <div class="small-12 columns">
                    <blockquote>
                        Everybody in this country should learn how to program a computer… because it teaches you how to think.
                        <cite>Steve Jobs</cite>
                    </blockquote>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <div class="introduction">
                        The RMA Coding Camp will not only teach the ability to code, but will also teach problem solving, understanding the world and digital importance, and the ability to be digitally confident.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <div class="introduction">
                        Start learning to code this summer, by learning HTML, CSS, & Javascript.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="small-8 small-offset-2 medium-6 medium-offset-3">
                    <ul class="small-block-grid-3">
                        <li>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/html5.png" />
                        </li>
                        <li>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/css3.png" />
                        </li>
                        <li>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/javaScript_logo.png" />
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section" data-magellan-destination="about">
    <div class="row">
        <div class="columns small-12">
            <h3><a name="about"><i class="fa fa-info-circle"></i> About</a></h3>
            <div>
                <div class="row">
                    <div class="small-12 columns">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="class-12 columns">
                        <ul class="about-details" data-orbit  data-options="timer_speed:8000;resume_on_mouseout:true;">
                            <li data-orbit-slide="headline-1">
                                <div>
                                    <h2>Daily Speakers</h2>
                                    <h3>Each day, an industry professional will speak to the class about the day's topic</h3>
                                    <p> As the camp gets closer, we will announce the official speaker list and schedule.</p>
                                    <p>
                                    <ul class="small-block-grid-3 medium-block-grid-6">
                                        <li>
                                            <a href="#" class="th radius">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/jen_simmons.jpeg">
                                            </a>
                                            <div class="speaker-name">
                                                Jen Simmons
                                            </div>
                                            <div class="website">
                                                <a href="http://thewebahead.net" target="_blank">Website</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="th radius">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/Julien-Melissas-300x300.jpeg">
                                            </a>
                                            <div class="speaker-name">
                                                Julien Melissas
                                            </div>
                                            <div class="website">
                                                <a href="http://julienmelissas.com" target="_blank">Website</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="th radius">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/allen-moore-300x300.jpg">
                                            </a>
                                            <div class="speaker-name">
                                                Allen Moore
                                            </div>
                                            <div clas="website">
                                                <a href="https://allenmoore.me">Website</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="th radius">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/Alisa_Herr.jpg">
                                            </a>
                                            <div class="speaker-name">
                                                Alisa Herr
                                            </div>
                                            <div clas="website">
                                                <a href="http://www.ednc.org">Website</a>
                                            </div>
                                        </li>
                                        <li><!-- Your content goes here --></li>
                                        <li><!-- Your content goes here --></li>
                                        <li><!-- Your content goes here --></li>
                                        <li><!-- Your content goes here --></li>
                                    </ul>
                                    </p>
                                    <p>
                                        <a href="/speaker-list">Learn More</a>
                                    </p>
                                </div>
                            </li>
                            <li data-orbit-slide="headline-2">
                                <div>
                                    <h2>Professional Support</h2>
                                    <div class="row">
                                        <div class="columns small-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/beachChair.svg" />
                                        </div>
                                        <div class="columns small-9">
                                            <h3>
                                                The Students will have access to the Support Pool, where Professional developers
                                                will man a virtual chatroom to help the students work on their week long assignment.
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns small-3">
                                            <a href="http://semperfiwebdesign.com/" target="_blank">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/SFWD.png" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-orbit-slide="headline-3">
                                <div>
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <h2>Professional Tools</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <p>
                                                The students will be taught to use professional grade tools, which they will continue to
                                                have access to after the camp is completed.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="small-4 columns">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/codepen.png">
                                        </div>
                                        <div class="small-4 columns">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/dropbox-logos_dropbox-logotype-blue.png">
                                        </div>
                                        <div class="small-4 columns">
                                            <img class="img-responsive" style="width: 215px;padding-top: 28px;" src="https://brandfolder.com/slack/assets/twlrv6zp">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <div style="font-size: 10px;">All resources used by the camp utilize the resources respective free accounts and do not represent an endorsement or sponsorship.</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section alt-section" data-magellan-destination="sponsors">
    <div class="row">
        <div class="columns small-12">
            <h3>
                <a name="sponsors">
                    <i class="fa fa-heart"></i> Sponsors & Scholarships Providers
                </a>
            </h3>
            <div class="text-center">
                Interested In Providing a Scholarship?<br />
                <p>
                    <a href="/provide-a-scholarship">
                        <button class="btn btn-large">Learn More</button>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="row">
                <div class="small-4 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <a href="https://www.pbknc.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/Providence2.png">
                            </a>
                        </div>
                        <div class="small-12 columns">
                            <a href="https://www.bncinc.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img_min/hardees-logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="small-4 columns" style="text-align: center">
                    <a href="http://www.rmacademy.com" target="_blank">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/RMACircleSeal.png" width="80%">
                    </a>
                </div>
                <div class="small-3 columns">
                    <a href="https://www.ednc.org" target="_blank">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/img_min/logo-square.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" data-magellan-destination="schedule">
    <div class="row">
        <div class="columns small-12">
            <h3><a name="schedule"><i class="fa fa-calendar"></i> Schedule</a></h3>
            <div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <ul class="pricing-table">
                            <li class="title">Morning Class</li>
                            <li class="price">$50.00</li>
                            <li class="description">Basic Web Development</li>
                            <li class="bullet-item">June 15th to June 19th</li>
                            <li class="bullet-item">9am to 12pm</li>
                            <li class="bullet-item">25 Spots Total</li>
                            <li class="bullet-item"> <span id="enrollment-morning">13</span> Spots Left</li>
                            <li class="cta-button">
                                <a
                                    data-magellan-arrival="register"
                                    href="#register"
                                    data-mag
                                    class="button enrollment-action"
                                    rel="morning"
                                    href="#"
                                    >
                                    Register Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="small-12 medium-6  columns">
                        <ul class="pricing-table">
                            <li class="title">Afternoon Class</li>
                            <li class="price">$50.00</li>
                            <li class="description">Basic Web Development</li>
                            <li class="bullet-item">June 15th to June 19th</li>
                            <li class="bullet-item">2pm to 5pm</li>
                            <li class="bullet-item">25 Spots Total</li>
                            <li class="bullet-item"> <span  id="enrollment-afternoon" >12</span> Spots Left</li>
                            <li class="cta-button">
                                <a
                                    data-magellan-arrival="register"
                                    href="#register"
                                    data-mag
                                    class="button enrollment-action"
                                    rel="afternoon"
                                    href="#"
                                    >Register Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns small-12 medium-6  text-center">

            <a
                href="/apply-for-a-scholarship"
                class="button text-center success"
                >Scholarships Available</a>


        </div>
        <div class="columns small-12 medium-6 text-center">

            <a
                href="/inclusion-policy"
                class="button text-center success"
                >Learn About Our Inclusion Policy</a>

        </div>
    </div>
</section>

<section class="section alt-section" data-magellan-destination="register">

    <div class="row">
        <div class="columns small-12">
            <h3><a name="register"><i class="fa fa-pencil"></i> Register</a></h3>
            <div>
                <?php echo do_shortcode('[gravityform id="2" title="false" description="false" tabindex="100"]'); ?>
            </div>
        </div>
    </div>

</section>


<section class="section" data-magellan-destination="contact">
    <div class="row">
        <div class="columns small-12">
            <h3><a name="contact"><i class="fa fa-envelope"></i> Contact</a></h3>
            <div>
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" tabindex="1000"]'); ?>
            </div>
        </div>
    </div>
</section>

<div id="underDevelopment" class="reveal-modal" data-reveal>
    <h1 class="text-center" style="color: black;"><i class="fa fa-exclamation-triangle"></i></h1>
    <h2 class="text-center" style="color: black;">Are you interested in a coding camp this summer?</h2>
    <p class="lead text-center">Yes! Awesome!!! But... Well... Uh... We aren't quite ready for you yet :(</p>
    <p class="text-center">
        No fear, we're working as hard as we can to get the details for the
        camp together and will have them posted on the site as soon as possible.
        If you would like to be notified of the momentous occasion when we get
        everything in place, give us your email and we'll let you know.
    </p>
    <p class="text-center">
        <?php echo do_shortcode('[gravityform id="3" title="false" description="false" tabindex="10"]'); ?>
    </p>
</div>