<?php
add_action( 'after_setup_theme', 'starter_setup' );
add_theme_support( 'custom-logo' );

function starter_setup(){
	load_theme_textdomain( 'starter', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

	//main menu
	register_nav_menus(
		array( 
			'main-menu' => __( 'Main Menu', 'starter' ),
      'footer-menu-1' => __( 'Footer Menu 1', 'starter'),
      'footer-menu-2' => __( 'Footer Menu 2', 'starter'),
      'footer-bottom-menu' => __( 'Footer Bottom Menu', 'starter')
		)
	);
}

//load scripts and css for scripts
add_action( 'wp_enqueue_scripts', 'starter_load_scripts' );
function starter_load_scripts(){
	
	wp_enqueue_script( 'jquery' );

	/*theme external libraries*/
    wp_enqueue_script( 'lazy', get_template_directory_uri() . '/js/libs/jquery.lazy.min.js', false , false , true);
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/libs/imagesloaded.pkgd.min.js', array('jquery') , false , true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/libs/waypoints/jquery.waypoints.min.js',false , false , true);

	/*theme scripts*/
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false , false , true);
  wp_localize_script( 'main', 'customjs_ajax_object',
    array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    )
  );

	/*theme css*/
	wp_enqueue_style( 'main',get_template_directory_uri() . '/dist/main.min.css');

  /*additional css*/
    
}


//limit excerpt length
function excerpt($limit,$post_id=-1) {
  if($post_id==-1):
    $excerpt = explode(' ', get_the_excerpt(), $limit);
  else:
    $excerpt = explode(' ', get_the_excerpt($post_id), $limit);
  endif;
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


//ACF options page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme Options'),
            'menu_title'  => __('Theme Options'),
            'redirect'    => false,
        ));

        // Add sub page.
        $headerOptions = acf_add_options_page(array(
            'page_title'  => __('Header Options'),
            'menu_title'  => __('Header'),
            'parent_slug' => $parent['menu_slug'],
        ));
        $footerOptions = acf_add_options_page(array(
            'page_title'  => __('Footer Options'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
        ));
        $scripts = acf_add_options_page(array(
            'page_title'  => __('Scripts'),
            'menu_title'  => __('Scripts'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

function the_acf_loop(){
  get_template_part('template-parts/loop/acf-blocks','loop');
}
//register custom post type
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'specialist', [
		'label'  => true,
		'labels' => [
			'name'               => 'Для Фахівців', // основное название для типа записи
			'singular_name'      => 'Для Фахівців', // название для одной записи этого типа
			'add_new'            => 'Додати статтю для фахівців', // для добавления новой записи
			'add_new_item'       => 'Додавання статті для фахівців', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редакція статті для фахівців', // для редактирования типа записи
			'new_item'           => 'Нова стаття для фахівців', // текст новой записи
			'view_item'          => 'Переглянути  статтю для фахівців', // для просмотра записи этого типа.
			'search_items'       => 'Шукати статтю для фахівців', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Для Фахівців', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => true, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ], 
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}
// adding options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}