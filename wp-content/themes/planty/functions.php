<?php
// Ajout des styles CSS ay thème

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    //Style du thème
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    //Style du formulaire de contact
    wp_enqueue_style('formulaire-style', get_stylesheet_directory_uri() . '/css/formulaire.css', array(), filemtime(get_stylesheet_directory() . '/css/formulaire.css'));
    //Style du formulaire de commande
    wp_enqueue_style('commander-style', get_stylesheet_directory_uri() . '/css/commander.css', array(), filemtime(get_stylesheet_directory() . '/css/commander.css'));
    //Style de formulaire de livraison
    wp_enqueue_style('livraison-style', get_stylesheet_directory_uri() . '/css/livraison.css', array(), filemtime(get_stylesheet_directory() . '/css/livraison.css'));
}

add_action('customize_register', 'theme_customizer_logo');
function theme_customizer_logo($wp_customize) {
    // Paramètre pour le logo //
    $wp_customize->add_setting('logo', array(
        'transport' => 'refresh',
    ));

    // Contrôle pour le logo //
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' => 'Changer le logo',
        'section' => 'title_tagline',
        'settings' => 'logo',
    )));
}

//Ajout du hook admin
add_filter('wp_nav_menu_items', 'custom_menu_items', 10, 2);
function custom_menu_items($items, $args) {
    
    if (is_user_logged_in() && $args->theme_location == 'main-menu' ) { 
        $items .= '<li class="admin-link"><a href="' . admin_url() . '">Admin</a></li>';
        
    }
    return $items;
}


//Enregistre & charge le scrip du menu burger
function wpmu_burger_menu_scripts() {
	
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/burger-menu-script.js', array( 'jquery' ) );
 
}
add_action( 'wp_enqueue_scripts', 'wpmu_burger_menu_scripts' );

function theme_register_nav_menus() {
    register_nav_menus( array(
      'footer_menu' => 'Menu du footer'
    ));
  }
  add_action( 'after_setup_theme', 'theme_register_nav_menus' );