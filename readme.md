# HTML-StarterKit, version v2.1
A simple, modular HTML5 template for your responsive websites.

+ **Demo:** [http://zitrusfrisch.de/html-starterkit/demo](http://zitrusfrisch.de/html-starterkit/demo)  
+ **Website:** [http://zitrusfrisch.de/html-starterkit](http://zitrusfrisch.de/html-starterkit)  
+ **Twitter:** [@htmlstarterkit](http://twitter.com/htmlstarterkit)  

#### Speed up your workflow
HTML-StarterKit contains everything you need to create responsive websites: Stop caring about doctypes, ubiquitous HTML parts or linking to the latest jQuery version – just start designing.

#### Modern web standards
HTML-StarterKit uses super-modern HTML5 code, including new, semantic selectors. And by using a fluid grid, flexible elements and media queries it is responsive out of the box. See the [demo page](http://zitrusfrisch.de/html-starterkit/demo).

#### It's free!
HTML-StarterKit is free for both personal and commercial usage under the terms of the [MIT license](http://opensource.org/licenses/MIT).

## HTML-StarterKit contains the following files

#### index.php
HTML5 based index file with common meta tags, links to CSS- and javascript files and exemplary content.

#### styles.css
Stylesheet with individual CSS-Reset, basic styles and placeholders for frequently uses selectors, classes und ids as well as Media Queries for common viewports.

#### jquery.js
[jQuery](http://jquery.com/) – required as base for most of the plugins and polyfills, included via Google’s CDN with a local fallback.

#### modernizr.js
[Modernizr](http://modernizr.com/) is a javascript library, that runs on page load to detect browser features and adds classes to the element of the website. _You may want to build your own production version of Modernizr with just the tests you need._

#### ios.js
iOS.js contains fixes for iOS related bugs: [iOS Viewport Scaling Bug](https://gist.github.com/901295), [Placeholder Bug in iOS 6](http://mooki83.tistory.com) and a script to hide the URL bar [Doing it right: skipping the iPhone url bar](http://remysharp.com/2010/08/05/doing-it-right-skipping-the-iphone-url-bar/) (which sadly does not work in iOS7 anymore).

#### Polyfills
Various plugins to enhance older versions of Internet Explorer and make them behave nicely: [Selctivizr](http://selectivizr.com) and [Selctivizr-Extended](http://github.com/keithclark/JQuery-Extended-Selectors) to add CSS3 psuedoclasses, [Respond.js](http://j.mp/respondjs) for Media Queries and a [Placeholder Plugin](https://github.com/mathiasbynens/jquery-placeholder).

#### functions.js
Use functions.js for your personal javascripts and functions.

## Version-Log  

#### Version v2.1 
+ NEW! Responsive tables based on Stephen Hays approach – which is just plain brilliant (http://www.the-haystack.com/2013/09/24/responsive-scrollable-tables/)
+ Updated jQuery to version 1.10.2 (latest version that works with older IE versions)
+ jQuery now loaded via Google CDN with local fallback
+ Splitted up polyfills.js and moved files into separate folder to simplify individual usage.

#### Version v2.02
+ Performance tweaks (optimized images, included additional minified styles.css and removed webfonts – yeah, again)

#### Version v2.01
+ Minor bugfix

#### Version v2.0
+ NEW! English version! 
+ NEW! FlexRow cols now float using _display: inline-block_ rather than _float_ and have a fixed width gutter (see faux margin with borders for more on this: http://codepen.io/zitrusfrisch/pen/cKDLj). Say “Bye bye” to Clearfix! :)
+ NEW! FlexForm, a simple, responsive form template including new HTML5 input types, like URL, search, tel and others.
+ Replaced all IDs by classes (e.g. #masthead is now .masthead) to avoid specificity
+ Added new Apple-Touch-Icons sizes introduced with iOS7
+ Screwed IE7 support: All fixes and hacks for IE7 have been removed from style.css

#### Version v1.5  
+ Merged base.css into styles.css to save a http-request
+ Webkit browsers now hide placeholder when focussing input fields
+ Added .htacces-file for gzipping, caching and other stuff to speed up performance (based on https://github.com/cferdinandi/htaccess)  

#### Version v1.4
+ Removed hgroup and dialog tags from base.css as they were dropped from HTML5 spec  
+ Switched order of Modernizr and CSS files (Modernizr now loads after CSS as recommended by the Modernizr creators)

#### Version v1.3
+ NEW! Introducing FlexRows, a flexible grid to get your content in shape.
+ Removed web fonts
+ Switched from PHP to HTML
+ Deleted <dialog> from base.css (deprecated)

#### Version v1.2
+ Added Mediaquery for Retina / High DPI Displays (https://gist.github.com/3446599)
+ Updated jQuery to version 1.9.1

#### Version v1.1
+ Updated jQuery to version 1.9.0
+ Removed empty placeholder pseudoclass (Triggers weird bug in Firefox)
+ Added links for Favicon and Apple-Touch-Icons to the header and DEMO-Icons

#### Version v1.06
+ Back to Respond.js (see version v1.04), as the CSS3-Mediaqueries script seems to have issues in combination with Selectivizr plugins.
+ Merged all IE polyfills into polyfills.js
+ Bug fixed in iOS.js

#### Version v1.05
+ Small improvements

#### Version v1.04
+ Respond.js durch CSS3-Mediaqueries.js ersetzt

#### Version v1.03
+ Optimized fix for iOS Scaling Bug

#### Version v1.02
+ Updated jQuery to version 1.8.3
+ Small bugfixes

#### Version v1.01
+ Small bugfixes

#### Version v1.0
+ Initial public release

