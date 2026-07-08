=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatyczne rekomendacje produktów WooCommerce: „Możesz także polubić”, sprzedaż krzyżowa koszyka i ostatnio oglądane. Bez ręcznej konfiguracji, bez zmiany układu.

== Description ==

Plogins Pair dodaje automatyczne rekomendacje produktów do Twojego sklepu WooCommerce, bez konieczności ręcznej konfiguracji. Pomaga kupującym odkrywać więcej Twojego katalogu podczas przeglądania i finalizowania zakupów, co podnosi średnią wartość zamówienia i sprawia, że ​​klienci zbliżają się do koszyka.

Po wyjęciu z pudełka otrzymujesz trzy bloki:

* <strong>„Możesz też polubić”</strong> po podsumowaniu produktu, dzięki czemu kupujący zawsze ma następny krok.
* <strong>Sprzedaj sugestie dotyczące koszyka</strong> na podstawie tego, co już się w nim znajduje, aby zwiększyć zamówienie przed realizacją transakcji.
* <strong>Ostatnio oglądane produkty</strong>, więc powracający klienci kontynuują zakupy tam, gdzie je przerwali.

W przeciwieństwie do wbudowanych w WooCommerce funkcji sprzedaży dodatkowej i krzyżowej, które musisz wybrać ręcznie dla każdego produktu, Pair generuje dla Ciebie rekomendacje i utrzymuje je w miarę zmian w Twoim katalogu i sprzedaży. Wybierasz sposób wybierania produktów za pomocą prostego ustawienia strategii, a siatka jest renderowana przy użyciu własnych znaczników karty produktu Twojego motywu, dzięki czemu pasuje do reszty Twojego sklepu bez dodatkowego interfejsu JavaScript i zmiany układu.

= Recommendation strategies =
Dla każdego bloku wybierasz sposób wyboru produktów:

* <strong>Ta sama kategoria (według popularności)</strong> – ustawienie domyślne; inne produkty z tych samych kategorii, uporządkowane według łącznej sprzedaży.
* <strong>Udostępnione tagi</strong> – produkty, które mają wspólne tagi elementu.
* <strong>Bestsellery</strong> – Twoje bestsellery, opcjonalnie w tych samych kategoriach.
* <strong>Najnowsze produkty</strong> – Twoje najnowsze produkty.
* <strong>Ostatnio oglądane przez kupującego</strong> – produkty, które oglądał ten użytkownik.

Każda strategia opiera się na najnowszych produktach, więc blok nigdy nie jest niezręcznie pusty.

= Built to be fast and friendly =
* Renderowane z kartami produktów aktywnego motywu, więc wygląda natywnie.
* Brak interfejsu JavaScript; ostatnio przeglądane są przechowywane w pliku cookie pierwszej kategorii (tylko identyfikatory produktów, nic nie jest nigdzie przesyłane).
* Zapytania są ograniczone liczbą wybranych produktów.
* Przejrzysty, podzielony na części ekran ustawień z wbudowaną pomocą.
* W pełni przetłumaczalne, dostępne nagłówki i etykiety.

= Documentation and links =
* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-pair/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-pair/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-pair
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-pair/issues

= Features =
* Automatyczny blok „Możesz też polubić” po podsumowaniu pojedynczego produktu.
* Automatyczne sugestie sprzedaży krzyżowej pod koszykiem, na podstawie jego zawartości.
* Blok ostatnio oglądanych produktów, na stronach produktów i/lub w koszyku.
* Pięć strategii do wyboru w każdym bloku (kategoria, tagi, bestsellery, najnowsze, ostatnio oglądane) z rezerwą na najnowsze produkty.
* Konfigurowalna liczba produktów (1 do 12) i kolumn (1 do 6).
* Opcjonalny filtr „tylko w magazynie”.
* Edytowalne nagłówki dla każdego bloku.
* Krótkie kody [pair_recommendations] i [pair_recently_viewed] umożliwiające umieszczanie bloków w dowolnym miejscu.
* Karty produktów w stylu tematycznym, bez niestandardowego JavaScriptu, bez zmiany układu.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]` - blok rekomendacji. Na stronie produktu używa tego produktu; gdzie indziej korzysta z wózka. „strategia” jest opcjonalna (powiązane, tagi, bestsellery, najnowsze, ostatnio).
* `[pair_recently_viewed count="4" columns="4"]` - ostatnio oglądane produkty kupującego.

== Installation ==

1. Zainstaluj i aktywuj WooCommerce.
2. Zainstaluj parę Plogins i aktywuj ją.
3. Otwórz WooCommerce -> Rekomendacje par. Rozsądne ustawienia domyślne są ustawiane podczas aktywacji; włączaj i wyłączaj bloki, wybieraj strategię i ustawiaj nagłówki.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Tak. Wtyczka współpracuje z produktami WooCommerce i nie pokazuje niczego, dopóki WooCommerce nie będzie aktywne.

= How are recommendations chosen? =
Wybierasz strategię na blok: ta sama kategoria według popularności (domyślnie), udostępnionych tagów, bestsellerów, najnowszych produktów lub ostatnio oglądanych przez kupującego produktów. Jeśli nie ma wystarczającej liczby zapałek, blok jest uzupełniany najnowszymi produktami, dzięki czemu nigdy nie jest pusty.

= Is this different from WooCommerce upsells and cross-sells? =
Tak. Sprzedaż dodatkowa i krzyżowa WooCommerce jest wybierana ręcznie dla każdego produktu. Pair automatycznie generuje rekomendacje na podstawie Twojego katalogu, więc nie musisz wybierać produktu po produkcie.

= How does "recently viewed" work, and is it GDPR friendly? =
Kiedy odwiedzający otwiera produkt, Pair przechowuje identyfikator tego produktu we własnym pliku cookie na jego własnym urządzeniu. Przechowuje jedynie identyfikatory produktów, nie przechowuje żadnych danych osobowych i nigdy nie wysyła niczego do usługi zewnętrznej. Blok po prostu ponownie pokazuje te produkty.

= Will it slow down my store or shift the layout? =
Nie. Bloki renderują się ze znacznikami karty produktu Twojego motywu i małym arkuszem stylów, bez interfejsu JavaScript. Zapytania są ograniczone wybraną liczbą produktów.

= Can I control where the blocks appear? =
Tak. Niezależnie włączaj lub wyłączaj stronę produktu, koszyk i ostatnio przeglądane bloki, a także użyj skrótów, aby umieścić blok w dowolnym miejscu.

= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== Screenshots ==

1. Blok „Możesz też polubić” na stronie produktu.
2. Sugestie dotyczące sprzedaży krzyżowej pod koszykiem.
3. Wycięty ekran ustawień rekomendacji par.

== External Services ==

Ta wtyczka nie łączy się z żadnymi usługami zewnętrznymi. Rekomendacje są obliczane w Twojej witrynie na podstawie katalogu WooCommerce, a ostatnio oglądane produkty są przechowywane wyłącznie w pliku cookie na urządzeniu odwiedzającego.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.0 =
* Pierwsza wersja: automatyczna strona produktu, koszyk i ostatnio przeglądane bloki; pięć strategii do wyboru z rezerwą na najnowsze produkty; konfigurowalna liczba, kolumny, nagłówki i filtr w magazynie; krótkie kody [pair_recommendations] i [pair_recently_viewed]; podzielony na części ekran ustawień z wbudowaną pomocą.
