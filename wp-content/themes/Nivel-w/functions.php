<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/


// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Banners', 'nivel' ),
		'name_admin_bar'        => __( 'Post Type', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


// Register Custom Banner Home
function QueHacemos() {

	$labels = array(
		'name'                  => _x( 'Lo que hacemos ', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Lo que Hacemos', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Lo que hacemos', 'nivel' ),
		'name_admin_bar'        => __( 'Post Type', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Lo que hacemos', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'QueHacemos', $args );

}
add_action( 'init', 'QueHacemos', 0 );



// Register Custom Soluciones
function Soluciones() {

	$labels = array(
		'name'                  => _x( 'Soluciones a medida', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Soluciones a medida', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Soluciones a medida', 'nivel' ),
		'name_admin_bar'        => __( 'Post Type', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Soluciones a medida', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', '', '' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Soluciones', $args );

}
add_action( 'init', 'Soluciones', 0 );

// Register Custom Banner Home
function InversionSteps() {

	$labels = array(
		'name'                  => _x( 'Pasos de inversion ', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Pasos de inversion', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Pasos de inversion', 'nivel' ),
		'name_admin_bar'        => __( 'Post Type', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Pasos de inversion', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'InversionSteps', $args );

}
add_action( 'init', 'InversionSteps', 0 );




function twentyseventeen_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Buscador', 'twentyseventeen' ),
			'id'            => 'buscador',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Categorias', 'twentyseventeen' ),
			'id'            => 'categorias',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section class="main-fav" id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Noticias populares', 'twentyseventeen' ),
			'id'            => 'populares',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );

}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );







