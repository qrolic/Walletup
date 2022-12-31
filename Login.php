<?php
//Template Name: Login
get_header();
get_sidebar();
?>
    <div class="container">
        <div class="custom-breadcrumb">
            <?php if(is_home()) { ?>
                <a href="<?php echo site_url();?>">Home</a>
            <?php }
            else
            { ?>
                <a href="<?php echo site_url();?>">Home</a> -> <a href="#" class="current"><?php echo get_the_title(); ?></a>
            <?php } ?>
        </div>
    </div>
    <section>
        <div class="login">
            <div class="login__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="login__inner--title">
                                <h2 class="title">Login</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php echo do_shortcode( '[ultimatemember form_id="488"]' ); ?>
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