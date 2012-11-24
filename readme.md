# zitrusfrisch HTML-StarterKit v1.01

## Alles was Du zum Start Deiner HTML5 Website brauchst
Das zitrusfrisch HTML-StarterKit ist eine Vorlage für responsive HTML5 Websites und enthält alles Notwendige für einen reibungslosen Start. Die wichtigsten Dateien im Überblick:

**index.php**  
HTML-Rahmen mit Meta-Tags, CSS , jQuery und weiteren Javascripts, außerdem Demo-Inhalte, die mittels DEMO_content.inc.php inkludiert werden.

**CSS/base.css**  
Basis Stylesheet mit CSS-Reset und weiteren grundlegenden Styling-Angaben.

**CSS/styles.css**  
Zentrales Stylesheet mit Platzhaltern für gängige Module und MediaQueries

**js/functions.js**  
Platz für individuelle Javascripts  

**js/ios.js**  
Mit der iOS.js werden verschiedene Darstellungsfehler im Zusammenhang mit responsiven Designs auf iOS-Devices gefixt:  
[iOS Viewport Scaling Bug](https://gist.github.com/901295)  
[Optimiertes Placeholder Attribut für iOS 6 Devices](http://mooki83.tistory.com)  
-Hide URL-Bar  
  
**js/libs/jquery-1.8.2.min.js**  
Der Klassiker! Falls die Remote-Abfrage fehlschlägt, wird dieser lokale Fallback eingebunden. Mehr auf http://jquery.com/  
  
**js/libs/modernizr.js**  
[Modernizr](http://modernizr.com/) ist eine JavaScript Library, die den Browser auf HTML5 und CSS3 Features überprüft. (**Achtung!** Das zitrusfrisch HTML-StarterKit enthält die Development-Version inklusive aller Features.)  
  
**js/libs/polyfills.js**  
Sammlung verschiedener jQuery Plugins, die älteren IE-Versionen aktuelle HTML5- und CSS3-Features "beibringen": 

*jQuery Placeholder Plugin*  
Simuliert das Placeholder-Attribut für Input-Felder in älteren Browsern. Mehr auf [https://github.com/mathiasbynens/jquery-placeholder](https://github.com/mathiasbynens/jquery-placeholder)  
  
*Selctivizr und Selctivizr-Extended*
Diese Plugins von Keith Clark machen neue CSS-Pseudoklassen, wie nth-child() und nth-of-type auch im IE verfügbar. Mehr auf [http://selectivizr.com](http://selectivizr.com) und [http://github.com/keithclark/JQuery-Extended-Selectors](http://github.com/keithclark/JQuery-Extended-Selectors)
  
**js/libs/respond.js**  
Damit ältere Browser bei MediaQueries nicht streiken, dafür sorgt [respond.js](http://j.mp/respondjs), ein jQuery Plugin von Scott Jehl.