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

function ossn_tetris_init() {
	if (ossn_isLoggedin()) {       
		ossn_register_page('tetris', 'ossn_tetris_pages');
		ossn_extend_view('css/ossn.default', 'tetris/css/component');
    		ossn_register_sections_menu('newsfeed', array(
		'name' => 'tetris',
        	'text' => ossn_print('com:ossn:tetris'),
        	'url' => ossn_site_url('tetris'),
		'section' => 'links'
	    ));		
    }
}

function ossn_tetris_pages($pages) {
	$title = ossn_print('com:ossn:tetris');
	$contents['content'] = ossn_plugin_view('tetris/pages/tetris');
	$content = ossn_set_page_layout('contents', $contents);
	echo ossn_view_page($title, $content);
}

ossn_register_callback('ossn', 'init', 'ossn_tetris_init');
