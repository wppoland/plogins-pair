=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatyczne rekomendacje produktów WooCommerce: „Może Ci się też spodobać”, sprzedaż krzyżowa w koszyku i ostatnio oglądane. Bez ręcznej konfiguracji, bez przeskoków układu.

== Description ==

Plogins Pair dodaje automatyczne rekomendacje produktów do Twojego sklepu WooCommerce, bez ręcznej konfiguracji. Pomaga klientom odkrywać więcej z Twojego katalogu podczas przeglądania i finalizacji zakupu, co podnosi średnią wartość zamówienia i utrzymuje ruch w stronę koszyka.

Zaraz po instalacji otrzymujesz trzy bloki:

* <strong>„Może Ci się też spodobać”</strong> po podsumowaniu produktu, dzięki czemu klient zawsze ma następny krok.
* <strong>Sugestie sprzedaży krzyżowej w koszyku</strong> na podstawie tego, co już się w nim znajduje, aby powiększyć zamówienie przed przejściem do kasy.
* <strong>Ostatnio oglądane produkty</strong>, dzięki czemu powracający klienci wracają tam, gdzie skończyli.

W przeciwieństwie do wbudowanych w WooCommerce sprzedaży dodatkowej (upsell) i krzyżowej (cross-sell), które musisz wybierać ręcznie dla każdego produktu, Pair generuje rekomendacje za Ciebie i utrzymuje ich trafność wraz ze zmianami w Twoim katalogu i sprzedaży. Sposób doboru produktów wybierasz prostym ustawieniem strategii, a siatka jest renderowana przy użyciu znaczników karty produktu Twojego motywu, dzięki czemu pasuje do reszty sklepu bez dodatkowego front-endowego JavaScriptu i bez przeskoków układu.

= Recommendation strategies =
Dla każdego bloku wybierasz sposób doboru produktów:

* <strong>Ta sama kategoria (według popularności)</strong> – ustawienie domyślne; inne produkty z tych samych kategorii, uporządkowane według łącznej sprzedaży.
* <strong>Wspólne tagi</strong> – produkty, które mają wspólne tagi z danym produktem.
* <strong>Bestsellery</strong> – Twoje najlepiej sprzedające się produkty, opcjonalnie w obrębie tych samych kategorii.
* <strong>Najnowsze produkty</strong> – Twoje ostatnio dodane produkty.
* <strong>Ostatnio oglądane przez klienta</strong> – produkty, które oglądał dany odwiedzający.

Każda strategia w razie potrzeby sięga po najnowsze produkty, więc blok nigdy nie jest niezręcznie pusty.

= Built to be fast and friendly =
* Renderowane z użyciem kart produktów aktywnego motywu, więc wygląda natywnie.
* Brak front-endowego JavaScriptu; ostatnio oglądane są przechowywane w ciasteczku własnym (first-party) — tylko identyfikatory produktów, nic nie jest nigdzie wysyłane.
* Zapytania są ograniczone liczbą wybranych przez Ciebie produktów.
* Przejrzysty, podzielony na sekcje ekran ustawień z pomocą kontekstową.
* W pełni przetłumaczalne, dostępne nagłówki i etykiety.

= Documentation and links =
* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-pair/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-pair/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-pair
* <strong>Zgłoszenia błędów i propozycje funkcji</strong> - https://github.com/wppoland/plogins-pair/issues

