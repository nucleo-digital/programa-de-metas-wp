<?php

/*CUSTOM METAS*/
    add_action('init', 'eixos_register');
function eixos_register() {
	$labels = array(
      'name' => __('Eixos'),
      'singular_name' => __('Eixos'),
      'add_new' => __('Nova Eixos'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'eixos'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'page-attributes', 'comments', 'thumbnail')
    );
    register_post_type('eixos_register', $args );
    flush_rewrite_rules();
}
add_action('admin_init', 'eixos_register');

add_action('init', 'metas_register');
function metas_register() {
	$labels = array(
      'name' => __('Metas'),
      'singular_name' => __('Meta'),
      'add_new' => __('Nova meta'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'metas'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'page-attributes', 'comments', 'thumbnail')
    );
    register_post_type('metas_register', $args );
    flush_rewrite_rules();
}
add_action('admin_init', 'metas_register');

add_action('init', 'ouse_register');
function ouse_register() {
	$labels = array(
      'name' => __('Ouse'),
      'singular_name' => __('Ouse'),
      'add_new' => __('Nova meta'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'ouse'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'page-attributes', 'comments', 'thumbnail')
    );
    register_post_type('ouse_register', $args );
    flush_rewrite_rules();
}
add_action('admin_init', 'ouse_register');

add_action('init', 'grande_tema_register');
function grande_tema_register() {
	$labels = array(
      'name' => __('Grande Tema'),
      'singular_name' => __('Grande Temas'),
      'add_new' => __('Nova meta'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'grande_tema'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'page-attributes', 'comments', 'thumbnail')
    );
    register_post_type('grande_tema_register', $args );
    flush_rewrite_rules();
}
add_action('admin_init', 'grande_tema_register');

add_action('init', 'acao_register');
function acao_register() {
	$labels = array(
      'name' => __('Plano de Ação'),
      'singular_name' => __('Ação'),
      'add_new' => __('Nova meta'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'acao'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'page-attributes', 'comments', 'thumbnail')
    );
    register_post_type('acao_register', $args );
    flush_rewrite_rules();
}
add_action('admin_init', 'acao_register');
function indicadores_register() {
	$labels = array(
      'name' => __('Indicadores'),
      'singular_name' => __('Indicador'),
      'add_new' => __('Nova meta'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'indicador'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'page-attributes', 'comments', 'thumbnail')
    );
    register_post_type('indicadores_register', $args );
    flush_rewrite_rules();
}
add_action('init', 'indicadores_register');
add_action('admin_init', 'indicadores_register');
$user_roll = $user->roles[0];
print_r($user_roll);
// if($user_roll =="administrator") {
// }