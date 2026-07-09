=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatische WooCommerce-Produktempfehlungen: „Das könnte dir auch gefallen“, Warenkorb-Cross-Selling und zuletzt angesehen. Keine manuelle Einrichtung, keine Layout-Verschiebung.

== Description ==

Plogins Pair fügt deinem WooCommerce-Shop automatische Produktempfehlungen hinzu, ganz ohne manuelle Einrichtung. Es hilft deiner Kundschaft, beim Stöbern und Bezahlen mehr von deinem Katalog zu entdecken, was den durchschnittlichen Bestellwert steigert und die Leute weiter in Richtung Warenkorb bewegt.

Von Haus aus erhältst du drei Blöcke:

* <strong>„Das könnte dir auch gefallen“</strong> nach der Produktzusammenfassung, sodass ein Käufer immer einen nächsten Schritt hat.
* <strong>Cross-Selling-Vorschläge im Warenkorb</strong> auf Basis dessen, was bereits darin liegt, um die Bestellung vor dem Bezahlen zu vergrößern.
* <strong>Zuletzt angesehene Produkte</strong>, sodass wiederkehrende Käufer dort weitermachen, wo sie aufgehört haben.

Im Gegensatz zu den integrierten Upsells und Cross-Sells von WooCommerce, die du für jedes Produkt von Hand auswählen musst, generiert Pair die Empfehlungen für dich und hält sie relevant, während sich dein Katalog und deine Verkäufe ändern. Mit einer einfachen Strategie-Einstellung legst du fest, wie Produkte ausgewählt werden, und das Raster wird mit dem Produktkarten-Markup deines Themes gerendert, sodass es ohne zusätzliches Frontend-JavaScript und ohne Layout-Verschiebung zum Rest deines Shops passt.

= Recommendation strategies =
Für jeden Block wählst du aus, wie Produkte ausgewählt werden:

* <strong>Gleiche Kategorie (nach Beliebtheit)</strong> – die Standardeinstellung; andere Produkte aus denselben Kategorien, sortiert nach Gesamtumsatz.
* <strong>Gemeinsame Tags</strong> – Produkte, die sich die Tags des Artikels teilen.
* <strong>Bestseller</strong> – deine meistverkauften Produkte, optional innerhalb derselben Kategorien.
* <strong>Neueste Produkte</strong> – deine zuletzt hinzugefügten Produkte.
* <strong>Zuletzt vom Käufer angesehen</strong> – die Produkte, die sich dieser Besucher angesehen hat.

Jede Strategie greift notfalls auf aktuelle Produkte zurück, sodass ein Block nie unschön leer ist.

= Built to be fast and friendly =
* Mit den Produktkarten des aktiven Themes gerendert, sodass es nativ aussieht.
* Kein Frontend-JavaScript; zuletzt angesehene Produkte werden in einem Erstanbieter-Cookie gespeichert (nur Produkt-IDs, nichts wird irgendwohin gesendet).
* Die Abfragen sind durch die Anzahl der Produkte begrenzt, die du wählst.
* Ein aufgeräumter, in Abschnitte gegliederter Einstellungsbildschirm mit Inline-Hilfe.
* Vollständig übersetzbare, barrierefreie Überschriften und Beschriftungen.

= Documentation and links =
* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-pair/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-pair/
* <strong>Quellcode</strong> - https://github.com/wppoland/plogins-pair
* <strong>Fehlerberichte und Funktionswünsche</strong> - https://github.com/wppoland/plogins-pair/issues

