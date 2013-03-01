=== Plugin Name ===
Contributors: dustyf
Donate link: http://example.com/
Tags: email, spam, antispam
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a shortcode which converts email addresses to HTML entities to block spambots.

== Description ==

This plugin will add a shortcode that can be used to stop spambots from harvesting emails entered into your WordPress editor while creating pages or posts.

To use, just wrap your email address in the [email] shortcode:

[email]you@yourdomain.com[/email]

The result will be a hyperlinked email address that can be clicked on to send email.

The plugin uses WordPress's built-in antispambot() function which converts email address characters to HTML entities which are not read by spambots, but can be viewed properly in the browser.  For more info on the WordPress function read up in the Codex - http://codex.wordpress.org/Function_Reference/antispambot

== Installation ==

1. Download through the WordPress plugin installer
1. Activate the plugin through the 'Plugins' menu in WordPress

1. Upload `/wp-spambot/` and it's contents to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Wrap your email address in the [email] shortcode

== Frequently Asked Questions ==

= How do I make it work? =

To use, just wrap your email address in the [email] shortcode:

[email]you@yourdomain.com[/email]


== Screenshots ==



== Changelog ==

= 1.0 =
* Added a shortcode that can be used when editing pages or posts.