= Features =
* Automatyczny blok „Może Ci się też spodobać” po podsumowaniu pojedynczego produktu.
* Automatyczne sugestie sprzedaży krzyżowej pod koszykiem, na podstawie jego zawartości.
* Blok ostatnio oglądanych produktów na stronach produktów i/lub w koszyku.
* Pięć strategii do wyboru dla każdego bloku (kategoria, tagi, bestsellery, najnowsze, ostatnio oglądane) z rezerwowym uzupełnieniem najnowszymi produktami.
* Konfigurowalna liczba produktów (od 1 do 12) i kolumn (od 1 do 6).
* Opcjonalny filtr „tylko dostępne w magazynie”.
* Edytowalne nagłówki dla każdego bloku.
* Shortcode’y [pair_recommendations] i [pair_recently_viewed] pozwalają umieścić bloki w dowolnym miejscu.
* Karty produktów w stylu motywu, bez własnego front-endowego JavaScriptu, bez przeskoków układu.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]` – blok rekomendacji. Na stronie produktu używa tego produktu; w innych miejscach korzysta z koszyka. `strategy` jest opcjonalne (related, tags, bestsellers, newest, recently).
* `[pair_recently_viewed count="4" columns="4"]` – ostatnio oglądane produkty klienta.

== Installation ==

1. Zainstaluj i włącz WooCommerce.
2. Zainstaluj Plogins Pair i włącz wtyczkę.
3. Otwórz WooCommerce -> Rekomendacje Pair. Podczas aktywacji ustawiane są rozsądne wartości domyślne; włączaj i wyłączaj bloki, wybierz strategię i ustaw nagłówki.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Tak. Wtyczka działa z produktami WooCommerce i nie wyświetla niczego, dopóki WooCommerce nie jest aktywne.

= How are recommendations chosen? =
Wybierasz strategię dla każdego bloku: ta sama kategoria według popularności (domyślnie), wspólne tagi, bestsellery, najnowsze lub ostatnio oglądane przez klienta produkty. Jeśli dopasowań jest za mało, blok jest uzupełniany najnowszymi produktami, więc nigdy nie jest pusty.

= Is this different from WooCommerce upsells and cross-sells? =
Tak. Sprzedaż dodatkowa i krzyżowa w WooCommerce jest wybierana ręcznie dla każdego produktu. Pair generuje rekomendacje automatycznie na podstawie Twojego katalogu, więc nie musisz dobierać ich produkt po produkcie.

= How does "recently viewed" work, and is it GDPR friendly? =
Gdy odwiedzający otwiera produkt, Pair zapisuje identyfikator tego produktu w ciasteczku własnym (first-party) na jego urządzeniu. Przechowuje wyłącznie identyfikatory produktów, nie zawiera żadnych danych osobowych i nigdy nie wysyła niczego do usługi zewnętrznej. Blok po prostu ponownie pokazuje te produkty.

= Will it slow down my store or shift the layout? =
Nie. Bloki renderują się przy użyciu znaczników karty produktu Twojego motywu i niewielkiego arkusza stylów, bez front-endowego JavaScriptu. Zapytania są ograniczone wybraną przez Ciebie liczbą produktów.

= Can I control where the blocks appear? =
Tak. Niezależnie włączaj i wyłączaj bloki na stronie produktu, w koszyku i ostatnio oglądanych, a shortcode’ów użyj, aby umieścić blok w dowolnym miejscu.

= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest zgodna z WordPress Multisite. Włącz ją w całej sieci lub na poszczególnych witrynach; każda witryna zachowuje własne ustawienia i dane.

== Screenshots ==

1. Blok „Może Ci się też spodobać” na stronie produktu.
2. Sugestie sprzedaży krzyżowej pod koszykiem.
3. Podzielony na sekcje ekran ustawień Rekomendacji Pair.

== External Services ==

Ta wtyczka nie łączy się z żadnymi usługami zewnętrznymi. Rekomendacje są obliczane w Twojej własnej witrynie na podstawie katalogu WooCommerce, a ostatnio oglądane produkty są przechowywane wyłącznie w ciasteczku własnym (first-party) na urządzeniu odwiedzającego.

== Translations ==

Plogins Pair zawiera polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki. Domena tekstowa to `plogins-pair`, więc pakiety językowe z WordPress.org mogą też nadpisywać lub rozszerzać dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.0 =
* Pierwsze wydanie: automatyczne bloki na stronie produktu, w koszyku i ostatnio oglądanych; pięć strategii do wyboru z rezerwowym uzupełnieniem najnowszymi produktami; konfigurowalna liczba, kolumny, nagłówki i filtr dostępności w magazynie; shortcode’y [pair_recommendations] i [pair_recently_viewed]; podzielony na sekcje ekran ustawień z pomocą kontekstową.
