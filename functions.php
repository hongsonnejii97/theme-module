<?php
//Thêm Shortcode
require_once 'shortcode.php';
//Thêm Page Field
include "options/group_page_field.php";
add_filter('use_block_editor_for_post', '__return_false');

add_theme_support( 'title-tag' );

$role_object = get_role( 'editor' );

$role_object->add_cap( 'manage_options' );

//Hiện phần set thumbnail bài viết

add_theme_support( 'post-thumbnails' );



//Thêm role user



add_role('moderator', __(

    'Moderator'),

    array(

        'read'              => true, // Allows a user to read

        'create_posts'      => true, // Allows user to create new posts

        'edit_posts'        => true, // Allows user to edit their own posts

        'edit_others_posts' => true, // Allows user to edit others posts too

        'publish_posts'     => true, // Allows the user to publish posts

        'manage_categories' => true, // Allows user to manage post categories

        'redux_builder_nqt' => true, // Allows user to manage post categories

        )

);


//Thêm async vào script js tối ưu page speed

function add_async_attribute($tag, $handle) {

   // add script handles to the array below

   $scripts_to_defer = array('script-jquery', 'script-carousel','script-video','script-custom');

   

   foreach($scripts_to_defer as $defer_script) {

      if ($defer_script === $handle) {

         return str_replace(' src', ' defer="defer" src', $tag);

      }

   }

   return $tag;

}



add_filter('script_loader_tag', 'add_async_attribute', 10, 2);



//Loại bỏ wp-embeb

function my_deregister_scripts(){

  wp_deregister_script( 'wp-embed' );

}

add_action( 'wp_footer', 'my_deregister_scripts' );






//Bỏ src set

function meks_disable_srcset( $sources ) {

    return false;

}

 

add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );



//Lấy ảnh đầu tiên làm đại diện

function catch_that_image($id = null)

{

    global $post, $posts;

    $first_img = '';

    ob_start();

    ob_end_clean();

    if ($id != '') {

        $post_content = get_post_field('post_content', $id);

        $output       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);

    } elseif (is_single()) {

        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $posts['0']->post_content, $matches);

    } else {

        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

    }

    $first_img = $matches [1] [0];



    if (empty($first_img)) {

        $first_img = get_template_directory_uri() . "/media/images/logo.png";

    }

    return $first_img;

}



// Phân trang
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
         echo "<ul class=\"page_nav\"><div class=\"wp-pagenavi\"><span class=\"pages\">Trang ".$paged."/".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>««</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>«</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">»</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>»»</a>";
         echo "</div></ul>\n";
     }
}

//Search Only Title
function ccw_search_by_title_only( $search, $wp_query )
{
    global $wpdb;
 
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
 
    $q = $wp_query->query_vars;    
    $n = ! empty( $q['exact'] ) ? '' : '%';
 
    $search =
    $searchand = '';
 
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
 
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
 
    return $search;
}
add_filter( 'posts_search', 'ccw_search_by_title_only', 500, 2 );

// remove_action('template_redirect', 'wp_old_slug_redirect');
// remove_filter('template_redirect', 'redirect_canonical');  

// Xoa chan js header
function footer_enqueue_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('after_setup_theme', 'footer_enqueue_scripts');
// Xoa wp-block-library CSS
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// video covert ID
function getIDvideo($url) {
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];  
}

// viewCheck Event GA
function viewCheck($name){
    echo'
        <script>
            $(document).ready(function() {
                var $screen_'.$name.' = $(".screen_'.$name.'");
                var $screenTop_'.$name.' = $screen_'.$name.'.offset().top;
                var $count_'.$name.' = 0;
                var lead = 0;
                $(window).scroll(function(){ 
                    var windowTop = $(window).scrollTop();
                    if ($screenTop_'.$name.' < windowTop) {
                        $count_'.$name.' = 1;
                        
                    } 
                });
                var refresh_'.$name.' = setInterval(
                    function (){
                        check_'.$name.'($count_'.$name.');
                    }, 1000);

                function check_'.$name.'($count){
                    if( $count == 1 && lead == 0){
                        lead = 1; 
                        console.log("screen_'.$name.'");
                        gtag("event", "event_screen_'.$name.'", { event_category: "cate_screen_'.$name.'", event_label: "label_screen_'.$name.'" });
                    }
                }
                
            });
        </script>	
    ';
}

// Chuyển đổi ảnh sang Base 64
function imageEncode($img){ 
    $image = file_get_contents($img); 
    $type = pathinfo($img, PATHINFO_EXTENSION); 
    $src = 'data:image/'. $type .';base64,'. base64_encode($image); 
    return $src; 
}
// End Chuyển đổi ảnh sang Base 64

//FUNCTION CHECK IP
function get_IP_address() {
	foreach (array('HTTP_CLIENT_IP',
 'HTTP_X_FORWARDED_FOR',
 'HTTP_X_FORWARDED',
 'HTTP_X_CLUSTER_CLIENT_IP',
 'HTTP_FORWARDED_FOR',
 'HTTP_FORWARDED',
 'REMOTE_ADDR') as $key) {
		if (array_key_exists($key, $_SERVER) === true) {
			foreach (explode(',', $_SERVER[$key]) as $IPaddress) {
				$IPaddress = trim($IPaddress); // Just to be safe

				if (filter_var($IPaddress, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {

					return $IPaddress;
				}
			}
		}
	}
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
		'page_title' 	=> 'Tool Settings',
		'menu_title'	=> 'Công Cụ Hỗ Trợ',
        'menu_slug'	=> 'theme-general-settings',
        'redirect'		=> false
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Cấu Hình Website',
		'parent_slug' 	=> 'theme-general-settings',
		// 'capability'	=> 'edit_theme_options',
		'redirect'		=> false
	));
	
}
?>