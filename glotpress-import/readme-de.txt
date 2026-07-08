=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatische WooCommerce-Produktempfehlungen: „Das könnte dir auch gefallen“, Warenkorb-Cross-Selling und kürzlich angesehen. Keine manuelle Einrichtung, keine Layoutverschiebung.

== Description ==

Plogins Pair fügt deinem WooCommerce-Shop automatische Produktempfehlungen hinzu, ohne dass eine manuelle Einrichtung erforderlich ist. Es hilft Käufern, beim Stöbern und Bezahlen mehr von deinem Katalog zu entdecken, was den durchschnittlichen Bestellwert erhöht und die Leute dazu bringt, sich dem Warenkorb zuzuwenden.

Im Auslieferungszustand erhalte drei Blöcke:

* <strong>„Das könnte dir auch gefallen“</strong> nach der Produktzusammenfassung, damit ein Käufer immer einen nächsten Schritt hat.
* <strong>Cross-Selling-Vorschläge im Warenkorb</strong>, basierend auf dem, was bereits darin enthalten ist, um die Bestellung vor dem Bezahlen zu vergrößern.
* <strong>Zuletzt angesehene Produkte</strong>, sodass wiederkehrende Käufer dort weitermachen, wo sie aufgehört haben.

Im Gegensatz zu den integrierten Upsells und Cross-Sells von WooCommerce, die du für jedes Produkt manuell auswählen müssen, generiert Pair Empfehlungen für dich und hält diese relevant, wenn sich dein Katalog und deine Verkäufe ändern. Mit einer einfachen Strategieeinstellung lege fest, wie Produkte ausgewählt werden, und das Raster wird mit dem Produktkarten-Markup Ihres Themes gerendert, sodass es ohne zusätzliches Front-End-JavaScript und ohne Layoutverschiebung zum Rest Ihres Shops passt.

= Recommendation strategies =
Für jeden Block wähle aus, wie Produkte ausgewählt werden:

* <strong>Gleiche Kategorie (nach Beliebtheit)</strong> – die Standardeinstellung; andere Produkte aus den gleichen Kategorien, geordnet nach Gesamtumsatz.
* <strong>Gemeinsame Tags</strong> – Produkte, die die Tags des Artikels teilen.
* <strong>Bestseller</strong> – deine Top-Seller, optional innerhalb derselben Kategorien.
* <strong>Neueste Produkte</strong> – deine neuesten Ergänzungen.
* <strong>Zuletzt vom Käufer angesehen</strong> – die Produkte, die sich dieser Besucher angesehen hat.

Jede Strategie greift auf neuere Produkte zurück, sodass ein Block nie unangenehm leer ist.

= Built to be fast and friendly =
* Mit den Produktkarten des aktiven Themes gerendert, sodass es nativ aussieht.
* Kein Front-End-JavaScript; Zuletzt angesehene Inhalte werden in einem Erstanbieter-Cookie gespeichert (nur Produkt-IDs, nichts wird irgendwohin gesendet).
* Anfragen sind durch die Anzahl der von dir ausgewählten Produkte begrenzt.
* Ein übersichtlicher, unterteilter Einstellungsbildschirm mit Inline-Hilfe.
* Vollständig übersetzbare, barrierefreie Überschriften und Beschriftungen.

= Documentation and links =
* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-pair/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-pair/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-pair
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-pair/issues

