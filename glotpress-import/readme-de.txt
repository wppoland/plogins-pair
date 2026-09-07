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

* <strong>Gleiche Kategorie (nach Beliebtheit)</strong>, die Standardeinstellung; andere Produkte aus denselben Kategorien, sortiert nach Gesamtumsatz.
* <strong>Gemeinsame Tags</strong>, Produkte, die sich die Tags des Artikels teilen.
* <strong>Bestseller</strong>, deine meistverkauften Produkte, optional innerhalb derselben Kategorien.
* <strong>Neueste Produkte</strong>, deine zuletzt hinzugefügten Produkte.
* <strong>Zuletzt vom Käufer angesehen</strong>, die Produkte, die sich dieser Besucher angesehen hat.

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
* `[pair_recommendations strategy="related" count="4" columns="4"]`, ein Empfehlungsblock. Auf einer Produktseite wird dieses Produkt verwendet, anderswo der Warenkorb. `strategy` ist optional (related, tags, bestsellers, newest, recently).
* `[pair_recently_viewed count="4" columns="4"]`, die zuletzt angesehenen Produkte des Käufers.

== Plogins Pair PRO ==

Das kostenlose Plugin ist vollständig in dem, was es tut: automatische Empfehlungen
aus deinem Katalog, auf der Produktseite und unter dem Warenkorb, ohne Kuratierung
und ohne zeitliche Begrenzung. **Plogins Pair PRO** ist ein separates Add-on für
Shops, die Empfehlungen aus dem wollen, was tatsächlich zusammen gekauft wurde, und
die messen wollen, was die Blöcke einbringen.

                                                           Kostenlos   PRO
    ----------------------------------------------------------------------
    "Das könnte dir auch gefallen" auf der Produktseite           ja    ja
    Cross-Selling unter dem klassischen Warenkorb                 ja    ja
    Block für zuletzt angesehene Produkte                         ja    ja
    Fünf Strategien, pro Block wählbar                            ja    ja
    Shortcodes und Elementor-Widgets                              ja    ja
    Häufig zusammen gekauft, aus Bestellungen                      -    ja
    Alles mit einer Schaltfläche in den Warenkorb                  -    ja
    Empfehlungen je Produkt selbst auswählen                       -    ja
    Regeln je Produktkategorie                                     -    ja
    Bundle-Rabatt im Warenkorb                                     -    ja
    Blöcke auf Bestellbestätigung und Kasse                        -    ja
    Block für den Editor                                           -    ja
    A/B-Test zweier Strategien                                     -    ja
    Klick- und Conversion-Auswertung                               -    ja

**Was PRO ergänzt.** Häufig zusammen gekauft, berechnet aus deinen abgeschlossenen
Bestellungen statt aus dem Katalog, mit einer einzigen Schaltfläche "alles in den
Warenkorb" und einem optionalen Bundle-Rabatt als Warenkorbgebühr. Eine Auswahl je
Produkt für die Fälle, in denen die automatische Wahl danebenliegt, dazu Regeln je
Produktkategorie. Platzierungen auf der Bestellbestätigung und in der klassischen
Kasse. Ein Block für den Editor. Ein A/B-Test, der Besucher auf zwei Strategien
verteilt. Klick- und Conversion-Auswertung, damit die Blöcke keine Vermutung mehr
sind. Ab 29 EUR pro Jahr.

Pair PRO setzt das kostenlose Plugin voraus und ersetzt es nicht. Fehlt das
kostenlose Plugin oder ist es deaktiviert, bleibt PRO inaktiv und sagt das auch,
statt halb zu funktionieren.

