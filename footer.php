<?php
wp_footer();
?>
    <!--Footer start-->
        <footer>
            <div class="footer">
                <div class="footer__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer__inner--title">
                                    <h4><?php the_field('footer_title','option'); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="footer__inner--content">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    <div class="footer__inner--content-menu">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'walletup-footer-menu-one'
                                                )
                                            );
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                    <div class="footer__inner--content-menu">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'walletup-footer-menu-two'
                                                )
                                            );
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-2 col-sm-2 col-4">
                                    <div class="footer__inner--content-menu">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'walletup-footer-menu-three'
                                                )
                                            );
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="after-image">
                        <img src="<?php the_field('footer_after_image','option'); ?>">
                    </div>
                </div>
            </div>
        </footer>                            
    <!--Footer end-->

    </div>
</body>
</html>