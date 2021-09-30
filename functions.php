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
	wp_enqueue_script( 'plyr-js', 'https://cdn.plyr.io/3.6.8/plyr.js' );
  wp_localize_script( 'main', 'customjs_ajax_object',
    array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    )
  );

	/*theme css*/
	wp_enqueue_style( 'main',get_template_directory_uri() . '/dist/main.min.css');
	wp_enqueue_style( 'plyr-css', 'https://cdn.plyr.io/3.6.8/plyr.css' );


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

function panangin_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'Main menu') {
	  $classes[] = 'header__menuItem col-lg-auto';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'panangin_menu_classes', 1, 3);


function show_test_function() {
	
	print '<div class="steps">
	<div id="step1" class="step_active">
	<div class="linesteps"><div class="pic">1</div></div> 
   <div class="questtxt">Вредные блюда самые вкусные. Поэтому я регулярно
ем и жирное, и жареное. За день я съедаю до 60 г
различных жиров и более 100 г мяса и колбасы</div>
   <div class="ansver" id="ansver1">
<div onclick="test_step(1,0)" id="ansver10"><i class="fa fa-circle-o"></i>Нет, ни в коем случае </div>
<div onclick="test_step(1,3)" id="ansver13"><i class="fa fa-circle-o"></i>Да, но лишь иногда </div>
<div onclick="test_step(1,6)" id="ansver16"><i class="fa fa-circle-o"></i>Не вижу смысла себя ограничивать и съедаю даже больше</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'2'".')">Далее</div><div class="clearfix"></div>
   </div>
   
   <div id="step2">
	<div class="linesteps"><div class="pic">2</div></div> 
   <div class="questtxt">Мой вес превышает норму более чем на 5 кг</div>
   <div class="ansver" id="ansver2">
<div onclick="test_step(2,0)" id="ansver20"><i class="fa fa-circle-o"></i>Конечно же, нет</div>
<div onclick="test_step(2,3)" id="ansver23"><i class="fa fa-circle-o"></i>Да, но не больше 15 кг</div>
<div onclick="test_step(2,6)" id="ansver26"><i class="fa fa-circle-o"></i>Мой вес превышает норму более чем на 15 кг, и с этим
ничего не поделать</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'3'".')">Далее</div><div class="clearfix"></div>
   </div>
   
   <div id="step3">
	<div class="linesteps"><div class="pic">3</div></div> 
   <div class="questtxt">Я считаю, что курить — это нормально</div>
   <div class="ansver" id="ansver3">
<div onclick="test_step(3,0)" id="ansver30"><i class="fa fa-circle-o"></i>Нет, не курю уже больше года</div>
<div onclick="test_step(3,8)" id="ansver38"><i class="fa fa-circle-o"></i>Да, но не более 10 сигарет ежедневно</div>
<div onclick="test_step(3,11)" id="ansver311"><i class="fa fa-circle-o"></i>Да, но не более двадцати сигарет в день</div>
<div onclick="test_step(3,14)" id="ansver314"><i class="fa fa-circle-o"></i>Да, больше двадцати</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'4'".')">Далее</div><div class="clearfix"></div>
   </div>
   
   <div id="step4">
	<div class="linesteps"><div class="pic">4</div></div> 
   <div class="questtxt">За день я выпиваю больше двух кружек пива (бокалов вина, рюмок водки)</div>
   <div class="ansver" id="ansver4">
<div onclick="test_step(4,0)" id="ansver40"><i class="fa fa-circle-o"></i>Нет, за редким исключением</div>
<div onclick="test_step(4,2)" id="ansver42"><i class="fa fa-circle-o"></i>Да, такое происходит довольно часто</div>
<div onclick="test_step(4,4)" id="ansver44"><i class="fa fa-circle-o"></i>Да, я почти ежедневно выпиваю даже больше</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'5'".')">Далее</div><div class="clearfix"></div>
   </div>
	
   
   <div id="step5">
	<div class="linesteps"><div class="pic">2</div></div> 
   <div class="questtxt">Я ужасно устаю от перегрузок на работе и дома. Порой почти дохожу до нервного срыва.</div>
   <div class="ansver" id="ansver5">
<div onclick="test_step(5,0)" id="ansver50"><i class="fa fa-circle-o"></i>Нет, такое случается крайне редко</div>
<div onclick="test_step(5,2)" id="ansver52"><i class="fa fa-circle-o"></i>Да, время от времени такое бывает</div>
<div onclick="test_step(5,4)" id="ansver54"><i class="fa fa-circle-o"></i>Да, я просто живу в состоянии перегрузок, и ничего не могу изменить</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'6'".')">Далее</div><div class="clearfix"></div>
   </div>
	
   <div id="step6">
	<div class="linesteps"><div class="pic">6</div></div> 
   <div class="questtxt">Я постоянно тревожусь о завтрашнем дне, боюсь неприятностей, которые он может принести.</div>
   <div class="ansver" id="ansver6">
<div onclick="test_step(6,0)" id="ansver60"><i class="fa fa-circle-o"></i>Нет, я вполне уравновешен</div>
<div onclick="test_step(6,2)" id="ansver62"><i class="fa fa-circle-o"></i>Не всегда, но довольно часто</div>
<div onclick="test_step(6,4)" id="ansver64"><i class="fa fa-circle-o"></i>Да, я уже давно испытываю душевные муки</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'7'".')">Далее</div><div class="clearfix"></div>
   </div>
   

   <div id="step7">
	<div class="linesteps"><div class="pic">7</div></div> 
   <div class="questtxt">У моих родных артериальное давление повышено</div>
   <div class="ansver" id="ansver7">
<div onclick="test_step(7,0)" id="ansver70"><i class="fa fa-circle-o"></i>Нет, во всяком случае, я об этом не знаю</div>
<div onclick="test_step(7,2)" id="ansver72"><i class="fa fa-circle-o"></i>Да, этим страдал один из родителей</div>
<div onclick="test_step(7,4)" id="ansver74"><i class="fa fa-circle-o"></i>Да, у обоих родителей и (или) у братьев и сестер</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'8'".')">Далее</div><div class="clearfix"></div>
   </div>

   <div id="step8">
	<div class="linesteps"><div class="pic">8</div></div> 
   <div class="questtxt">У меня частенько болит голова, порой она словно свинцом налита.</div>
   <div class="ansver" id="ansver8">
<div onclick="test_step(8,0)" id="ansver80"><i class="fa fa-circle-o"></i>Нет, этого почти не случается</div>
<div onclick="test_step(8,2)" id="ansver82"><i class="fa fa-circle-o"></i>Нечасто, хотя и чаще, чем раньше</div>
<div onclick="test_step(8,4)" id="ansver84"><i class="fa fa-circle-o"></i>Да, часто</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'9'".')">Далее</div><div class="clearfix"></div>
   </div>  
   <div id="step9">
	<div class="linesteps"><div class="pic">9</div></div> 
   <div class="questtxt">Здоровый сон для меня — несбыточная мечта.</div>
   <div class="ansver" id="ansver9">
<div onclick="test_step(9,0)" id="ansver90"><i class="fa fa-circle-o"></i>Нет, я хорошо сплю</div>
<div onclick="test_step(9,2)" id="ansver92"><i class="fa fa-circle-o"></i>По-разному: иногда сразу засыпаю, иногда мучаюсь</div>
<div onclick="test_step(9,4)" id="ansver94"><i class="fa fa-circle-o"></i>Я плохо засыпаю и вынужден принимать снотворное</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'10'".')">Далее</div><div class="clearfix"></div>
   </div>
	
	
	
	<div id="step10">
	<div class="linesteps"><div class="pic">10</div></div> 
   <div class="questtxt">Даже при небольших нагрузках и в состоянии покоя у меня
случается сильное сердцебиение, порой с перебоями.</div>
   <div class="ansver" id="ansver100">
<div onclick="test_step(10,0)" id="ansver1000"><i class="fa fa-circle-o"></i>Нет, у меня никогда не было таких проблем</div>
<div onclick="test_step(10,2)" id="ansver1002"><i class="fa fa-circle-o"></i>Да, у меня это случается, но редко и не интенсивно</div>
<div onclick="test_step(10,6)" id="ansver1006"><i class="fa fa-circle-o"></i>Да, все чаще и тревожнее</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'11'".')">Далее</div><div class="clearfix"></div>
   </div>


<div id="step11">
	<div class="linesteps"><div class="pic">11</div></div> 
   <div class="questtxt">Я человек активный, даже неугомонный. Только и жду
задач, требующих решения!</div>
   <div class="ansver"  id="ansver11">
<div onclick="test_step(11,0)" id="ansver110"><i class="fa fa-circle-o"></i>Нет, я себя не отношу к таковым</div>
<div onclick="test_step(11,2)" id="ansver112"><i class="fa fa-circle-o"></i>Да, я, скорее, заводной, чем спокойный, но могу заставить себя и отключиться</div>
<div onclick="test_step(11,4)" id="ansver114"><i class="fa fa-circle-o"></i>Да, я постоянно в заведенном состоянии, часто до полного изнеможения</div>
   </div>
   <div class="nextblock" onclick="gotostep('."'12'".')">Далее</div><div class="clearfix"></div>
   </div>
   
   
	<div id="step12">
	<h2>Результат</h2><br><br>
	<div id="otvet1" class="otvet">
	Если вы не приукрашиваете, для развития артериальной гипертензии нет особых причин. Однако помните о пользе зарядки
и прогулок на свежем воздухе. Включите в рацион полезные продукты, богатые солями магния (овсяную крупу, шиповник, орехи,
отруби) и калия (печеный картофель, изюм, курагу, чернослив,
капусту, баклажаны, абрикосы). Не забудьте и о морепродуктах.
А если вам более 40 лет, не реже двух раз в год следует проходить
обследование
</div>

<div id="otvet2" class="otvet">Повысилось ли ваше кровяное давление или пока еще нет,
у вас для этого уже больше, чем нужно, негативных причин. Постарайтесь устранить их: рационально питайтесь, следите
за весом, снижайте потребление никотина и алкоголя. Ежедневно понуждайте себя хотя бы к малым физическим усилиям:
поднимайтесь пешком по лестнице, занимайтесь гимнастикой.
Попробуйте контролировать ваше давление до и после того, как
выполните 10 приседаний. Дело в том, что кроме нормального
и повышенного давления, существует промежуточное «лабильное» давление. Оно нормально в состоянии покоя и повышается
при незначительной нагрузке. Лабильное кровяное давление —
предвестник или первая ступень гипертонии.
</div>
<div id="otvet3" class="otvet">Вы принадлежите к типу людей, склонных к повышенному
давлению. Только врач может констатировать, имеется ли у вас
гипертония или вы лишь провоцируете ее появление дурными
привычками. Откажитесь от сахара, сладостей, мучных блюд,
кондитерских изделий, старайтесь меньше есть жирного, жареного, соленого. А вот овощей, притом в сыром виде, включайте
в рацион как можно больше. И примите к сведению: теряя один
килограмм своих жировых запасов, вы снижаете артериальное
давление в среднем на один миллиметр ртутного столба
</div>
<div id="otvet4" class="otvet"> 
Если вы ничего не преувеличили, вам серьезно угрожает
гипертензия. Немедленно отправляйтесь к врачу. Не уклоняйтесь от этого решения. Вам нужно проверить сердце и почки.
Боритесь с излишками веса, откажитесь от курения и алкоголя. И помните: чтобы жить долго и хорошо, необходимо
заботиться о собственном здоровье.
</div>
<div class="nextblock"  ><a href="http://panangin.com.ua/heart-health/test/">В начало</a></div><div class="clearfix"></div>
	
	</div>
   
	<input type="hidden" id="valstep1" value="" />
	<input type="hidden" id="valstep2" value="" />
	<input type="hidden" id="valstep3" value="" />
	<input type="hidden" id="valstep4" value="" />
	<input type="hidden" id="valstep5" value="" />
	<input type="hidden" id="valstep6" value="" />
	<input type="hidden" id="valstep7" value="" />
	<input type="hidden" id="valstep8" value="" />
	<input type="hidden" id="valstep9" value="" />
	<input type="hidden" id="valstep10" value="" />
	<input type="hidden" id="valstep11" value="" />
	
   
   </div>
	';

}
add_shortcode('show_test', 'show_test_function');


add_filter('excerpt_more', function($more) {
	return '...';
});