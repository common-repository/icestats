<?php
/*
Plugin Name: IceStats
Plugin URI: http://ronnybull.com/2011/08/03/icestats/
Description: Simple Sidebar Widget Plugin that  provides IceCast service status, artist name, and song title as well as a stream link.
Version: 1.3
Author: Ronny L. Bull
Author URI: http://ronnybull.com
License: GPL2
*/

/*  Copyright 2011 Ronny L. Bull (email : ronny@ronnybull.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Admin Menu
function icestats_admin() {
	include('icestats_settings.php');
}

function icestats_admin_actions() {
	add_options_page("IceStats", "IceStats", 1, "IceStats", "icestats_admin");

}

add_action('admin_menu', 'icestats_admin_actions');

//Stats Display
function icestats() {
	include('icestats_display.php');
}

//Widget
function widget_icestats($args) {
	extract($args);
	echo $before_widget;
	echo $before_title;?>Now Streaming<?php echo $after_title;
	icestats();
	echo $after_widget;
}

function icestats_init() {
	register_sidebar_widget(__('Now Streaming'), 'widget_icestats');

}

add_action("plugins_loaded", "icestats_init");

?>
