<?php
//Template Name: Topics
get_header();
get_sidebar();
?>

    <section>
        <div class="topics">
            <div class="topics__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="topics__inner--title">
                                <h2 class="title">Topics</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php echo do_shortcode( ' [fmwp_topics /] ' ); ?>
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