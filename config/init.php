<?php
/**
 * Custom admin login header logo
 */
function custom_wp_admin() {
    echo '<style type="text/css">'.
             'h1 a { display: none !important; }
              body, .login form { background: #111; }
              .login label { color: white; }'.
         '</style>';
}

function is_subscriber() {

}
add_action( 'login_head', 'custom_wp_admin' );

// theme support for featured images
add_theme_support( 'post-thumbnails' );

//register navigations
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary Navigation', 'railroad-injuries' ) );
                        register_nav_menu( 'posts', __( 'Posts', 'railroad-injuries' ) );
                        register_nav_menu( 'categories', __( 'Categories', 'railroad-injuries' ) );
        } endif;

// styles and scripts
function theme_styles() {
  wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/assets/css/styles.css' );
  wp_enqueue_style('print_css', get_stylesheet_directory_uri() . '/assets/css/print.css' );
  wp_enqueue_style('animate_css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css' );
  wp_enqueue_style('owl_css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
  wp_enqueue_style('fancybox_css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css' );
}

add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

  global $wp_scripts;

  wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );

  wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );

  wp_enqueue_script( 'vue', get_template_directory_uri() . '/assets/js/vue.min.js');

  /**
   * initialize nonce for apis calls
   */
  wp_localize_script('main', 'wpApiSettings', [
      'root' => esc_url_raw(rest_url()),
      'nonce' => wp_create_nonce('wp_rest')
  ]);

  wp_enqueue_script( 'fancybox_js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js' );
}

add_action('wp_enqueue_scripts', 'theme_js' );


// lawyer
add_action('init', 'create_lawyer_post_type');
function create_lawyer_post_type() {
  register_post_type(
    'lawyer',
    array(
      'labels'      => array(
        'name'          => __('Lawyers'),
        'singular_name' => __('Lawyer')
      ),
      'public'      => true,
      'has_archive' => false,
      'rewrite'     => array('slug' => 'lawyer'),
      'supports'    => array('title', 'custom-fields', 'editor', 'thumbnail')
    )
  );
}

// register widgets | widgets located in widgets.php
if ($wp_version >= 2.8) require_once(TEMPLATEPATH.'/widgets.php');

// remove special characters from strings
function remove_special_chars($string) {
  return preg_replace('/[^A-Za-z0-9]/', '', $string);
}

function get_court_house(){
  echo '<div class="col-sm-12 text-center court-house">' .
          '<span></span>' .
          '<i class="fa fa-university" aria-hidden="true"></i>' .
          '<span></span>' .
        '</div>';
}

function hollow_btn($btn_text, $btn_link){
    echo '<div class="col-sm-12 text-center">' .
                '<a href="' . $btn_link . '" class="btn btn-hollow relative top50">' . $btn_text . ' <span class="absolute"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>' .
              '</div>';
}

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Testimonials',
    'menu_title'  => 'Testimonials',
    'menu_slug'   => 'testimonials',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Verdicts and Settlements',
    'menu_title'  => 'Verdicts and Settlements',
    'menu_slug'   => 'verdicts-settlements',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
}

/**
 *  Shape Comment
 */

if ( ! function_exists( 'shape_comment' ) ) :
function shape_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'lawyeria' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'lawyeria' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class('dark-text'); ?> id="li-comment-<?php comment_ID(); ?>" class="dark-text">
        <article id="comment-<?php comment_ID(); ?>" class="comment">
            <div class="comment-entry">
                <div class="comment-entry-head">
                    <strong><?php printf( __( '<span>%s</span>', 'lawyeria' ), sprintf( '%s', get_comment_author_link() ) ); ?></strong> said:
                        <time pubdate datetime="<?php comment_time( 'c' ); ?>">
                            <?php printf( __( '%1$s at %2$s', 'lawyeria' ), get_comment_date(), get_comment_time() ); ?>
                        </time>
                    <?php edit_comment_link( __( 'Edit', 'lawyeria' ), '- ' ); ?>
                </div><!--/div .comment-entry-head-->
                <div class="comment-entry-content">
                    <?php comment_text(); ?>
                </div><!--/div .comment-entry-content-->
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em class="awaiting-moderation cf"><?php _e( 'Your comment is awaiting moderation.', 'lawyeria' ); ?></em><br />
                <?php endif; ?>
                <div class="coment-reply-link-div cf">
                    <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'reply_text' => 'Reply to Comment', 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!--/div .coment-reply-link-div-->
                <hr>
            </div><!--/div .comment-entry-->
        </article><!--/article-->

    <?php
            break;
    endswitch;
}
endif;

/**
 * @link https://www.evan-herman.com/how-to-add-numeric-wordpress-pagination/#.WiQQzrQ-c0o
 * Numeric Pagination for Blog Page
 */

// numbered pagination
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpb_move_comment_field_to_bottom( $fields ) {
  $comment_field = $fields['comment'];
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );?>