= Features =
* Automatischer „Das könnte dir auch gefallen“-Block nach der einzelnen Produktzusammenfassung.
* Automatische Cross-Selling-Vorschläge unter dem Warenkorb, basierend auf dessen Inhalt.
* Block „Zuletzt angesehene Produkte“ auf Produktseiten und/oder im Warenkorb.
* Fünf wählbare Strategien pro Block (Kategorie, Tags, Bestseller, Neueste, Zuletzt angesehen) mit einem Fallback auf aktuelle Produkte.
* Konfigurierbare Anzahl von Produkten (1 bis 12) und Spalten (1 bis 6).
* Optionaler Filter „nur auf Lager“.
* Bearbeitbare Überschriften für jeden Block.
* Shortcodes [pair_recommendations] und [pair_recently_viewed], um Blöcke überall zu platzieren.
* Produktkarten im Theme-Stil, kein eigenes Frontend-JavaScript, keine Layout-Verschiebung.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]` – ein Empfehlungsblock. Auf einer Produktseite wird dieses Produkt verwendet, anderswo der Warenkorb. `strategy` ist optional (related, tags, bestsellers, newest, recently).
* `[pair_recently_viewed count="4" columns="4"]` – die zuletzt angesehenen Produkte des Käufers.

== Installation ==

1. Installiere und aktiviere WooCommerce.
2. Installiere Plogins Pair und aktiviere es.
3. Öffne WooCommerce -> Pair-Empfehlungen. Bei der Aktivierung werden sinnvolle Standardwerte gesetzt; schalte Blöcke ein oder aus, wähle eine Strategie und lege Überschriften fest.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Ja. Das Plugin funktioniert mit WooCommerce-Produkten und zeigt nichts an, bis WooCommerce aktiv ist.

= How are recommendations chosen? =
Du wählst pro Block eine Strategie: gleiche Kategorie nach Beliebtheit (Standard), gemeinsame Tags, Bestseller, Neueste oder die zuletzt vom Käufer angesehenen Produkte. Gibt es nicht genügend Treffer, wird der Block mit aktuellen Produkten aufgefüllt, sodass er nie leer ist.

= Is this different from WooCommerce upsells and cross-sells? =
Ja. WooCommerce-Upsells und -Cross-Sells werden für jedes Produkt manuell ausgewählt. Pair generiert Empfehlungen automatisch aus deinem Katalog, sodass du sie nicht Produkt für Produkt kuratieren musst.

= How does "recently viewed" work, and is it GDPR friendly? =
Wenn ein Besucher ein Produkt öffnet, speichert Pair die ID dieses Produkts in einem Erstanbieter-Cookie auf seinem eigenen Gerät. Es speichert nur Produkt-IDs, hält keine personenbezogenen Daten vor und sendet niemals etwas an einen externen Dienst. Der Block zeigt diese Produkte einfach noch einmal an.

= Will it slow down my store or shift the layout? =
Nein. Blöcke werden mit dem Produktkarten-Markup deines Themes und einem kleinen Stylesheet gerendert, ohne Frontend-JavaScript. Die Abfragen sind durch die von dir gewählte Produktanzahl begrenzt.

= Can I control where the blocks appear? =
Ja. Schalte die Blöcke für Produktseite, Warenkorb und zuletzt angesehen unabhängig voneinander ein oder aus und platziere einen Block mit den Shortcodes an beliebiger Stelle.

= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es netzwerkweit oder auf einzelnen Websites; jede Website behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Der Block „Das könnte dir auch gefallen“ auf einer Produktseite.
2. Cross-Selling-Vorschläge unter dem Warenkorb.
3. Der in Abschnitte gegliederte Einstellungsbildschirm der Pair-Empfehlungen.

== External Services ==

Dieses Plugin stellt keine Verbindung zu externen Diensten her. Empfehlungen werden auf deiner eigenen Website aus deinem WooCommerce-Katalog berechnet, und zuletzt angesehene Produkte werden nur in einem Erstanbieter-Cookie auf dem Gerät des Besuchers gespeichert.

== Translations ==

Plogins Pair enthält deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-pair`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche mitgeliefert.

= 1.0.1 =
* Erste stabile Version.

= 0.1.0 =
* Erste Veröffentlichung: automatische Blöcke für Produktseite, Warenkorb und zuletzt angesehen; fünf wählbare Strategien mit einem Fallback auf aktuelle Produkte; konfigurierbare Anzahl, Spalten, Überschriften und Lagerbestandsfilter; Shortcodes [pair_recommendations] und [pair_recently_viewed]; in Abschnitte gegliederter Einstellungsbildschirm mit Inline-Hilfe.