= Features =
* Automatischer „Das könnte dir auch gefallen“-Block nach der einzelnen Produktzusammenfassung.
* Automatische Cross-Selling-Vorschläge unter dem Warenkorb, basierend auf dessen Inhalt.
* Block „Zuletzt angesehene Produkte“ auf Produktseiten und/oder im Warenkorb.
* Fünf wählbare Strategien pro Block (Kategorie, Tags, Bestseller, Neueste, Kürzlich angesehen) mit einem Fallback auf aktuelle Produkte.
* Konfigurierbare Anzahl von Produkten (1 bis 12) und Spalten (1 bis 6).
* Optionaler Filter „Nur auf Lager“.
* Bearbeitbare Überschriften für jeden Block.
* Shortcodes [pair_recommendations] und [pair_recently_viewed], um Blöcke überall zu platzieren.
* Produktkarten im Themenstil, kein benutzerdefiniertes Front-End-JavaScript, keine Layoutverschiebung.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]` – ein Empfehlungsblock. Auf einer Produktseite wird dieses Produkt verwendet. andernorts nutzt es den Einkaufswagen. „Strategie“ ist optional (verwandt, Tags, Bestseller, Neueste, Kürzlich).
* „[pair_recently_viewed count="4" columns="4"]“ – die zuletzt angesehenen Produkte des Käufers.

== Installation ==

1. Installieren und aktiviere WooCommerce.
2. Installiere Plogins Pair und aktiviere es.
3. Öffne WooCommerce -> Paarempfehlungen. Bei der Aktivierung werden sinnvolle Standardeinstellungen festgelegt; Schalte Blöcke ein oder aus, wähle eine Strategie und lege Überschriften fest.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Ja. Das Plugin funktioniert mit WooCommerce-Produkten und zeigt nichts an, bis WooCommerce aktiv ist.

= How are recommendations chosen? =
Du wählen eine Strategie pro Block: gleiche Kategorie nach Beliebtheit (Standard), geteilte Tags, Bestseller, neueste Produkte oder die vom Käufer zuletzt angesehenen Produkte. Wenn nicht genügend Übereinstimmungen vorhanden sind, wird der Block mit aktuellen Produkten aufgefüllt, sodass er nie leer ist.

= Is this different from WooCommerce upsells and cross-sells? =
Ja. WooCommerce-Upsells und Cross-Sells werden für jedes Produkt manuell ausgewählt. Pair generiert automatisch Empfehlungen aus deinem Katalog, sodass du diese nicht Produkt für Produkt kuratieren müssen.

= How does "recently viewed" work, and is it GDPR friendly? =
Wenn ein Besucher ein Produkt öffnet, speichert Pair die ID dieses Produkts in einem Erstanbieter-Cookie auf seinem eigenen Gerät. Es speichert nur Produkt-IDs, keine persönlichen Daten und sendet niemals etwas an einen externen Dienst. Der Block zeigt diese Produkte einfach noch einmal an.

= Will it slow down my store or shift the layout? =
Nein. Blöcke werden mit dem Produktkarten-Markup Ihres Themes und einem kleinen Stylesheet gerendert, ohne Front-End-JavaScript. Abfragen sind durch die von dir gewählte Produktanzahl begrenzt.

= Can I control where the blocks appear? =
Ja. Schalte die Produktseite, den Warenkorb und die zuletzt angezeigten Blöcke unabhängig voneinander ein oder aus und verwende die Shortcodes, um einen Block an einer beliebigen Stelle zu platzieren.

= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Der Block „Das könnte dir auch gefallen“ auf einer Produktseite.
2. Cross-Selling-Vorschläge unter dem Warenkorb.
3. Der abschnittsweise Einstellungsbildschirm für Paarempfehlungen.

== External Services ==

Dieses Plugin stellt keine Verbindung zu externen Diensten her. Empfehlungen werden auf deiner eigenen Website aus deinem WooCommerce-Katalog berechnet und kürzlich angesehene Produkte werden nur in einem Erstanbieter-Cookie auf dem Gerät des Besuchers gespeichert.

== Changelog ==

= 1.0.1 =
* Erste stabile Version.

= 0.1.0 =
* Erstveröffentlichung: automatische Produktseite, Warenkorb und zuletzt angesehene Blöcke; fünf wählbare Strategien mit einem Fallback auf aktuelle Produkte; konfigurierbare Anzahl, Spalten, Überschriften und Lagerbestandsfilter; Kurzcodes [pair_recommendations] und [pair_recently_viewed]; Unterteilter Einstellungsbildschirm mit Inline-Hilfe.
