<?php
//Template Name: Forums
get_header();
get_sidebar();
?>

    <section>
        <div class="forums">
            <div class="forums__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="forums__inner--title">
                                <h2 class="title">Forums</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php echo do_shortcode( ' [fmwp_forums /] ' ); ?>
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