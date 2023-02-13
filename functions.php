<?php
/* Add Scripts and CSS
-------------------------------------------------- */
function add_scripts() {
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/css/slick.min.css', false );
    wp_enqueue_style( 'slicktheme', get_stylesheet_directory_uri() . '/assets/css/slick.theme.min.css', false );
    wp_enqueue_style( 'boostrapcss', get_template_directory_uri() . '/assets/b_css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'mainStyle2', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '', false );  
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/b_js/jquery.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'Bootstrap', get_stylesheet_directory_uri() . '/assets/b_js/bootstrap.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/b_js/slick.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
  
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );


/*Inlcude lib file

*****************************/

function vajraFile_includes()
{
       
    locate_template( array( 'lib/shortcodes.php' ), true, true );
    locate_template( array( 'lib/widgets.php' ), true, true );
    
}
add_action( 'after_setup_theme', 'vajraFile_includes' );

/************************************ */
add_theme_support( 'post-thumbnails' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'video', 'quote', 'link' ) );
	add_theme_support(
		'html5', array(
			'comment-list',
			'search-form',
			'comment-form',
			'gallery',
		)
	);



/*************************************/
add_theme_support( 'menus' ); // <-- if you already see `menus` from your settings menu, you can ignore this line.

function register_menus() {

  register_nav_menus(
    array(
      'primary_navigation' => _( 'Primary Navigation' ) ,// add locations here.
    )
  );
}
add_action( 'init', 'register_menus' );


function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

if( function_exists('acf_add_options_page') ) {
			  
			   acf_add_options_page(array(                  
              'page_title' 	=> 'Footer',
              'menu_title'	=> 'Footer',
              'menu_slug' 	=> 'footer',
              // 'icon_url' => '',         
              'redirect' => true
              
            ));

          }

          register_sidebar([
            'name'          => __('Footer-1', 'sage'),
            'id'            => 'sidebar-footer-1',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
            ]);
        
            register_sidebar([
              'name'          => __('Footer-2', 'sage'),
              'id'            => 'sidebar-footer-2',
              'before_widget' => '<section class="widget %1$s %2$s">',
              'after_widget'  => '</section>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>'
              ]);
        
              register_sidebar([
                'name'          => __('Footer-3', 'sage'),
                'id'            => 'sidebar-footer-3',
                'before_widget' => '<section class="widget %1$s %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>'
                ]);
        
                register_sidebar([
                  'name'          => __('Footer-4', 'sage'),
                  'id'            => 'sidebar-footer-4',
                  'before_widget' => '<section class="widget %1$s %2$s ">',
                  'after_widget'  => '</section>',
                  'before_title'  => '<h3 class="widget-title">',
                  'after_title'   => '</h3>'
                  ]);
              register_sidebar([
              'name'          => __('Footer-Links', 'sage'),
              'id'            => 'sidebar-footer-5',
              'before_widget' => '<section class="widget %1$s %2$s">',
              'after_widget'  => '</section>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>'
              ]);


/***Excerpt ****/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '.';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}


 // Add custom validation for CF7 form fields
