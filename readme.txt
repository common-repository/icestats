=== IceStats ===
Contributors: ronnybull
Donate link: https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=pH60a7OT4F--GFOpW5vzXW5rRoGSgPlxsxbyFLdqAPAdVhp5ta41NbKPTkO&dispatch=5885d80a13c0db1f8e263663d3faee8d1e83f46a36995b3856cef1e18897ad75
Tags: icecast
Requires at least: 2.0.2
Tested up to: 4.1
Stable tag: 1.3

Plugin to display the statistics of an Icecast server.

== Description ==

The IceStats plug-in checks the status of the IceCast server, and if it is online it will display the current artist, song title and a link to the stream.

After activation the plug-in will show up in your widget menu, and all of the plug-ins settings can be managed in the menu located at Settings -> Icestats.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `icestats` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Setup your server information in the Settings -> Icecast Menu
1. Enable the Widget in the Widgets menu

== Frequently Asked Questions ==

Q. Does this plugin work with shoutcast?
A. This plugin was developed for Icecast and tested only with Icecast.

== Screenshots ==
`/tags/1.3/screenshot-1.png`


== Changelog ==

= 1.3 =
* Updated readme to fix versioning on wordpress.org site

= 1.2 =
* Updated to work with new Icecast JSON interface

= 1.1 =
* Added listener count to display

= 1.0 =
* Stable Release

== Upgrade Notice ==

= 1.3 =
* Minor readme update

= 1.2 =
Fixes broken artist, song, and listener count display due to Icecast XML to JSON stats output change.

= 1.1 =
Adds listener count

