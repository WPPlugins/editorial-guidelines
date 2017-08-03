<?php
/*
Plugin Name: Editorial Guidelines
Plugin URI: http://www.microformatica.com/
Description: Editorial Guidelines shows a little box with editorial guidelines next to the post edit screen.
Version: 1.2
Author: Micro Formatica
Author URI: http://www.microformatica.com/
License: GPL
*/

/*
Copyright (C) 2010 Micro Formatica

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

add_action('admin_menu', 'editorialguidelines_admin_actions');

add_action('admin_menu', 'editorialguidelines_custom');



function editorialguidelines_custom () {
add_meta_box("editorialguidelines_meta", __('Editorial Guidelines', 'editorialguidelines'), "editorialguidelines_meta", "post", 'side', 'core');
add_meta_box("editorialguidelines_meta", __('Editorial Guidelines', 'editorialguidelines'), "editorialguidelines_meta", "page", 'side', 'core');

}

function editorialguidelines_admin_actions()
{
if ( current_user_can('manage_options') ) {
    add_menu_page("Editorial Guidelines", "Editorial Guidelines", 1,"editorialguidelines", "editorialguidelines_menu");
}
}

function editorialguidelines_meta ( ) {
echo  editorialguidelines_resetencap(base64_decode(get_option("editorial-guidelines")));

if ( current_user_can('manage_options') ) {
echo "\n<br /><a href=\"" . get_bloginfo('siteurl') . "/wp-admin/admin.php?page=editorialguidelines\">Edit this</a>";
}

}

function editorialguidelines_menu()
{
add_action( 'admin_init', 'register_editorialguidelines_settings' );

include "editorialguidelines_admin.php";

}

function register_editorialguidelines_settings () {
	register_setting( 'editorial-guidelines-group', 'editorial-guidelines' );
}


function editorialguidelines_replacebr ( $string ) {
$return = "";

$return = $string;
//$return = str_replace("\r", "\n", $return);

$return = nl2br ($return);

$return = str_replace("</li><br />", "</li>", $return);
$return = str_replace("</ul><br />", "</ul>", $return);
$return = str_replace("<ul><br />", "<ul>", $return);
return $return;
}

function editorialguidelines_resetencap ( $string ) {
$return = $string;

$return = str_replace("\\\"", "\"", $return);
$return = str_replace("\\'", "'", $return);
return $return;
}

