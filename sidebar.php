
<!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar__inner">
            <div class="close">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="sidebar__inner--menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'walletup-sidebar-menu'
                        )
                    );
                ?>
            </div>
        </div>
    </div>
    <div class="close-sidebar"></div>
<!--sidebar end-->