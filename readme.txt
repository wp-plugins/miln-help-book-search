=== Miln Help Book Search ===
Tags: Mac, help book, Apple, application, HPDBookKBURL, HPDBookKBProduct, Miln
Requires at least: 3.3
Tested up to: 3.3
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Contributors: graham.miln

Add WordPress content to your Mac application's help book.

== Description ==

Miln Help Book Search adds the ability for WordPress to return appropriately formatted XML output to Apple's Help Viewer application on Mac OS X.

[Help books on Mac OS X](http://developer.apple.com/documentation/Carbon/Conceptual/ProvidingUserAssitAppleHelp/authoring_help/authoring_help_book.html) are bundles of crafted HTML included inside Mac applications.

A good Mac application always includes a help book.

A great application provides dynamic help book content offering users advice gathered not only locally from static files within the help book but also from web based articles.

Use Miln Help Book Search to add your WordPress blog content into your Mac application's helpbook. Inclusion with your Mac help book is simple, set the HPDBookKBURL key to a tweaked WordPress search URL.

By adding results from your web site directly into your Mac application, you can provide constantly updated information, help, and advice. You can use your WordPress search traffic to find out what users need help on.

== Installation ==

* WordPress

1. Upload the `miln-help-book-search` directory to the `/wp-content/plugins/` directory;
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Your help book Knowledge Base URL (`HPDBookKBURL`) is now available at: http://www.example.com/helpbook/?s=

* Mac Application

1. In your help book Info.plist, add two key pairs:

`<key>HPDBookKBURL</key>`
`<string>http://www.yoursite.com/helpbook/?s='query'&amp;l='lang'&amp;p='product'</string>`
`<key>HPDBookKBProduct</key>`
`<string>productname</string>`

== Changelog ==

= 1.0 =
* Initial release.
