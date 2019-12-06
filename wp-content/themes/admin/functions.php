<?php

// Load styles.
if(! function_exists('adminTheme_enqueue_styles' ) ):
    function adminTheme_enqueue_styles() {
        // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        // wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css' );
        //Loading mainboard style file only to MainBoard Page
        wp_enqueue_style( 'mainBoard', get_template_directory_uri() . '/css/mainBoard.css' );
        wp_enqueue_style( 'projects', get_template_directory_uri() . '/css/projects.css' );
        // if ( is_page( 61 ) ) {wp_enqueue_style( 'projects', get_template_directory_uri() . '/css/projects.css' );}
    }
    add_action( 'wp_enqueue_scripts', 'adminTheme_enqueue_styles' );
endif;

// Load Scripts.
if(! function_exists('adminTheme_enqueue_scripts' ) ):
    function adminTheme_enqueue_scripts() {
        // if(is_archive()){
            //     wp_enqueue_script( 'mixitup-js', get_template_directory_uri() . '/js/mixitup.min.js',array(),"",true);
            // }
        wp_enqueue_script( 'jquery-file', get_template_directory_uri() . '/js/jquery-3.2.1.min.js',array(),"",true);
        if ( is_page( 64 ) ) {
             wp_enqueue_script( 'validation', get_template_directory_uri() . '/js/jquery.validate.min.js',array(),"",true);
             wp_enqueue_script( 'newProject-js', get_template_directory_uri() . '/js/newProject.js',array(),"",true);
            }
        wp_enqueue_script( 'bootstrapPopper-min-js', get_template_directory_uri() . '/js/popper.min.js',array(),"",true);
        wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js',array(),"",true);
        //Loading mainboard JS file only to MainBoard Page
        // if ( is_page( 9 ) ) { wp_enqueue_script( 'mainBoard-js', get_template_directory_uri() . '/js/mainBoard.js',array(),"",true);}
    }
    add_action( 'wp_enqueue_scripts', 'adminTheme_enqueue_scripts' );
endif;


// Setting theme Setup.
if ( ! function_exists( 'admin_theme_setup' ) ) :
    function admin_theme_setup() {
        // Add theme support for Title Tag.
        add_theme_support( 'title-tag' );

        // Add theme support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'menu-1' => __( 'Primary', 'admin_theme' ),
                'footer' => __( 'Footer Menu', 'admin_theme' ),
            )
        );

        // Add theme support for Custom Logo.
        add_theme_support(
            'custom-logo',
            array(
                'width'      => 250,
                'height'     => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
        // ============== OTHER MINER FUNCTION NOT USED VERY OFTEN ============== //
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => __( 'Small', 'admin_theme' ),
                    'shortName' => __( 'S', 'admin_theme' ),
                    'size'      => 19.5,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => __( 'Normal', 'admin_theme' ),
                    'shortName' => __( 'M', 'admin_theme' ),
                    'size'      => 22,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => __( 'Large', 'admin_theme' ),
                    'shortName' => __( 'L', 'admin_theme' ),
                    'size'      => 36.5,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => __( 'Huge', 'admin_theme' ),
                    'shortName' => __( 'XL', 'admin_theme' ),
                    'size'      => 49.5,
                    'slug'      => 'huge',
                ),
            )
        );

        // Editor color palette.
        add_theme_support(
            'editor-color-palette',
            array(
                array(
					'name'  => __( 'Primary', 'admin_theme' ),
					'slug'  => 'primary',
					'color' => admin_theme_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'admin_theme' ),
					'slug'  => 'secondary',
					'color' => admin_theme_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
                array(
                    'name'  => __( 'Dark Gray', 'admin_theme' ),
                    'slug'  => 'dark-gray',
                    'color' => '#111',
                ),
                array(
                    'name'  => __( 'Light Gray', 'admin_theme' ),
                    'slug'  => 'light-gray',
                    'color' => '#767676',
                ),
                array(
                    'name'  => __( 'White', 'admin_theme' ),
                    'slug'  => 'white',
                    'color' => '#FFF',
                ),
            )
        );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

    }
    add_action( 'after_setup_theme', 'admin_theme_setup' );
endif;


