# HTML-StarterKit, version v2.0
A simple HTML5 template for your responsive websites.

**Visit the website: [http://zitrusfrisch.de/html-starterkit/](http://zitrusfrisch.de/html-starterkit/)**

## Speed up your workflow with HTML-StarterKit
HTML-StarterKit contains everything you need to create your responsive website: Never care about doctypes and ubiquitous HTML parts, linking to jQuery or the file structure again – start designing immediately.

## HTML-StarterKit uses modern standards like HTML5 and CSS3
HTML-StarterKit features valid HTML5, including new, semantic selectors. And by using media queries and the FlexRow grid it is even responsive!

## The "Do, whatever you want"-license
HTML-StarterKit is free to use for personal and commercial use.

## HTML-StarterKit contains the following files

**index.php**
HTML5 based index with important meta tags, links to CSS- and javascript files and exemplary content.

**styles.css**
Stylesheet with individual CSS-Reset, basic styles and placeholders for frequently uses selectors, class und ids as well as Media Queries for the most common viewports.

**jquery.js**
[jQuery](http://jquery.com/) - required as base for most of the plugins and polyfills.

**modernizr.js**
[Modernizr](http://modernizr.com/) is a javascript library, that runs on page load to detect browser features and adds classes to  the <html> element of the website.
*You may want to build your own production version of Modernizr with just the tests you need.*

**ios.js**
iOS.js contains fixes for iOS related bugs: [iOS Viewport Scaling Bug](https://gist.github.com/901295), [Placeholder Bug in iOS 6](http://mooki83.tistory.com) and a script to hide the URL bar [Doing it right: skipping the iPhone url bar](http://remysharp.com/2010/08/05/doing-it-right-skipping-the-iphone-url-bar/).

**polyfills.js**
Various plugins to enhance older versions of InternetExplorer and behave nicely, which can be activated optionally: [Selctivizr](http://selectivizr.com) and [Selctivizr-Extended](http://github.com/keithclark/JQuery-Extended-Selectors) to add CSS3 psuedoclasses, [Respond.js](http://j.mp/respondjs) for Media Queries and a [Placeholder Plugin](https://github.com/mathiasbynens/jquery-placeholder).

**functions.js**
Use functions.js for your personal javascripts and functions.


## Version-Log  

**Version v2.0** 
+ NEW! English version! 
+ NEW! FlexRow cols now float using _display: inline-block_ rather than _float_ and have a fixed width gutter (see faux margin with borders for more on this: http://codepen.io/zitrusfrisch/pen/cKDLj). Say "Bye bye" to Clearfix! :)
+ NEW! FlexForm, a simple, responsive form template including new HTML5 input types, like URL, search, tel and others.
+ Replaced all IDs by classes (e.g. #masthead is now .masthead) to avoid specificity
+ Added new Apple-Touch-Icons sizes introduced with iOS7
+ Screwed IE7 support: All fixes and hacks for IE7 have been removed from style.css

**Version v1.5**  
+ Merged base.css into styles.css to save a http-request
+ Webkit browsers now hide placeholder when focussing input fields
+ Added .htacces-file for gzipping, caching and other stuff to speed up performance (based on https://github.com/cferdinandi/htaccess)  

**Version v1.4**
+ Removed hgroup and dialog tags from base.css as they were dropped from HTML5 spec  
+ Switched order of Modernizr and CSS files (Modernizr now loads after CSS as recommended by the Modernizr creators)

**Version v1.3**
+ NEW! Introducing FlexRows, a flexible grid to get your content in shape.
+ Removed web fonts
+ Switched from PHP to HTML
+ Deleted <dialog> from base.css (deprecated)

**Version v1.2**
+ Added Mediaquery for Retina / High DPI Displays (https://gist.github.com/3446599)
+ Updated jQuery to version 1.9.1

**Version v1.1**
+ Updated jQuery to version 1.9.0
+ Removed empty placeholder pseudoclass (Triggers weird bug in Firefox)
+ Added links for Favicon and Apple-Touch-Icons to the header and DEMO-Icons

**Version v1.06**
+ Back to Respond.js (see version v1.04), as the CSS3-Mediaqueries script seems to have issues in combination with Selectivizr plugins.
+ Merged all IE polyfills into one file polyfills.js
+ Bug fixed in iOS.js

**Version v1.05**
+ Small improvements

**Version v1.04**
+ Styling für Search Inputs in Webkit-Browsern wieder integriert (s. Version v1.03)
+ Respond.js durch CSS3-Mediaqueries.js ersetzt

**Version v1.03**
+ Optimized fix for iOS Scaling Bug
+ Removed styling for search inputs in Webkit browsers from base.css

**Version v1.02**
+ Updated jQuery to version 1.8.3
+ Small Bug-Fixes

**Version v1.01**
+ Small Bug-Fixes

**Version v1.0**
+ Initial Release

