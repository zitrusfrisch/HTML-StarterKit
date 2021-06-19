# HTML-StarterKit, version v4.3
A simple, modular HTML5 template to kick off your responsive websites – written in SCSS and based on the [BEM naming convention](http://getbem.com/)

+ **Website:** [http://zitrusfrisch.de/html-starterkit](http://zitrusfrisch.de/html-starterkit) 
+ **Demo:** [http://zitrusfrisch.de/html-starterkit/demo](http://zitrusfrisch.de/html-starterkit/demo)  
+ **Facebook:** [http://facebook.com/htmlstarterkit](http://facebook.com/htmlstarterkit)  
+ **Twitter:** [@htmlstarterkit](http://twitter.com/htmlstarterkit)  

#### Speed up your workflow
HTML-StarterKit contains everything you need to create responsive websites: Stop caring about doctypes and ubiquitous HTML parts – just start developing.

#### Modern web standards
HTML-StarterKit is based on HTML5, styled using SCSS and is completely responsive out of the box. See the [demo page](http://zitrusfrisch.com/html-starterkit/demo).

#### It's free!
HTML-StarterKit is free for both personal and commercial usage under the terms of the [MIT license](http://opensource.org/licenses/MIT). So fork away! :-)

## HTML-StarterKit contains the following files

#### index.html
HTML5 based index file with common meta tags, links to CSS- and javascript files and exemplary content.

#### styles.css / styles.min.css  
Compiled stylesheets built from SCSS files.

#### functions.js / functions.min.js
Use functions.js for your personal scripts and functions.

#### SCSS  
The scss folder contains all styles, including Normalize CSS-Reset, basic styles and placeholders for frequently used UI elements as well as media query settings for common viewports. Following a modular approach each section and module has its own scss file. HTML-StarterKit comes with a set of handsome mixins and functions ready to use.  
  
## Version-Log  

#### Version v4.3 (18.06.2021) 
It's been a long time. Couple of minor updates. Nothing big.

#### Version v4.2 (09.02.2020) 
+ Updated form components, including custom style select dropdowns, checkboxes and radio buttons 
+ Extended `.grid__cell—offset` to `.grid__cell—offset-l` and  `.grid__cell—offset-r` to add grid-based margins before and after the cell 
+ Optional sticky masthead 
+ Applied proper BEM structure to font weight and family variable names 
+ Removed `meta name="description"` from HTML head 
+ Updated `normalize.css` to version 8.0.1 
+ Minor fixes and enhancements 

#### Version v4.1 (19.03.2019)  
+ Added CSS classes for font-sizes and font-families for more styling flexibility 
+ Minor fixes and enhancements 

#### Version v4.0 (10.03.2019)  
+ Fully revamped grid-system based on flexbox 
+ ~~Node Build script (hat-tip to @niklaskoehler!), solves Issue #4~~ Leak! :-) Comes in future version.
+ New spacing classes mt--x (margin-top, specify with s, m, l, etc.) and mb--x (margin-bottom)
+ Gathered all settings for global styles and components in settings.scss 
+ Other minor optimizations and bug fixes 

#### Version v3.9 (18.06.2018)  
+ Back to S, M, L system for font-size and line-height variables 
+ Moved utilities.scss from components to core 
+ Updated normalize.css to version 8.0.0  
+ Bugfixes  

#### Version v3.8 (15.05.2018)  
+ Back to S, M, L system for width and spacing variables 
+ Bugfixes 

#### Version v3.7 (25.03.2018)  
+ Improved grid scss structure and new CSS classes to offset grid-cells individually  

#### Version v3.6.2 (18.01.2017)  
+ Added ```css
image-rendering: -webkit-optimize-contrast;``` fix to optimise  quality of scaled images in Chrome (see https://medium.freecodecamp.org/-898b38a6c0e1 fore more details on this)

#### Version v3.6.1 (10.09.2017)  
+ Bugfixes

#### Version v3.6 (07.09.2017)  
+ Create highly dynamic grids with freshly integrated offset classes for grid cells! Following the same naming pattern as the grid cells' widths, it's super-easy now to offset cells individually. (Sorry, for the bloated grid.scss: There's probably smarter ways to do this, but basic stuff tends to work best anyways. ;-) 
+ Variables and class names for screenwidths now use display-types instead of s, m, l etc., e.g. ```grid__cell--huge-screen-1-6```
+ Added more (bigger) spacing settings and classes
+ Removed ```--s``` and ```--l``` modifiers for grid and gutter (barely used them) 
+ Removed card component 
+ New font size function lets you set font-size and line-height individually 
+ Mediabox component can now be used with (embedded) videos
+ Minor fixes and enhancements 

#### Version v3.5 (06.10.2016)  
+ Exchanged color map with a set of color variables
+ Cells within a guttered grid now have a bottom margin equal to the gutter
+ Minor fixes and enhancements

#### Version v3.4 (22.04.2016)  
+ **New grid system**! Control width of cols for each breakpoint with CSS classes
+ Added CSS classes add margin-bottom to elements  
+ Fixed link to normalize in base.scss (Thanks @chriswhawkins)
+ Minor fixes and enhancements

#### Version v3.3 (30.01.2016)  
+ Better file hierarchy: All globals are now stored separately in scss/core
+ Inline media queries
+ Added various CSS classes for common text styles (light, small, etc.) 
+ Isolated print styles in one file
+ Even smarter color management with color variables and a color map for more detailed coloring.
+ New card style component
+ Touch-optimized form input fields
+ Removed IE-specific Meta-Tags and paths to favicon and apple-touch-icon from HTML head
+ Inline SVG Logo (finally!)
+ Minor fixes and enhancements

#### Version v3.2 (17.01.2016)  
+ Now using the BEM methodology, a „highly useful, powerful and simple naming convention to make your front-end code easier to read and understand, easier to work with, easier to scale, more robust and explicit and a lot more strict.“ Read more at [getbem.com](http://getbem.com)
+ Color variables organized in a Sass map
+ Changed grid naming from „flexrow“ to „grid“ and „col“ to „grid__cell“
+ Extended grid settings: You can now set various gutter widths by class name
+ Removed modules „Expandable“ and „Accordion“ since they are not necessarily needed in your project (You can still grab them on Codepen though: [Expandable](http://codepen.io/zitrusfrisch/pen/LGzBPM) and [Accordion](http://codepen.io/zitrusfrisch/pen/VeMdoN)). 
+ Minor fixes and enhancements

#### Version v3.1 (23.08.2015)  
+ HTML-StarterKit now includes a basic accordion and expandable content that works with super little js
+ New button styles, including three different sizes, ghost buttons and a combo-button 
+ Simplified file hierarchy by moving all scss partials to ‚components‘
+ Optimized a hell lot more for performance sake (removed jQuery for example… :)

#### Version v3.0 (04.05.2015)  
+ HTML-StarterKit now comes written in SCSS (Very beta! Feel free to comment)
+ Rather than limiting the body to a fixed width, now each section has its own inner-wrapper (.) for more flexibility.
+ Supported IE version: 9+ 

#### Version v2.5 (05.11.2014)  
+ Added the new main-element to global CSS-Reset
+ Added a new version of Respond.js (to support the new main-element)

#### Version v2.4 (03.08.2014)  
+ Aaaaand… Modernizr is off again. Just because there ARE cases you won't need it. One request / blocking element saved.
+ If you care about IE8: HTMLShiv is now included inline in the head, wrapped in a conditional comment (previously part of Modernizr). Another request / blocking element saved.
+ Added "-moz-osx-font-smoothing: grayscale;" to the CSS to improve font rendering in Firefox on Mac OS X 

#### Version v2.3 (30.03.2014)
+ Added Box-Sizing Reset in CSS
+ Re-added modernizr.js as there is hardly any case you don't need it
+ Minor performance tweaks and bug-fixing

#### Version v2.2 (13.11.2013)
+ Switched font-size unit to rem (including fallback for IE8) for FlexRows and FlexForm
+ Removed modernizr.js and added html5shiv.js instead
+ Removed all apple-touch-icons but one
+ Fixed link to local jQuery fallback
+ Moved font-related declarations from ‘body’ to ‘html’
+ Minor CSS changes

#### Version v2.1 (13.10.2013) 
+ NEW! Responsive tables based on Stephen Hays approach – which is just plain brilliant (http://www.the-haystack.com/2013/09/24/responsive-scrollable-tables/)
+ Updated jQuery to version 1.10.2 (latest version that works with older IE versions)
+ jQuery now loaded via Google CDN with local fallback
+ Splitted up polyfills.js and moved files into separate folder to simplify individual usage.

#### Version v2.02 (06.10.2013)
+ Performance tweaks (optimized images, included additional minified styles.css and removed webfonts – yeah, again)

#### Version v2.01 (01.10.2013)
+ Minor bugfix

#### Version v2.0 (30.09.2013)
+ NEW! English version! 
+ NEW! FlexRow cols now float using _display: inline-block_ rather than _float_ and have a fixed width gutter (see faux margin with borders for more on this: http://codepen.io/zitrusfrisch/pen/cKDLj). Say “Bye bye” to Clearfix! :)
+ NEW! FlexForm, a simple, responsive form template including new HTML5 input types, like URL, search, tel and others.
+ Replaced all IDs by classes (e.g. #masthead is now .masthead) to avoid specificity
+ Added new Apple-Touch-Icons sizes introduced with iOS7
+ Screwed IE7 support: All fixes and hacks for IE7 have been removed from style.css

#### Version v1.5 (31.08.2013)  
+ Merged base.css into styles.css to save a http-request
+ Webkit browsers now hide placeholder when focussing input fields
+ Added .htacces-file for gzipping, caching and other stuff to speed up performance (based on https://github.com/cferdinandi/htaccess)  

#### Version v1.4 (17.06.2013)
+ Removed hgroup and dialog tags from base.css as they were dropped from HTML5 spec  
+ Switched order of Modernizr and CSS files (Modernizr now loads after CSS as recommended by the Modernizr creators)

#### Version v1.3 (25.03.2013)
+ NEW! Introducing FlexRows, a flexible grid to get your content in shape.
+ Removed web fonts
+ Switched from PHP to HTML
+ Deleted <dialog> from base.css (deprecated)

#### Version v1.2 (10.02.2013)
+ Added Mediaquery for Retina / High DPI Displays (https://gist.github.com/3446599)
+ Updated jQuery to version 1.9.1

#### Version v1.1 (23.01.2013)
+ Updated jQuery to version 1.9.0
+ Removed empty placeholder pseudoclass (Triggers weird bug in Firefox)
+ Added links for Favicon and Apple-Touch-Icons to the header and DEMO-Icons

#### Version v1.06 (02.01.2013)
+ Back to Respond.js (see version v1.04), as the CSS3-Mediaqueries script seems to have issues in combination with Selectivizr plugins.
+ Merged all IE polyfills into polyfills.js
+ Bug fixed in iOS.js

#### Version v1.05 (17.12.2012)
+ Small improvements

#### Version v1.04 (12.12.2012)
+ Respond.js durch CSS3-Mediaqueries.js ersetzt

#### Version v1.03 (04.12.2012)
+ Optimized fix for iOS Scaling Bug

#### Version v1.02 (26.11.2012)
+ Updated jQuery to version 1.8.3
+ Small bugfixes

#### Version v1.01 (24.11.2012)
+ Small bugfixes

#### Version v1.0 (20.12.2012)
+ Initial public release

