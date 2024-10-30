<?php
/*
Plugin Name: JUSH JavaScript Syntax Highlighter
Plugin URI: http://wordpress.org/extend/plugins/jush-javascript-syntax-highlighter/
Description: This is a wrapper for the jQuery plugin JUSH which highlights HTML, PHP, SQL and some other languages.
Version: 1.2
Author: Thomas Schmidt
Author URI: http://netaction.de
*/


function JushInit() {
  wp_enqueue_script('jush', WP_PLUGIN_URL.'/jush-javascript-syntax-highlighter/jush.js', array('jquery'));
}


function JushHeader() {
?>
<script type="text/javascript">
  jQuery(function() {
    jush.style('<? echo WP_PLUGIN_URL; ?>/jush-javascript-syntax-highlighter/jush.css');
    jush.highlight_tag('pre');
  });
</script>
<?php
}

add_action('init', 'JushInit');
add_action('wp_head', 'JushHeader');

?>

