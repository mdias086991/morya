<?php 

    function custom_post_type_session() {
        register_post_type( 'sessão', array (
           'label' => 'Sessão',
           'description' => 'Sessão',
           'public' => true,
           'show_ui' => true,
           'show_in_menu' => true,
           'capability_type' => 'post',
           'map_meta_cap' => true,

           'labels' => array(
               'name' => 'Sessão',
               'singular_name' => 'Sessão',
               'menu_name' => 'Todas as sessões',
               'add_new' => 'Adicionar Novo',
               'add_new_item' => 'Adicionar nova sessão',
               'edit' => 'Editar',
               'edit_item' => 'Editar Sessão'
           )

        ));
    }

    add_action( 'init', 'custom_post_type_session' );

?>