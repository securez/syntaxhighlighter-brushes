<?php
/*
Plugin Name: SyntaxHighlighter Evolved Additional Brushes.
Description: Adds support for additional brushes to the SyntaxHighlighter Evolved plugin.
Author: Marcos Lois Bermudez
Version: 1.0.0
Author URI: http://blog.roisu.org/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action('init', 'syntaxhighlighter_additional_regscript');
 
// Tell SyntaxHighlighter Evolved about this new brushes
add_filter('syntaxhighlighter_brushes', 'syntaxhighlighter_additional_brushes');
 
// Register the brush file with WordPress
function syntaxhighlighter_additional_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-lua', plugins_url( 'brushes/shBrushLua.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3');
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_additional_brushes( $brushes ) {
    $brushes = array(
        'lua' => 'lua',
    );
    return $brushes;
}
