<?php 

/* 
* Plugin Name: Segundo plugin
* Plugin URI: http://www.treinaweb.com.br
* Description: Segundo plugin do curso de WP
* Author: Treinaweb
* License: GPL2+
*/

// add_action('wp_before_admin_bar_render', 'alerta_cb');

// function alerta_cb() {
//     echo "<script>alert('Antes da barra Administrativa');</script>";
//     exit;
// }

// add_action('wp_after_admin_bar_render', 'alerta_cb');

// function alerta_cb() {
//     echo "<script>alert('Depois da barra Administrativa');</script>";
//     exit;
// }

add_action('wp_after_admin_bar_render', 'alerta_cb');

function alerta_cb() {
    echo "<h1>Treinaweb</h1>";
}

add_action('wp_after_admin_bar_render', 'alerta_cb1', 15);

function alerta_cb1() {
    echo "<h1>Treinaweb 15</h1>";
}

// acao () parametro do wp, param.costumizado)
add_filter('the_post', 'add_title'); 
// chama a funcao
function add_title($post) {
    $post->post_title .= 'Treinaweb';

    return $post;
    //print_r (qdo tem objeto  ele vai mostrar td o q tem dentro do objeto)
    //print<pre> (organiza o formato) 
}



