<?php
/*
Plugin Name: Use Theme Icon Set
Plugin URI: http://docs.jmini.fr/code/wordpress-use_theme_iconset
Description: Use a directory called iconset in your theme directory for the files icons (instead of wp-includes/images/crystal)
Version: 1.0
Author: Jeremie Bresson
Author URI: http://jmini.fr/

---
Copyright 2008 Jeremie BRESSON (jmini@jmini.fr)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
*/

function use_theme_iconset($cnt) {
	if (is_dir(get_template_directory().'/iconset')) {
		if (is_dir($cnt)) {
			return get_template_directory().'/iconset';
		} else {
			return get_template_directory_uri().'/iconset';
		}
	} else {
		return $cnt;
	}
}
add_action('icon_dir', 'use_theme_iconset');
add_action('icon_dir_uri', 'use_theme_iconset');

?>