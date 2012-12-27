# HTML-StarterKit v1.06  
Ein schlankes HTML5 Template für die reibungslose Umsetzung Deiner responsiven Websites. 

## Optimiere Deinen Workflow mit dem HTML-StarterKit  
Mit dem HTML-StarterKit erhältst Du kein überladenes Framework, sondern eine einfache, aber solide Grundlage für responsive HTML5 Websites. Nie mehr um doctypes, jQuery oder Datei-Struktur kümmern, sondern direkt mit dem Layout beginnen.

## Das HTML-StarterKit nutzt aktuelle Standards wie HTML5 und CSS3  
Als Basis verwendet das HTML-StarterKit HTML5 als Markup, inklusive neuer, semantischer Selektoren. Darüber hinaus ist alles vorbereitet für eine flexible, sprich responsive, Umsetzung Deiner Website.

## Diese Dateien sind im HTML-StarterKit enthalten

**index.php**  
HTML5-Rahmen mit Meta-Tags, sowie Links zu CSS-Dateien und jQuery; außerdem ungestylte Demo-Inhalte, die mittels DEMO_content.inc.php inkludiert werden.  

**base.css**  
Basis Stylesheet mit individuellem CSS-Reset, grundlegenden Styling-Angaben und nützlichen "Helper-Classes".

**styles.css**  
Zentrales Stylesheet mit Platzhaltern für gängige Selektoren, Klassen und IDs sowie MediaQueries für verschiedene Viewports.
  
**jquery.js**  
[jQuery](http://jquery.com/) - notwendige Basis für eine Reihe der genutzten Plugins und Polyfills. Im Footer ist jeweils die aktuellste Version auf Google's CDN verlinkt. Falls das Laden von dort fehlschlägt, wird dieser lokale Fallback eingebunden.  
  
**modernizr.js**  
[Modernizr](http://modernizr.com/) ist eine JavaScript Library, die den Browser auf diverse HTML5 und CSS3 Features überprüft und entsprechende Klassen in das <html>-Tag der Website schreibt.  
*Das HTML-StarterKit enthält die Development-Version mit allen Features. Für den Live-Betrieb kann auf der [Modernizr-Website](http://modernizr.com/) ein individuelles, schlankeres Script zusammengestellt werden.*

**ios.js**  
iOS.js behebt Darstellungsfehler, die auf iOS-Devices im Zusammenhang mit responsiven Designs auftreten können und enthält Fixes für den [iOS Viewport Scaling Bug](https://gist.github.com/901295) und den [Placeholder Bug in iOS 6](http://mooki83.tistory.com), sowie ein Script, um die [Adresszeile im Safari Mobile auszublenden](http://remysharp.com/2010/08/05/doing-it-right-skipping-the-iphone-url-bar/).
  
**polyfills.js**  
Verschiedene Plugins zur Funktionserweiterung älterer IE-Versionen, die je nach Bedarf aktiviert werden können: [Selctivizr](http://selectivizr.com) und [Selctivizr-Extended](http://github.com/keithclark/JQuery-Extended-Selectors) für CSS3-Psuedoklassen, [Respond.js](http://j.mp/respondjs) für CSS3-Mediaqueries und ein [Placeholder Plugin](https://github.com/mathiasbynens/jquery-placeholder).
  
**functions.js**  
In der functions.js ist noch jede Menge Platz für Deine eigenen JavaScripts.  


## Version-Log

**Version v1.06 - jetzt auch mit eigener Website: http://zitrusfrisch.de/html-starterkit/**  
+ Wieder auf Respond.js gewechselt (s. Version v1.04), da sich CSS3-Mediaqueries.js sich in manchen Fällen nicht mit den Selectivizr-Plugins verträgt.
+ Alle IE-Polyfills in polyfills.js zusammengefasst  

**Version v1.05**  
+ Small improvements

**Version v1.04**  
+ Styling für Search Inputs in Webkit-Browsern wieder integriert (s. Version v1.03)  
+ Respond.js durch CSS3-Mediaqueries.js ersetzt

**Version v1.03**  
+ Fix für iOS Scaling Bug optimiert  
+ Styling für Search Inputs in Webkit-Browsern aus base.css entfernt

**Version v1.02**  
+ jQuery-Update auf Version 1.8.3  
+ Kleinere Bug-Fixes

**Version v1.01**  
+ Kleinere Bug-Fixes

**Version v1.0**  
+ Initial Release