function is_company_email($email){ // Check against list of common public email providers & return true if the email provided *doesn't* match one of them
if(
preg_match('/@gmail.com/i', $email) ||
preg_match('/@yahoo.com/i', $email) ||
preg_match('/@hotmail.com/i', $email) ||
preg_match('/@mail.ru/i', $email) ||
preg_match('/@aol.com/i', $email) ||
preg_match('/@aim.com/i', $email) ||
preg_match('/@yandex.com/i', $email) ||
preg_match('/@yandex.ru/i', $email) ||
preg_match('/@mail.com/i', $email) ||
preg_match('/@outlook.com/i', $email) ||
preg_match('/@protonmail.ch/i', $email) ||
preg_match('/@protonmail.com/i', $email) ||
preg_match('/@gmx.us/i', $email) ||
preg_match('/@gmx.com/i', $email) ||
preg_match('/@icloud.com/i', $email) ||
preg_match('/@att.net/i', $email) ||
preg_match('/@comcast.net/i', $email) ||
preg_match('/@facebook.com/i', $email) ||
preg_match('/@googlemail.com/i', $email) ||
preg_match('/@google.com/i', $email) ||
preg_match('/@hotmail.co.uk/i', $email) ||
preg_match('/@mac.com/i', $email) ||
preg_match('/@me.com/i', $email) ||
preg_match('/@msn.com/i', $email) ||
preg_match('/@live.com/i', $email) ||
preg_match('/@sbcglobal.net/i', $email) ||
preg_match('/@verizon.net/i', $email) ||
preg_match('/@yahoo.co.uk/i', $email) ||
preg_match('/@email.com/i', $email) ||
preg_match('/@fastmail.fm/i', $email) ||
preg_match('/@games.com/i', $email) ||
preg_match('/@gmx.net/i', $email) ||
preg_match('/@hush.com/i', $email) ||
preg_match('/@hushmail.com/i', $email) ||
preg_match('/@iname.com/i', $email) ||
preg_match('/@inbox.com/i', $email) ||
preg_match('/@lavabit.com/i', $email) ||
preg_match('/@love.com/i', $email) ||
preg_match('/@lavabit.com/i', $email) ||
preg_match('/@pobox.com/i', $email) ||
preg_match('/@tutanota.de/i', $email) ||
preg_match('/@tutanota.com/i', $email) ||
preg_match('/@tutamail.com/i', $email) ||
preg_match('/@tuta.io/i', $email) ||
preg_match('/@keemail.me/i', $email) ||
preg_match('/@rocketmail.com/i', $email) ||
preg_match('/@safe-mail.net/i', $email) ||
preg_match('/@wow.com/i', $email) ||
preg_match('/@ygm.com/i', $email) ||
preg_match('/@ymail.com/i', $email) ||
preg_match('/@zoho.com/i', $email) ||
preg_match('/@bellsouth.net/i', $email) ||
preg_match('/@charter.net/i', $email) ||
preg_match('/@cox.net/i', $email) ||
preg_match('/@earthlink.net/i', $email) ||
preg_match('/@juno.com/i', $email) ||
preg_match('/@btinternet.com/i', $email) ||
preg_match('/@virginmedia.com/i', $email) ||
preg_match('/@blueyonder.co.uk/i', $email) ||
preg_match('/@freeserve.co.uk/i', $email) ||
preg_match('/@live.co.uk/i', $email) ||
preg_match('/@ntlworld.com/i', $email) ||
preg_match('/@o2.co.uk/i', $email) ||
preg_match('/@orange.net/i', $email) ||
preg_match('/@sky.com/i', $email) ||
preg_match('/@talktalk.co.uk/i', $email) ||
preg_match('/@tiscali.co.uk/i', $email) ||
preg_match('/@virgin.net/i', $email) ||
preg_match('/@wanadoo.co.uk/i', $email) ||
preg_match('/@bt.com/i', $email) ||
preg_match('/@sina.com/i', $email) ||
preg_match('/@sina.cn/i', $email) ||
preg_match('/@qq.com/i', $email) ||
preg_match('/@naver.com/i', $email) ||
preg_match('/@hanmail.net/i', $email) ||
preg_match('/@daum.net/i', $email) ||
preg_match('/@nate.com/i', $email) ||
preg_match('/@yahoo.co.jp/i', $email) ||
preg_match('/@yahoo.co.kr/i', $email) ||
preg_match('/@yahoo.co.id/i', $email) ||
preg_match('/@yahoo.co.in/i', $email) ||
preg_match('/@yahoo.com.sg/i', $email) ||
preg_match('/@yahoo.com.ph/i', $email) ||
preg_match('/@163.com/i', $email) ||
preg_match('/@yeah.net/i', $email) ||
preg_match('/@126.com/i', $email) ||
preg_match('/@21cn.com/i', $email) ||
preg_match('/@aliyun.com/i', $email) ||
preg_match('/@foxmail.com/i', $email) ||
preg_match('/@hotmail.fr/i', $email) ||
preg_match('/@live.fr/i', $email) ||
preg_match('/@laposte.net/i', $email) ||
preg_match('/@yahoo.fr/i', $email) ||
preg_match('/@wanadoo.fr/i', $email) ||
preg_match('/@orange.fr/i', $email) ||
preg_match('/@gmx.fr/i', $email) ||
preg_match('/@sfr.fr/i', $email) ||
preg_match('/@neuf.fr/i', $email) ||
preg_match('/@free.fr/i', $email) ||
preg_match('/@gmx.de/i', $email) ||
preg_match('/@hotmail.de/i', $email) ||
preg_match('/@live.de/i', $email) ||
preg_match('/@online.de/i', $email) ||
preg_match('/@t-online.de/i', $email) ||
preg_match('/@web.de/i', $email) ||
preg_match('/@yahoo.de/i', $email) ||
preg_match('/@libero.it/i', $email) ||
preg_match('/@virgilio.it/i', $email) ||
preg_match('/@hotmail.it/i', $email) ||
preg_match('/@aol.it/i', $email) ||
preg_match('/@tiscali.it/i', $email) ||
preg_match('/@alice.it/i', $email) ||
preg_match('/@live.it/i', $email) ||
preg_match('/@yahoo.it/i', $email) ||
preg_match('/@email.it/i', $email) ||
preg_match('/@tin.it/i', $email) ||
preg_match('/@poste.it/i', $email) ||
preg_match('/@teletu.it/i', $email) ||
preg_match('/@mail.ru/i', $email) ||
preg_match('/@rambler.ru/i', $email) ||
preg_match('/@yandex.ru/i', $email) ||
preg_match('/@ya.ru/i', $email) ||
preg_match('/@list.ru/i', $email) ||
preg_match('/@hotmail.be/i', $email) ||
preg_match('/@live.be/i', $email) ||
preg_match('/@skynet.be/i', $email) ||
preg_match('/@voo.be/i', $email) ||
preg_match('/@tvcablenet.be/i', $email) ||
preg_match('/@telenet.be/i', $email) ||
preg_match('/@hotmail.com.ar/i', $email) ||
preg_match('/@live.com.ar/i', $email) ||
preg_match('/@yahoo.com.ar/i', $email) ||
preg_match('/@fibertel.com.ar/i', $email) ||
preg_match('/@speedy.com.ar/i', $email) ||
preg_match('/@arnet.com.ar/i', $email) ||
preg_match('/@yahoo.com.mx/i', $email) ||
preg_match('/@live.com.mx/i', $email) ||
preg_match('/@hotmail.es/i', $email) ||
preg_match('/@hotmail.com.mx/i', $email) ||
preg_match('/@prodigy.net.mx/i', $email) ||
preg_match('/@yahoo.ca/i', $email) ||
preg_match('/@hotmail.ca/i', $email) ||
preg_match('/@bell.net/i', $email) ||
preg_match('/@shaw.ca/i', $email) ||
preg_match('/@sympatico.ca/i', $email) ||
preg_match('/@rogers.com/i', $email) ||
preg_match('/@yahoo.com.br/i', $email) ||
preg_match('/@hotmail.com.br/i', $email) ||
preg_match('/@outlook.com.br/i', $email) ||
preg_match('/@uol.com.br/i', $email) ||
preg_match('/@bol.com.br/i', $email) ||
preg_match('/@terra.com.br/i', $email) ||
preg_match('/@ig.com.br/i', $email) ||
preg_match('/@itelefonica.com.br/i', $email) ||
preg_match('/@r7.com/i', $email) ||
preg_match('/@zipmail.com.br/i', $email) ||
preg_match('/@globo.com/i', $email) ||
preg_match('/@globomail.com/i', $email) ||
preg_match('/@oi.com.br/i', $email) ||
preg_match('/@zoho.com/i', $email)
){
return false; // It's a publicly available email address
}else{
return true; // It's probably a company email address
}
}

function custom_email_validation_filter($result, $tag) {  

 $tag = new WPCF7_Shortcode( $tag );

   if ( 'Email' == $tag->name ) {

 $the_value = isset( $_POST['Email'] ) ? trim( $_POST['Email'] ) : '';

           if(!is_company_email($the_value)){
                     $result->invalidate( $tag, "Enter a business email id" );
           }
      }
       return $result;
 }

add_filter( 'wpcf7_validate_email', 'custom_email_validation_filter', 10, 2 );
add_filter( 'wpcf7_validate_email*', 'custom_email_validation_filter', 10, 2 );

//Adds title tag - required for WP Rocket
add_theme_support( 'title-tag' );

