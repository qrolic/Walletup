<?php
//Template Name: FAQ
get_header();
get_sidebar();
?>

    <section>
        <div class="faq">
            <div class="faq__inner">
                <div class="container">
                    <div class="row">
                        <div class="faq__inner--title">
                            <h3><?php the_field( 'faq_main_title' ); ?></h3>
                        </div>
                    </div>
                    <div class="faq__inner--content">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10 col-12">
                                    <div class="faq__inner--content-box">
                                        <input type="checkbox" id="chck1">
                                        <label class="label" for="chck1"><?php the_field( 'faq_title_one' ); ?></label>
                                        <div class="content">
                                            <?php the_field( 'faq_description_one' ); ?>
                                        </div>
                                    </div>
                                <div class="faq__inner--content-box">
                                    <input type="checkbox" id="chck2">
                                    <label class="label" for="chck2"><?php the_field( 'faq_title_two' ); ?></label>
                                    <div class="content">
                                        <?php the_field( 'faq_description_two' ); ?>
                                    </div>
                                </div>
                                <div class="faq__inner--content-box">
                                    <input type="checkbox" id="chck3">
                                    <label class="label" for="chck3"><?php the_field( 'faq_title_three' ); ?></label>
                                    <div class="content">
                                        <?php the_field( 'faq_description_three' ); ?>
                                    </div>
                                </div>
                                <div class="faq__inner--content-box">
                                    <input type="checkbox" id="chck4">
                                    <label class="label" for="chck4"><?php the_field( 'faq_title_four' ); ?></label>
                                    <div class="content">
                                        <?php the_field( 'faq_description_four' ); ?>
                                    </div>
                                </div>
                                <div class="faq__inner--content-box">
                                    <input type="checkbox" id="chck5">
                                    <label class="label" for="chck5"><?php the_field( 'faq_title_five' ); ?></label>
                                    <div class="content">
                                        <?php the_field( 'faq_description_five' ); ?>
                                    </div>
                                </div>
                                <div class="faq__inner--content-box">
                                    <input type="checkbox" id="chck6">
                                    <label class="label" for="chck6"><?php the_field( 'faq_title_six' ); ?></label>
                                    <div class="content">
                                        <?php the_field( 'faq_description_six' ); ?>
                                    </div>
                                </div>
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