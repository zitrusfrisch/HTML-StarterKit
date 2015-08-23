# HTML-StarterKit, version v3.1
A simple, modular HTML5 template to kick off your responsive websites – now scss’ified!

+ **Demo:** [http://zitrusfrisch.de/html-starterkit/demo](http://zitrusfrisch.de/html-starterkit/demo)  
+ **Website:** [http://zitrusfrisch.de/html-starterkit](http://zitrusfrisch.de/html-starterkit) 
+ **Facebook:** [http://facebook.com/htmlstarterkit](http://facebook.com/htmlstarterkit)  
+ **Twitter:** [@htmlstarterkit](http://twitter.com/htmlstarterkit)  

#### Speed up your workflow
HTML-StarterKit contains everything you need to create responsive websites: Stop caring about doctypes, ubiquitous HTML parts or linking to the latest jQuery version – just start developing.

#### Modern web standards
HTML-StarterKit uses super-modern HTML5 code, including new, semantic selectors. And by using a fluid grid, flexible elements and media queries it is responsive out of the box. See the [demo page](http://zitrusfrisch.com/html-starterkit/demo).

#### It's free!
HTML-StarterKit is free for both personal and commercial usage under the terms of the [MIT license](http://opensource.org/licenses/MIT).

## HTML-StarterKit contains the following files

#### index.html
HTML5 based index file with common meta tags, links to CSS- and javascript files and exemplary content.

#### styles.css / styles.min.css  
Compiled stylesheet built from SCSS files.

#### functions.js / functions.min.js
Use functions.js for your personal javascripts and functions.

#### SCSS  
The scss folder contains all styles, including Normalize CSS-Reset, basic styles and placeholders for frequently used elements as well as Media Queries for common viewports. Following a modular approach each section and module has its own scss file. HTML-StarterKit comes with a set of handsome mixins ready to use.  
  
## Version-Log  

#### Version v3.1  
+ HTML-StarterKit now includes a basic accordion and expandable content that works with super little js
+ New button styles, including three different sizes, ghost buttons and a combo-button 
+ Simplified file hierarchy by moving all scss partials to 'components'
+ Optimized a hell lot more for performance sake (removed jQuery for example… :)

#### Version v3.0  
+ HTML-StarterKit now comes written in SCSS (Very beta! Feel free to comment)
+ Rather than limiting the body to a fixed width, now each section has its own inner-wrapper (.) for more flexibility.
+ Supported IE version: 9+ 

#### Version v2.5  
+ Added the new main-element to global CSS-Reset
+ Added a new version of Respond.js (to support the new main-element)

#### Version v2.4  
+ Aaaaand… Modernizr is off again. Just because there ARE cases you won't need it. One request / blocking element saved.
+ If you care about IE8: HTMLShiv is now included inline in the head, wrapped in a conditional comment (previously part of Modernizr). Another request / blocking element saved.
+ Added "-moz-osx-font-smoothing: grayscale;" to the CSS to improve font rendering in Firefox on Mac OS X 

#### Version v2.3
+ Added Box-Sizing Reset in CSS
+ Re-added modernizr.js as there is hardly any case you don't need it
+ Minor performance tweaks and bug-fixing

#### Version v2.2
+ Switched font-size unit to rem (including fallback for IE8) for FlexRows and FlexForm
+ Removed modernizr.js and added html5shiv.js instead
+ Removed all apple-touch-icons but one
+ Fixed link to local jQuery fallback
+ Moved font-related declarations from ‘body’ to ‘html’
+ Minor CSS changes

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

