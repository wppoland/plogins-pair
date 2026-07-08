=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Recomendaciones automáticas de productos de WooCommerce: "También te puede gustar", ventas cruzadas de carrito y vistos recientemente. Sin configuración manual ni cambios de diseño.

== Description ==

Plogins Pair añade recomendaciones automáticas de productos a su tienda WooCommerce, sin configuración manual. Ayuda a los compradores a descubrir más de su catálogo mientras navegan y compran, lo que aumenta el valor promedio de los pedidos y hace que las personas sigan avanzando hacia el carrito.

Fuera de la caja obtienes tres bloques:

* <strong>"También te puede gustar"</strong> después del resumen del producto, para que el comprador siempre tenga el siguiente paso.
* <strong>Sugerencias de venta cruzada en el carrito</strong>, basadas en lo que ya hay en él, para hacer crecer el pedido antes del pago.
* <strong>Productos vistos recientemente</strong>, para que los compradores que regresan continúen donde lo dejaron.

A diferencia de las ventas adicionales y cruzadas integradas de WooCommerce, que debe seleccionar manualmente para cada producto, Pair genera recomendaciones para ti y las mantiene relevantes a medida que cambian su catálogo y sus ventas. Usted elige cómo se seleccionan los productos con una configuración de estrategia simple, y la cuadrícula se representa con el marcado de tarjeta de producto propio de su tema, por lo que coincide con el resto de su tienda sin JavaScript frontal adicional ni cambios de diseño.

= Recommendation strategies =
Para cada bloque eliges cómo se eligen los productos:

* <strong>Misma categoría (por popularidad)</strong>: el valor predeterminado; otros productos de las mismas categorías, ordenados por ventas totales.
* <strong>Etiquetas compartidas</strong>: productos que comparten las etiquetas del artículo.
* <strong>Los más vendidos</strong>: sus productos más vendidos, opcionalmente dentro de las mismas categorías.
* <strong>Productos más nuevos</strong>: sus incorporaciones más recientes.
* <strong>Visto recientemente por el comprador</strong>: los productos que miró este visitante.

Cada estrategia recurre a productos recientes, por lo que un bloque nunca está extrañamente vacío.

= Built to be fast and friendly =
* Representado con las tarjetas de producto del tema activo, para que parezca nativo.
* Sin JavaScript de interfaz; visto recientemente se almacena en una cookie de origen (solo ID de producto, no se envía nada a ninguna parte).
*Las consultas están acotadas por la cantidad de productos que elijas.
* Una pantalla de configuración limpia y seccionada con ayuda en línea.
* Encabezados y etiquetas totalmente traducibles y accesibles.

= Documentation and links =
* <strong>Documentación</strong> - https://plogins.com/es/plogins-pair/docs/
* <strong>Página de complementos</strong> - https://plogins.com/es/plogins-pair/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-pair
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-pair/issues

= Features =
* Bloqueo automático "También te puede gustar" después del resumen del producto individual.
* Sugerencias automáticas de venta cruzada debajo del carrito, según su contenido.
* Bloque de productos vistos recientemente, en las páginas de productos y/o en el carrito.
* Cinco estrategias seleccionables por bloque (categoría, etiquetas, más vendidos, más recientes, vistos recientemente) con un respaldo de productos recientes.
* Número configurable de productos (1 a 12) y columnas (1 a 6).
* Filtro opcional "solo en stock".
* Encabezados editables para cada bloque.
* Códigos cortos [pair_recommendations] y [pair_recently_viewed] para colocar bloques en cualquier lugar.
* Tarjetas de productos con estilos temáticos, sin JavaScript de interfaz personalizado, sin cambios de diseño.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]` - un bloque de recomendación. En la página de un producto utiliza ese producto; en otros lugares utiliza el carro. La "estrategia" es opcional (relacionada, etiquetas, más vendidos, más reciente, recientemente).
* `[pair_recently_viewed count="4" columns="4"]`: los productos vistos recientemente por el comprador.

== Installation ==

1. Instale y active WooCommerce.
2. Instale Plogins Pair y actívelo.
3. Abra WooCommerce -> Recomendaciones de pares. Los valores predeterminados sensatos se establecen en el momento de la activación; Activa o desactiva bloques, elige una estrategia y establece títulos.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Sí. El complemento funciona con productos WooCommerce y no muestra nada hasta que WooCommerce esté activo.

= How are recommendations chosen? =
Usted elige una estrategia por bloque: la misma categoría por popularidad (predeterminada), etiquetas compartidas, los más vendidos, los más nuevos o los productos vistos recientemente por el comprador. Si no hay suficientes coincidencias, el bloque se rellena con productos recientes para que nunca quede vacío.

= Is this different from WooCommerce upsells and cross-sells? =
Sí. Las ventas adicionales y cruzadas de WooCommerce se eligen manualmente para cada producto. Pair genera recomendaciones automáticamente a partir de tu catálogo, por lo que no tienes que seleccionarlas producto por producto.

= How does "recently viewed" work, and is it GDPR friendly? =
Cuando un visitante abre un producto, Pair almacena la identificación de ese producto en una cookie de origen en su propio dispositivo. Solo conserva los ID de los productos, no guarda datos personales y nunca envía nada a un servicio externo. El bloque simplemente muestra esos productos nuevamente.

= Will it slow down my store or shift the layout? =
No. Los bloques se procesan con el marcado de la tarjeta de producto de su tema y una pequeña hoja de estilo, sin JavaScript de interfaz. Las consultas están limitadas por el número de productos elegidos.

= Can I control where the blocks appear? =
Sí. Active o desactive la página del producto, el carrito y los bloques vistos recientemente de forma independiente, y utilice los códigos cortos para colocar un bloque en cualquier lugar.

= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Activarlo en red o activarlo en sitios individuales; Cada sitio mantiene su propia configuración y datos.

== Screenshots ==

1. El bloque "También te puede gustar" en la página de un producto.
2. Sugerencias de venta cruzada debajo del carrito.
3. La pantalla de configuración de recomendaciones de pares seccionada.

== External Services ==

Este complemento no se conecta a ningún servicio externo. Las recomendaciones se calculan en tu propio sitio a partir de su catálogo de WooCommerce y los productos vistos recientemente se almacenan únicamente en una cookie de origen en el dispositivo del visitante.

== Changelog ==

= 1.0.1 =
* Primera versión estable.

= 0.1.0 =
* Lanzamiento inicial: página de producto automática, carrito y bloques vistos recientemente; cinco estrategias seleccionables con respaldo de productos recientes; recuento configurable, columnas, encabezados y filtro de existencias; Códigos cortos [pair_recommendations] y [pair_recently_viewed]; Pantalla de configuración seccionada con ayuda en línea.
