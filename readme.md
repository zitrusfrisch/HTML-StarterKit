# zitrusfrisch HTML-StarterKit v1.04

## Alles was Du zum Start Deiner responsiven HTML5 Website brauchst
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
+ [iOS Viewport Scaling Bug](https://gist.github.com/901295)  
Verhindert das Verrutschen des Viewports beim Wechsel zwischen Horizontal und Landscape in älteren iOS-Versionen  
+ [Optimiertes Placeholder Attribut für iOS 6 Devices](http://mooki83.tistory.com)  
Verhindert das Verrutschen des Viewports beim Wechsel zwischen Horizontal und Landscape in iOS6, wenn die Seite Input-Felder mit Placeholder Attribut enthält   
+ [URL-Bar ausblenden](http://remysharp.com/2010/08/05/doing-it-right-skipping-the-iphone-url-bar/)  
Blendet die Adresszeile des Mobile Safari Browsers nach dem Laden der Website aus.
  
**js/libs/jquery.js**  
[jQuery](http://jquery.com/) - Der Klassiker! Falls die Remote-Abfrage fehlschlägt, wird dieser lokale Fallback eingebunden.
  
**js/libs/modernizr.js**  
[Modernizr](http://modernizr.com/) ist eine JavaScript Library, die den Browser auf HTML5 und CSS3 Features überprüft. **Achtung!** Das zitrusfrisch HTML-StarterKit enthält die Development-Version mit allen Features.)  
  
**js/libs/polyfills.js**  
Sammlung verschiedener jQuery Plugins, die älteren IE-Versionen aktuelle HTML5- und CSS3-Features "beibringen":  
+ [jQuery Placeholder Plugin](https://github.com/mathiasbynens/jquery-placeholder)  
Simuliert das Placeholder-Attribut für Input-Felder in älteren Browsern mit einem Plugin von Mathias Bynens  
+ [Selctivizr](http://selectivizr.com) und [Selctivizr-Extended](http://github.com/keithclark/JQuery-Extended-Selectors)  
Diese Plugins von Keith Clark machen neue CSS-Pseudoklassen, wie nth-child() und nth-of-type, auch im IE verfügbar
  
**js/libs/css3-mediaqueries.js**  
Damit ältere Browser bei MediaQueries nicht streiken, dafür sorgt [css3-mediaqueries.js](http://code.google.com/p/css3-mediaqueries-js/).


## Version-Log

**Version 1.04**
+ Styling für Search Inputs in Webkit-Browsern wieder integriert (s. Version 1.03)  
+ Respond.js durch CSS3-Mediaqueries.js ersetzt

**Version 1.03**
+ Fix für iOS Scaling Bug optimiert  
+ Styling für Search Inputs in Webkit-Browsern aus base.css entfernt

**Version 1.02**
+ jQuery-Update auf Version 1.8.3  
+ Kleinere Bug-Fixes

**Version 1.01**
+ Kleinere Bug-Fixes

**Version 1.0**
+ Initial Release

