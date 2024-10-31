<?php /*
Plugin Name: Pages to Page
Plugin URI: http://obaqblog.blogspot.com/2010/06/pages-to-page-plugin-for-wordpress.html
Description: This is a simple plugin to create the contents of Recent Comments, Pages, Categories, Archives, Recent Posts and Calendar which are usually shown in the sidebar and insert them onto a post or page. Maybe useful when you want to make your own navigation bar or menu.
Version: 1.1.1
Author: Obaq
Author URI: http://obaqblog.blogspot.com/
*/
require_once('functions.php');function f1568660407_0($v650402284_9){$v421817137_3='#\[PTP]((?:[^\[]|\[(?!/?PTP])|(?R))+)\[/PTP]#';if(is_array($v650402284_9)){if(!preg_match("/^post\:/",$v650402284_9[1])&&!preg_match("/^page\:/",$v650402284_9[1])){$v1553389129_5=explode(",",$v650402284_9[1]);}else{$v1553389129_5=explode(":",$v650402284_9[1]);}if($v1553389129_5){$v53831604_1=f1538242308_6($v1553389129_5);$v650402284_9=$v53831604_1;} add_action('wp_footer','f10740678_4');}return preg_replace_callback($v421817137_3,'f1568660407_0',$v650402284_9);} add_filter('the_content','f1568660407_0'); ?>
