=== Miln Help Book Search ===
Tags: Mac, help book, Apple, application, HPDBookKBURL, HPDBookKBProduct, Miln
Requires at least: 3.3
Tested up to: 3.9
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Author: graham.miln (Graham Miln)
Contributors: graham.miln
Author URI: http://miln.eu/
Plugin URI: http://miln.eu/open/helpbooksearch/
Donate link: http://miln.eu/open/donate

Add WordPress content to your Mac application's help book.

== Description ==

Miln Help Book Search adds the ability for WordPress to return appropriately formatted XML output to Apple's Help Viewer application on Mac OS X.

[Help books on Mac OS X](http://developer.apple.com/documentation/Carbon/Conceptual/ProvidingUserAssitAppleHelp/authoring_help/authoring_help_book.html) are bundles of crafted HTML included inside Mac applications.

A good Mac application always includes a help book.

A great application provides dynamic help book content offering users advice gathered not only locally from static files within the help book but also from web based articles.

Use Miln Help Book Search to add your WordPress blog content into your Mac application's help book. Inclusion with your Mac help book is simple, set the HPDBookKBURL key to a tweaked WordPress search URL.

By adding results from your web site directly into your Mac application, you can provide constantly updated information, help, and advice. You can use your WordPress search traffic to find out what users need help on.

== Installation ==

Miln Help Book Search is a standard WordPress plug-in. The plug-in can be installed through your WordPress dashboard:

1. Log into WordPress.
1. Go to **Plugins** > **Add New**
1. Search for "Miln"
1. Select **Install Now** for "Miln Help Book Search"
1. Select **Activate Plugin**

* WordPress Manual Installation

1. Upload the `miln-help-book-search` directory to the `/wp-content/plugins/` directory;
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Your help book Knowledge Base URL (`HPDBookKBURL`) is now available at: http://www.example.com/helpbook/?s=

* Mac Application

1. In your help book Info.plist, add two key pairs:

 - HPDBookKBProduct = productname
 - HPDBookKBURL = http://www.example.com/helpbook/?s='query'&amp;l='lang'&amp;p='product'

== Changelog ==

= 1.0.0 =
* Initial release.
