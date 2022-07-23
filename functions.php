<?php
/**
 * Create Custom post Type Example for Videos
 * @author MiSCapu
 * @author_uri https://miscapu.com
 * @function miscapu_post_type create custom post type for WordPress Page
 * This content should be placed in the functions.php file found in wp-content/themes/theme_name
 *
 */
function miscapu_post_type()
{
    $labels =
        array(
            'name'                  =>  _x( 'Videos', 'hello-elementor-child' ),
            'singular_name'         =>  _x( 'Video', 'hello-elementor-child' ),
            'menu_name'             =>  _x( 'Videos', 'hello-elementor-child' ),
            'parent_item_colon'     =>  __( 'Video Principal', 'hello-elementor-child' ),
            'all_items'             =>  __( 'Todos os  videos', 'hello-elementor-child' ),
            'view_item'             =>  __( 'Ver video', 'hello-elementor-child' ),
            'add_new_item'          =>  __( 'Adicionar um novo video', 'hello-elementor-child' ),
            'add_new'               =>  __( 'Adicionar novo video', 'hello-elementor-child' ),
            'edit_item'             =>  __( 'Editar video', 'hello-elementor-child' ),
            'update_item'           =>  __( 'Atualizar video', 'hello-elementor-child' ),
            'search_items'          =>  __( 'Procurar videos', 'hello-elementor-child' ),
            'not_found'             =>  __( 'Nada encontrado aqui', 'hello-elementor-child' ),
            'not_found_in_trash'    =>  __( 'Nada encontrado no local', 'hello-elementor-child' ),
            );
        $args   =
            array(
                'label'             =>  __( 'Videos', 'hello-elementor-child' ),
                'description'       =>  __( 'Melhores Videos', 'hello-elementor-child' ),
                'labels'            =>  $labels,
                'supports'          =>
                    array(
                        'title', 'editor', 'author', 'thumbnail','excerpt','custom-fields','revisions'
                    ),
                'public'                =>  true,
                'hierarchical'          =>  false,
                'show_ui'               =>  true,
                'show_in_menu'          =>  true,
                'show_in_nav_menus'     =>  true,
                'show_in_admin_bar'     =>  true,
                'has_archive'           =>  true,
                'can_export'            =>  true,
                'exclude_from_search'   =>  false,
                'yarpp_support'         =>  true,
                'taxonomies'            =>
                    array(
                        'post_tag'
                    ),
                'publicly_queryable'    =>  true,
                'capability_type'       =>  'page',
            );
        register_post_type( 'videos', $args );
}
add_action( 'init', 'miscapu_post_type' );