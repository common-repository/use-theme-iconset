=== Plugin Name ===
Contributors: jmini
Donate link: http://jmini.fr/donate
Tags: attachment, icon, icons, 
Requires at least: 2.1
Tested up to: 2.6.3
Stable tag: trunk

Use a directory called "iconset" in your theme directory for the files icons (instead of wp-includes/images/crystal)


== Description ==

The default icons for attachment are stored the following directory: wp-includes/images/crystal

This icons are used when files needs to be display (media library, attachment pages…).

With this small plugin you are able to change the icon directory with a personal one. This is interesting if you want to provide custom icons.


== Installation ==

1. Prepare your icons in a directory called `iconset/` in your active theme directory.
1. Upload `use_theme_iconset.php` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.


== Frequently Asked Questions ==

= Which files should be in the iconset directory? =

You have to provide icons for the different types of files. You can provide them as PNG file. 

The original icons have following dimension: 46px width and 60px height.
It might be important to keep this dimension in order to preserve the general layout of WordPress interfaces.

WordPress manage 9 different types of files :

* archive
* audio
* code
* default
* document
* interactive
* spreadsheet
* text
* video

You have to provide one icon for each type of file.


== Screenshots ==

1. Attachment page without and with the plugin
2. Media library without and with the plugin


