<?php

add_action( 'wp_enqueue_scripts', 'walletup_assets' );
function walletup_assets(){
    //css

    wp_enqueue_style( 'walletup-style', get_stylesheet_uri() );
    wp_enqueue_style( 'walletup-fontawesome', get_template_directory_uri(). '/css/all.css' );
    wp_enqueue_style( 'walletup-bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css' );
    wp_enqueue_style( 'walletup-swiper-style', get_template_directory_uri(). '/css/swiper-bundle.min.css' );
    // wp_enqueue_style( 'walletup-slick-style', get_template_directory_uri(). '/css/slicknav.min.css' );
    // wp_enqueue_style( 'walletup-slick-nav-style', get_template_directory_uri(). '/css/slick-slider.css' );

    //js
    wp_enqueue_script( 'walletup-script', get_template_directory_uri(). '/js/script.js', array( 'jquery' ), '1.0.2',true);
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri(). '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery-3.6.1.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'swiper-slider', get_template_directory_uri(). '/js/swiper-bundle.min.js' );
    // wp_enqueue_script( 'slicknav-slider', get_template_directory_uri(). '/js/slicknav.min.js' );
    // wp_enqueue_script( 'slick-slider', get_template_directory_uri(). '/js/slick-slider.min.js' );
}
add_theme_support( 'custom-header' );
add_theme_support( 'widgets');

// Added this code for custom header menu.
function walletup_custom_menu(){
    register_nav_menu( 'walletup-header-menu',__( 'Header Menu' ) );

    register_nav_menu( 'walletup-footer-menu-one',__( 'Footer Menu One' ) );

    register_nav_menu( 'walletup-footer-menu-two',__( 'Footer Menu Two' ) );

    register_nav_menu( 'walletup-footer-menu-three',__( 'Footer Menu Three' ) );

    register_nav_menu( 'walletup-sidebar-menu',__( 'Sidebar Menu' ) );

    register_nav_menu( 'walletup-submenu-menu',__( 'Submenu Menu' ) );
}
add_action( 'init', 'walletup_custom_menu' );

