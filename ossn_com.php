<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (webbehinds.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 Webbehinds
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */

function tetris_init() {
	if (ossn_isLoggedin()) { 
		// make component's css site-wide available for defining an icon used in left sidebar menu
		ossn_extend_view('css/ossn.default', 'tetris/css/component');

		// prepare loading of font and css used by game only
		ossn_new_external_css('tetris-font', 'https://fonts.googleapis.com/css?family=Oswald:400light,700,400,400bold', false);
		ossn_new_external_css('tetris-css', 'components/Tetris/vendor/css/tetris.css');

		// prepare loading of javascript used by game only
		ossn_new_external_js('jquery-buzz', 'components/Tetris/vendor/js/jquery-buzz.js');
		ossn_new_external_js('tetris-vars', 'components/Tetris/vendor/js/tetris-vars.js');
		ossn_new_external_js('tetris-tools', 'components/Tetris/vendor/js/tetris-tools.js');
		ossn_new_external_js('tetris-pieces', 'components/Tetris/vendor/js/tetris-pieces.js');
		ossn_new_external_js('tetris-lines', 'components/Tetris/vendor/js/tetris-lines.js');
		ossn_new_external_js('tetris-score', 'components/Tetris/vendor/js/tetris-score.js');
		ossn_new_external_js('tetris-sound', 'components/Tetris/vendor/js/tetris-sound.js');
		ossn_new_external_js('tetris-game', 'components/Tetris/vendor/js/tetris-game.js');

		// register a pagehandler to make http://siteurl/tetris available
		ossn_register_page('tetris', 'tetris_page');
		
		// register menu entry in left sidebar menu
    		ossn_register_sections_menu('newsfeed', array(
		'name' => 'tetris',  // the icon will be derived from this name - see css file for further details
        	'text' => ossn_print('com:tetris:title'),
        	'url' => ossn_site_url('tetris'),
		'section' => 'links'
	    ));		
    }
}

function tetris_page($pages) {
	// acutally load already prepared css and scripts now
	ossn_load_external_css('tetris-font');
	ossn_load_external_css('tetris-css');
	ossn_load_external_js('jquery-buzz');
	ossn_load_external_js('tetris-vars');
	ossn_load_external_js('tetris-tools');
	ossn_load_external_js('tetris-pieces');
	ossn_load_external_js('tetris-lines');
	ossn_load_external_js('tetris-score');
	ossn_load_external_js('tetris-sound');
	ossn_load_external_js('tetris-game');
	// initialize and display tetris page
	$title = ossn_print('com:tetris:title');
	$contents['content'] = ossn_plugin_view('tetris/pages/tetris');
	$content = ossn_set_page_layout('contents', $contents);
	echo ossn_view_page($title, $content);
}

ossn_register_callback('ossn', 'init', 'tetris_init');
