<?php 

/* 
* Plugin Name: Menu plugin
* Plugin URI: http://www.treinaweb.com.br
* Description: Terceiro plugin do curso de WP
* Author: Treinaweb
* Version: 1.0.0
* Author URI: http://www.treinaweb.com.br
* License: GPL2+
*/

add_action('admin_menu', 'registrar_submenu');

function registrar_submenu() {
    add_submenu_page(
        'options_general.php',
        'Página de configuração',
        'Menu Plugin',
        'manage_options',
        'smenu_slug_config',
        'smenu_slug_config_cb'
    );

    add_submenu_page(
        'themes.php',
        'Página de tema',
        'Menu Plugin',
        'edit_theme_options',
        'smenu_slug_theme',
        'smenu_slug_theme_cb'
    );

    add_menu_page(
        'Página de configuração',
        'Configuração do plugin',
        'manage_options',
        'menu_slug_config',
        'menu_slug_config_cb',
        'dashicons-hammer',
        9
    );
}

function smenu_slug_config_cb() {
    echo "<h1>Página de configuração menu plugin</h1>";
}

function smenu_slug_theme_cb() {
    echo "<h1>Página de configuração do tema</h1>";
}

function menu_slug_config_cb() {
    echo "<h1>Página de configuração do plugin(menu principal)</h1>";

    echo "<h3>Informações bloginfo</h3>";
    echo bloginfo('name')."<br>";
    echo bloginfo('description')."<br>";
    echo bloginfo('url')."<br>";
    echo bloginfo('language')."<br>";
    echo bloginfo('version')."<br>";

    echo "<h3>Informações de constantes</h3>";
    echo WP_CONTENT_DIR . "<br>";
    echo WP_CONTENT_URL . "<br>";
    echo WP_PLUGIN_DIR . "<br>";
    echo WP_PLUGIN_URL . "<br>";

    echo "<h3>Informações de funções de plugin</h3>";
    echo plugin_basename(__DIR__) . "<br>";
    echo plugin_basename(__FILE__) . "<br>";
    echo plugin_dir_url(__FILE__) . "<br>";
    echo plugin_dir_path(__FILE__) . "<br>";

    echo "<h3>Informações de funções do WordPress</h3>";
    echo admin_url() . "<br>";
    echo site_url() . "<br>";
    print_r(wp_upload_dir());
}