function include_jQuery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery'); 
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '1.8.3'); 
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// Added this code for Custom Post Types
    function walletup_custom_post_type() {
        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Blog', 'Post Type General Name' ),
            'singular_name'       => _x( 'Blog', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Blog' ),
            'parent_item_colon'   => __( 'Parent Blog' ),
            'all_items'           => __( 'All Blog' ),
            'view_item'           => __( 'View Blog' ),
            'add_new_item'        => __( 'Add New Blog' ),
            'add_new'             => __( 'Add New', 'Blog' ),
            'edit_item'           => __( 'Edit Blog' ),
            'update_item'         => __( 'Update Blog' ),
            'search_items'        => __( 'Search Blog' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );
        // Set other options for Custom Post Type
        $args = array(
            'label'               => __( 'Blog' ),
            'description'         => __( 'Blog and reviews' ),
            'labels'              => $labels,  
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),          
            'hierarchical'        => false,
            'public'              => true,
            'menu_position'       => 6,
            'has_archive'         => true, 
        );
        // Registering your Custom Post Type
        register_post_type( 'Blog', $args );
        add_theme_support('post-thumbnails');
    }
    add_action( 'init', 'walletup_custom_post_type', 0 );

    function the_breadcrumb() {
        global $post;
        echo '<ul id="breadcrumbs">';
        if (!is_home()) {
            echo '<li><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo '</a></li><li class="separator"> / </li>';
            if (is_category() || is_single()) {
                echo '<li>';
                the_category(' </li><li class="separator"> / </li><li> ');
                if (is_single()) {
                    echo '</li><li class="separator"> / </li><li>';
                    the_title();
                    echo '</li>';
                }
            } elseif (is_page()) {
                if($post->post_parent){
                    $anc = get_post_ancestors( $post->ID );
                    $title = get_the_title();
                    foreach ( $anc as $ancestor ) {
                        $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                    }
                    echo $output;
                    echo '<strong title="'.$title.'"> '.$title.'</strong>';
                } else {
                    echo '<li><strong> '.get_the_title().'</strong></li>';
                }
            }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
        elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
        echo '</ul>';
    }

    register_sidebar( array(
        'name' => __( 'Blog List Sidebar', 'wpb' ),
        'id' => 'blog-list-sidebar',
        'description' => __( 'The main sidebar appears on the right on each page except the blog list page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Tutorials Sidebar', 'wpb' ),
        'id' => 'tutorials-sidebar',
        'description' => __( 'The main sidebar appears on the right on each page except the tutorials single page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    function walletup_services_custom_post_type() {
        // Set UI labels for Custom Post Type
            $labels = array(
                'name'                => _x( 'Services', 'Post Type General Name' ),
                'singular_name'       => _x( 'Services', 'Post Type Singular Name' ),
                'menu_name'           => __( 'Services' ),
                'parent_item_colon'   => __( 'Parent Services' ),
                'all_items'           => __( 'All Services' ),
                'view_item'           => __( 'View Services' ),
                'add_new_item'        => __( 'Add New Services' ),
                'add_new'             => __( 'Add New', 'Services' ),
                'edit_item'           => __( 'Edit Services' ),
                'update_item'         => __( 'Update Services' ),
                'search_items'        => __( 'Search Services' ),
                'not_found'           => __( 'Not Found' ),
                'not_found_in_trash'  => __( 'Not found in Trash' ),
            );
        // Set other options for Custom Post Type
            $args = array(
                'label'               => __( 'Services' ),
                'description'         => __( 'Services and reviews' ),
                'labels'              => $labels,  
                'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),          
                'hierarchical'        => false,
                'public'              => true,
                'menu_position'       => 7,
                'has_archive'         => true, 
            );
            // Registering your Custom Post Type
            register_post_type( 'Services', $args );
            add_theme_support('post-thumbnails');
        }
        add_action( 'init', 'walletup_services_custom_post_type', 0 );

    function walletup_tutorials_custom_post_type() {

        $labels = array(
            'name' => _x( 'Tutorials Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Tutorials Category', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Tutorials Category' ),
            'all_items' => __( 'All Tutorials Categories' ),
            'parent_item' => __( 'Parent Tutorials Categories' ),
            'parent_item_colon' => __( 'Parent Tutorials Categories:' ),
            'edit_item' => __( 'Edit Tutorials Category' ), 
            'update_item' => __( 'Update Tutorials Category' ),
            'add_new_item' => __( 'Add New Tutorials Category' ),
            'new_item_name' => __( 'New Tutorials Category Name' ),
            'menu_name' => __( 'Tutorials Categories' ),
          );    
          
        // Now register the taxonomy
          register_taxonomy('tutorials-category',array('tutorials'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'tutorials-category' ),
          ));

        // Set UI labels for Custom Post Type
            $labels = array(
                'name'                => _x( 'Tutorials', 'Post Type General Name' ),
                'singular_name'       => _x( 'Tutorials', 'Post Type Singular Name' ),
                'menu_name'           => __( 'Tutorials' ),
                'parent_item_colon'   => __( 'Parent Tutorials' ),
                'all_items'           => __( 'All Tutorials' ),
                'view_item'           => __( 'View Tutorials' ),
                'add_new_item'        => __( 'Add New Tutorials' ),
                'add_new'             => __( 'Add New', 'Tutorials' ),
                'edit_item'           => __( 'Edit Tutorials' ),
                'update_item'         => __( 'Update Tutorials' ),
                'search_items'        => __( 'Search Tutorials' ),
                'not_found'           => __( 'Not Found' ),
                'not_found_in_trash'  => __( 'Not found in Trash' ),
            );
        // Set other options for Custom Post Type
            $args = array(
                'label'               => __( 'Tutorials' ),
                'description'         => __( 'Tutorials and reviews' ),
                'labels'              => $labels,  
                'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),          
                'hierarchical'        => false,
                'public'              => true,
                'menu_position'       => 8,
                'has_archive'         => true,
                'taxonomies'          => array( 'tutorial-category' ), 
            );
            // Registering your Custom Post Type
            register_post_type( 'Tutorials', $args );
            add_theme_support('post-thumbnails');
        }
        add_action( 'init', 'walletup_tutorials_custom_post_type', 0 );
        
        function walletup_application_custom_post_type() {
            // Set UI labels for Custom Post Type
            $labels = array(
                'name'                => _x( 'Application', 'Post Type General Name' ),
                'singular_name'       => _x( 'Application', 'Post Type Singular Name' ),
                'menu_name'           => __( 'Application' ),
                'parent_item_colon'   => __( 'Parent Application' ),
                'all_items'           => __( 'All Application' ),
                'view_item'           => __( 'View Application' ),
                'add_new_item'        => __( 'Add New Application' ),
                'add_new'             => __( 'Add New', 'Application' ),
                'edit_item'           => __( 'Edit Application' ),
                'update_item'         => __( 'Update Application' ),
                'search_items'        => __( 'Search Application' ),
                'not_found'           => __( 'Not Found' ),
                'not_found_in_trash'  => __( 'Not found in Trash' ),
            );
            // Set other options for Custom Post Type
            $args = array(
                'label'               => __( 'Application' ),
                'description'         => __( 'Application and reviews' ),
                'labels'              => $labels,  
                'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),          
                'hierarchical'        => false,
                'public'              => true,
                'menu_position'       => 6,
                'has_archive'         => true, 
            );
            // Registering your Custom Post Type
            register_post_type( 'Application', $args );
            add_theme_support('post-thumbnails');
        }
        add_action( 'init', 'walletup_application_custom_post_type', 0 );
        
?>