// Adding Theme Widgets.
if(!function_exists("admin_theme_widgets_init")):
    function admin_theme_widgets_init() {
        register_sidebar(
            array(
                'name'          => __( 'menuSidebar', 'theme' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Add widgets here to appear in your Menu sidebar.', 'admin_theme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
        register_sidebar(
            array(
                'name'          => __( 'toolSidebar', 'theme' ),
                'id'            => 'sidebar-2',
                'description'   => __( 'Add widgets here to appear in your Tools sidebar .', 'admin_theme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
        register_sidebar(
            array(
                'name'          => __( 'Footer 1', 'theme' ),
                'id'            => 'sidebar-3',
                'description'   => __( 'Add widgets here to appear in your footer.', 'admin_theme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
        register_sidebar(
            array(
                'name'          => __( 'Footer 2', 'theme' ),
                'id'            => 'sidebar-4',
                'description'   => __( 'Add widgets here to appear in your footer.', 'admin_theme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'admin_theme_widgets_init' );
endif;


// Displays an optional post thumbnail. Wraps the post thumbnail in an anchor element on index views, or a div element when on single views.
if ( ! function_exists( 'admin_theme_post_thumbnail' ) ) :
	function admin_theme_post_thumbnail() {
		if ( is_singular() ) :
			?>
			<figure class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</figure><!-- .post-thumbnail -->
			<?php
		else :
			?>
		<figure class="post-thumbnail">
			<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail( 'post-thumbnail' );
				?>
			</a>
		</figure>
			<?php
		endif; // End is_singular().
	}
endif;


/*
// Adding Special nav Class
if ( ! function_exists( 'special_admin_theme_nav_class' ) ) :
    function special_admin_theme_nav_class ($classes, $item) {
        global $wp;
        $current_url = home_url( $wp->request );
        //dump_exit($current_url);
        if ($current_url == $item->url && !in_array('current-menu-item', $classes) ){
            $classes[] = 'current-menu-item ';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class' , 'special_admin_theme_nav_class' , 10 , 2);
endif;
*/


//For Color code in theme_setup Fuction above (( HSL, HEX))
if(!function_exists("admin_theme_hsl_hex")):
    function admin_theme_hsl_hex( $h, $s, $l, $to_hex = true ) {
        $h /= 360;
        $s /= 100;
        $l /= 100;
        $r = $l;
        $g = $l;
        $b = $l;
        $v = ( $l <= 0.5 ) ? ( $l * ( 1.0 + $s ) ) : ( $l + $s - $l * $s );
        if ( $v > 0 ) {
            $m;
            $sv;
            $sextant;
            $fract;
            $vsf;
            $mid1;
            $mid2;
            $m = $l + $l - $v;
            $sv = ( $v - $m ) / $v;
            $h *= 6.0;
            $sextant = floor( $h );
            $fract = $h - $sextant;
            $vsf = $v * $sv * $fract;
            $mid1 = $m + $vsf;
            $mid2 = $v - $vsf;
            switch ( $sextant ) {
                case 0:
                    $r = $v;
                    $g = $mid1;
                    $b = $m;
                    break;
                case 1:
                    $r = $mid2;
                    $g = $v;
                    $b = $m;
                    break;
                case 2:
                    $r = $m;
                    $g = $v;
                    $b = $mid1;
                    break;
                case 3:
                    $r = $m;
                    $g = $mid2;
                    $b = $v;
                    break;
                case 4:
                    $r = $mid1;
                    $g = $m;
                    $b = $v;
                    break;
                case 5:
                    $r = $v;
                    $g = $m;
                    $b = $mid2;
                    break;
            }
        }
        $r = round( $r * 255, 0 );
        $g = round( $g * 255, 0 );
        $b = round( $b * 255, 0 );
        if ( $to_hex ) {
            $r = ( $r < 15 ) ? '0' . dechex( $r ) : dechex( $r );
            $g = ( $g < 15 ) ? '0' . dechex( $g ) : dechex( $g );
            $b = ( $b < 15 ) ? '0' . dechex( $b ) : dechex( $b );
            return "#$r$g$b";
        } else {
            return "rgb($r, $g, $b)";
        }
    }
endif;


/*
// Change Image Editor Library TO GD Library Because of HTTP Error.
if(!function_exists("wpb_image_editor_default_to_gd")):
    function wpb_image_editor_default_to_gd( $editors ) {
        $gd_editor = 'WP_Image_Editor_GD';
        $editors = array_diff( $editors, array( $gd_editor ) );
        array_unshift( $editors, $gd_editor );
        return $editors;
    }
    add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );
endif;
*/

// Changing Login Page Style
function wpb_login_logo() { ?>
    <style type="text/css">
        body.login{
            background: #222;
        }
        #login h1 a, .login h1 a {
            position: relative;
            text-indent: initial;
            background-image: none;
            height:auto;
            width:100%;
            padding-bottom: 10px;
            font-size: 2.5rem;
            font-family: open sans ,sans-serif;
            letter-spacing: -5.5px;
            color: #aaa;
            font-weight: 500;
            margin: 0;
            padding: 0;
        }
        #login form{
            border-radius: 5px;
            background: #fff;
        }
        #login label {
            color: #d2232a;
        }
        #login form .input{
            border-radius: 5px;
        }
        #login form .input, .login form input[type=checkbox], .login input[type=text]{
            background: #cecece;
        }
        #login form .input:focus,
        .forgetmenot input#rememberme:focus{
            border-color: #d2232a;
            box-shadow: 0 0 2px rgba((71, 4, 7, 0.8);
            outline: none;
        }
        .wp-core-ui #login #loginform #wp-submit.button-primary{
            background: #d2232a !important;
            color: #fff;
            box-shadow: none;
            border: none;
            text-shadow: none;
            padding: 0px 30px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
        }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );
//Login Page : Logo URL changing
function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );

function wpb_login_logo_url_title() {
    return 'DashBoard';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


// Hide Admin bar from all user except adminss
if ( ! current_user_can( 'manage_options' ) ) {
    add_filter('show_admin_bar', '__return_false');
}

// Redirect Link To login Page if not Logged in
function restrict_admin_with_redirect() {

    if ( ! current_user_can( 'manage_options' ) && ( ! wp_doing_ajax() ) ) {
        wp_safe_redirect( home_url('/mainBoard') ); // Replace this with the URL to redirect to.
        exit;
    }
}
add_action( 'admin_init', 'restrict_admin_with_redirect', 1 );

// Removes COMMENTS from admin Dashboard menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

/* ============= NEW CUSTOM POST TYPE ============= */
// Create a New Custom Post Type " companies "
// CUSTOM POST TYPE companies
function wp_companies_init_cpt() {
    $labels = array(
        'name'                  => _x( 'Companies', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Company', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Companies', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Company', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'New Company', 'textdomain' ),
        'add_new_item'          => __( 'Add New Company', 'textdomain' ),
        'new_item'              => __( 'New Company', 'textdomain' ),
        'edit_item'             => __( 'Edit Company', 'textdomain' ),
        'view_item'             => __( 'View Company', 'textdomain' ),
        'all_items'             => __( 'All Companies', 'textdomain' ),
        'search_items'          => __( 'Search Companies', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Companies:', 'textdomain' ),
        'not_found'             => __( 'No Companies found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Companies found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Company Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Company archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Company', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Company', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Companies list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Companies list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Companies list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        // 'publicly_queryable' => true,
        'show_ui'            => true,
        // 'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => 'company' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-building',
    );
    register_post_type( 'company', $args );
}
add_action( 'init', 'wp_companies_init_cpt' );


// Create a New Custom Post Type " Projects "
// CUSTOM POST TYPE PROJECTS
function wp_projects_init_cpt() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'New Project', 'textdomain' ),
        'add_new_item'          => __( 'Add New Project', 'textdomain' ),
        'new_item'              => __( 'New Project', 'textdomain' ),
        'edit_item'             => __( 'Edit Project', 'textdomain' ),
        'view_item'             => __( 'View Project', 'textdomain' ),
        'all_items'             => __( 'All Projects', 'textdomain' ),
        'search_items'          => __( 'Search Projects', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Projects:', 'textdomain' ),
        'not_found'             => __( 'No projects found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        // 'publicly_queryable' => true,
        'show_ui'            => true,
        // 'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-portfolio',
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'wp_projects_init_cpt' );


// Create a New Custom Post Type " draft Projects "
// CUSTOM POST TYPE draft PROJECTS
function wp_draftProjects_init_cpt() {
    $labels = array(
        'name'                  => _x( 'Draft Projects', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Draft Project', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Draft Projects', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Draft Project', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'New Draft Project', 'textdomain' ),
        'add_new_item'          => __( 'Add New Draft Project', 'textdomain' ),
        'new_item'              => __( 'New Draft Project', 'textdomain' ),
        'edit_item'             => __( 'Edit Draft Project', 'textdomain' ),
        'view_item'             => __( 'View Draft Project', 'textdomain' ),
        'all_items'             => __( 'All Draft Projects', 'textdomain' ),
        'search_items'          => __( 'Search Draft Projects', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Draft Projects:', 'textdomain' ),
        'not_found'             => __( 'No Draft projects found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Draft projects found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Draft Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Draft Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Draft project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Draft project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Draft Projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Draft Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Draft Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        // 'publicly_queryable' => true,
        'show_ui'            => true,
        // 'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => 'draft project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-clipboard',
    );
    register_post_type( 'draftProject', $args );
}
add_action( 'init', 'wp_draftProjects_init_cpt' );


// Create a New Custom Post Type " Tasks "
// CUSTOM POST TYPE Tasks
function wp_tasks_init_cpt() {
    $labels = array(
        'name'                  => _x( 'Tasks', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Task', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Tasks', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Task', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'New Task', 'textdomain' ),
        'add_new_item'          => __( 'Add New Task', 'textdomain' ),
        'new_item'              => __( 'New Task', 'textdomain' ),
        'edit_item'             => __( 'Edit Task', 'textdomain' ),
        'view_item'             => __( 'View Task', 'textdomain' ),
        'all_items'             => __( 'All Tasks', 'textdomain' ),
        'search_items'          => __( 'Search Tasks', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Tasks:', 'textdomain' ),
        'not_found'             => __( 'No Tasks found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Tasks found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Task Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Task archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Task', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Task', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Tasks list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Tasks list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Tasks list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        // 'publicly_queryable' => true,
        'show_ui'            => true,
        // 'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => 'Task' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-pressthis',
    );
    register_post_type( 'task', $args );
}
add_action( 'init', 'wp_tasks_init_cpt' );




/* For All Clients::
*
* Company Page in the Dashboard for Displaying Company Services & How to continue contact us with special offers on other compaigns.
* Warning For the client to not Update the Wordpress Vesion on their own as the website may be broken and their data will be lost as they need to return to us to fix things.
*
*/

/* ========= DEJAVU Company Page ========= */
if(!function_exists("custom_dashboard_menu")):
    function custom_dashboard_menu() {
        add_menu_page(
            'Deja Vu Company',
            'Deja Vu Company',
            'manage_options',
            'By_Deja-vu',
            'dejavu',
            'https://deja-vu.com/dejavu-logo.png'
        );
    }
    function dejavu(){
        global $title;

        print '<div class="wrap">';
        print "<h1>$title</h1>";

        $file = plugin_dir_path( __FILE__ ) . "included.html";

        if ( file_exists( $file ) )
            require $file;

        // print "<p class='description'>Included from <code>$file</code></p>";

        print '</div>';
    }
    add_action('admin_menu', 'custom_dashboard_menu');
endif;
  /* ========= DASHBOARD UPDATE WARNING ========== */
if(!function_exists("dashboard_update_warning")):
    function dashboard_update_warning() {
        // global $wp_meta_boxes;
        // wp_add_dashboard_widget('custom_help_widget', 'Update Warning', 'update_warning');
        add_meta_box("dashboard-id", "Wordpress Update Warning", "update_warning", "dashboard", "normal", "high");
    }
    function update_warning() {
        echo '<p>Please reconsider updating the wordpress version as it might break your website.</p><p>Backup first then update Wordpress or Just Contact us <a href="mailto:info@deja-vu.com">here</a>.</p>';
    }
    add_action('wp_dashboard_setup', 'dashboard_update_warning');
endif;
?>