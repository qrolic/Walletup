<?php
//Template Name: Contact Us
get_header();
get_sidebar();
?>

    <section>
        <div class="contact">
            <div class="contact__inner">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="contact__inner--text">
                                <h4><?php the_field('contact_main_title'); ?></h4>
                                <h5><?php the_field('contact_main_subtitle'); ?></h5>
                                <p><?php the_field('contact_main_description'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="contact__inner--image">
                                <img src="<?php the_field('contact_main_image'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-form">
            <div class="contact-form__inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="contact-form__inner--text">
                                <h4><?php the_field('contact_form_title'); ?></h4>
                                <p><?php the_field('contact_form_description'); ?></p>
                                <div class="content">
                                    <div class="content-box">
                                        <h6><?php the_field('contact_form_mail_title'); ?></h6>
                                        <a href="<?php the_field('contact_form_mail_link'); ?>"><?php the_field('contact_form_mail_text'); ?></a>
                                    </div>
                                    <div class="content-box">
                                        <h6><?php the_field('contact_form_phone_title'); ?></h6>
                                        <a href="<?php the_field('contact_form_phone_link'); ?>"><?php the_field('contact_form_phone_text'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="contact-form__inner--form">
                                <?php echo do_shortcode( '[contact-form-7 id="224" title="Walletup Contact Form"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
the_content();
get_footer();
?>