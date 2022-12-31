<?php
//Template Name: Professional
get_header();
get_sidebar();
?>
    <section>
        <div class="professional">
            <div class="professional__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="professional__inner--title">
                                <h2><?php the_field('professional_main_title'); ?></h2>
                                <p><?php the_field('professional_main_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="professional__inner--list">
                        <div class="row">
                            <?php if( have_rows('professional_company_list') ): ?>
                                <?php while( have_rows('professional_company_list') ) : the_row(); ?> 
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <div class="professional__inner--list-item">
                                            <img src="<?php the_sub_field('image'); ?>">
                                            <h4><?php the_sub_field('title'); ?></h4>
                                            <p><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>