* **Plogins Pair PRO** - [plogins.com/plogins-pair-pro/](https://plogins.com/plogins-pair-pro/)
* **Preise** - [plogins.com/plogins-pair-pro/pricing/](https://plogins.com/plogins-pair-pro/pricing/)

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

= Does the cart block work with the WooCommerce Cart block? =

Nicht automatisch. Die Warenkorb-Platzierungen hängen am klassischen Warenkorb-Template, das der WooCommerce-Warenkorb-Block nicht verwendet. Ist deine Warenkorbseite mit dem Warenkorb-Block gebaut, weist die Einstellungsseite darauf hin, und du kannst stattdessen `[pair_recommendations]` oder `[pair_recently_viewed]` als Shortcode-Block auf dieser Seite einfügen. Der Block auf der Produktseite ist davon nicht betroffen.

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

= 1.1.1 =
* Auf dieser Seite ist ein Abschnitt "Plogins Pair PRO" mit einem Vergleich von kostenlos und PRO hinzugekommen. Jede Zeile wurde am Quellcode des Add-ons geprüft, nicht an dessen Werbetexten.
* Das WordPress.org-Banner wurde neu gezeichnet. Das alte war höher angelegt als der Ausschnitt von 772x250, auf den es beschnitten wird, sodass die zweite Funktionszeile und der Screenshot an den Rändern abgeschnitten waren.

= 1.1.0 =
* Neu: Elementor-Widgets für den Empfehlungsblock und die Reihe der zuletzt angesehenen Produkte, sodass sich beide überall im Elementor-Layout platzieren lassen und nicht nur an ihren fest verdrahteten Positionen. Elementor ist optional; ohne Elementor wird nichts geladen.
* Neu: der Filter `pair/recommendations`, mit dem ein Add-on die Auswahl vor der Ausgabe kuratieren oder umsortieren kann.

= 1.0.9 =
* Plugin Check: `exclude` wird nicht mehr an `wc_get_products()` übergeben. Das Ausgangsprodukt und die Produkte im Warenkorb bleiben ausgenommen, sie werden aber nach der Abfrage entfernt statt in ihr.

= 1.0.8 =
* Mit WordPress 7.1 getestet. Geprüft, indem dieser Build auf einer sauberen 7.1-Installation mit WooCommerce 11.1 aktiviert wurde, nicht durch Ändern des Headers.

= 1.0.7 =
* Die PRO-Werbung auf der Einstellungsseite nannte einen Preis in Zloty. PRO wird in Euro ausgezeichnet und abgerechnet, ein Administrator eines polnischen Shops sah also einen Zloty-Betrag und wurde dann in Euro belastet, wobei der Zloty-Betrag auf einem festen Umrechnungskurs beruhte und mit dem Kurs von der tatsächlichen Abbuchung abwich. Die Werbung zeigt jetzt den Europreis, der wirklich abgebucht wird.

= 1.0.6 =
* Die Einstellungsseite weist jetzt darauf hin, wenn deine Warenkorbseite mit dem WooCommerce-Warenkorb-Block aufgebaut ist. Cross-Selling im Warenkorb und zuletzt angesehene Produkte brauchen den klassischen Warenkorb. Statt ein Kästchen zu aktivieren und im Shop nichts zu sehen, bekommst du einen Hinweis mit dem Shortcode, der auf einer Block-Warenkorbseite funktioniert.

= 1.0.5 =
* Der PRO-Hinweis im Adminbereich listet jetzt auf, was Pair PRO tatsächlich mitbringt. Er war bei den ersten vier Funktionen stehen geblieben, während PRO auf neun gewachsen war, und erwähnte deshalb weder Bundle-Rabatt noch manuelle Auswahl, Kategorieregeln, A/B-Tests oder die Auswertungsseite.

= 1.0.3 =
* Übersetzungen: Polnisch, Deutsch und Spanisch für das PRO-Upgrade-Panel vervollständigt.

= 1.0.2 =
* Deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche mitgeliefert.

= 1.0.1 =
* Erste stabile Version.

= 0.1.0 =
* Erste Veröffentlichung: automatische Blöcke für Produktseite, Warenkorb und zuletzt angesehen; fünf wählbare Strategien mit einem Fallback auf aktuelle Produkte; konfigurierbare Anzahl, Spalten, Überschriften und Lagerbestandsfilter; Shortcodes [pair_recommendations] und [pair_recently_viewed]; in Abschnitte gegliederter Einstellungsbildschirm mit Inline-Hilfe.
