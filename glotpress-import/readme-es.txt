=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Recomendaciones automáticas de productos de WooCommerce: «También te puede gustar», ventas cruzadas en el carrito y vistos recientemente. Sin configuración manual, sin saltos de diseño.

== Description ==

Plogins Pair añade recomendaciones automáticas de productos a tu tienda WooCommerce, sin configuración manual. Ayuda a los clientes a descubrir más de tu catálogo mientras navegan y pagan, lo que aumenta el valor medio del pedido y mantiene a la gente avanzando hacia el carrito.

Nada más instalarlo obtienes tres bloques:

* <strong>«También te puede gustar»</strong> después del resumen del producto, para que el cliente siempre tenga un siguiente paso.
* <strong>Sugerencias de venta cruzada en el carrito</strong>, según lo que ya hay en él, para hacer crecer el pedido antes del pago.
* <strong>Productos vistos recientemente</strong>, para que los clientes que regresan retomen donde lo dejaron.

A diferencia de las ventas adicionales y cruzadas integradas de WooCommerce, que tienes que elegir a mano para cada producto, Pair genera las recomendaciones por ti y las mantiene relevantes a medida que cambian tu catálogo y tus ventas. Eliges cómo se seleccionan los productos con un sencillo ajuste de estrategia, y la cuadrícula se renderiza con el marcado de tarjeta de producto de tu propio tema, de modo que combina con el resto de tu tienda sin JavaScript adicional en el frontend y sin saltos de diseño.

= Recommendation strategies =
Para cada bloque eliges cómo se seleccionan los productos:

* <strong>Misma categoría (por popularidad)</strong>: el valor por defecto; otros productos de las mismas categorías, ordenados por ventas totales.
* <strong>Etiquetas compartidas</strong>: productos que comparten las etiquetas del artículo.
* <strong>Los más vendidos</strong>: tus productos más vendidos, opcionalmente dentro de las mismas categorías.
* <strong>Productos más nuevos</strong>: tus incorporaciones más recientes.
* <strong>Vistos recientemente por el cliente</strong>: los productos que miró este visitante.

Cada estrategia recurre a productos recientes, de modo que un bloque nunca queda incómodamente vacío.

= Built to be fast and friendly =
* Se renderiza con las tarjetas de producto del tema activo, así que parece nativo.
* Sin JavaScript en el frontend; lo visto recientemente se guarda en una cookie propia (solo ID de producto, no se envía nada a ninguna parte).
* Las consultas están acotadas por el número de productos que elijas.
* Una pantalla de ajustes limpia y por secciones, con ayuda contextual.
* Encabezados y etiquetas totalmente traducibles y accesibles.

= Documentation and links =
* <strong>Documentación</strong> - https://plogins.com/es/plogins-pair/docs/
* <strong>Página del plugin</strong> - https://plogins.com/es/plogins-pair/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-pair
* <strong>Informes de errores y peticiones de funciones</strong> - https://github.com/wppoland/plogins-pair/issues

= Features =
* Bloque automático «También te puede gustar» después del resumen del producto individual.
* Sugerencias automáticas de venta cruzada debajo del carrito, según su contenido.
* Bloque de productos vistos recientemente, en las páginas de producto o en el carrito.
* Cinco estrategias seleccionables por bloque (categoría, etiquetas, más vendidos, más nuevos, vistos recientemente) con un respaldo de productos recientes.
* Número configurable de productos (de 1 a 12) y columnas (de 1 a 6).
* Filtro opcional «solo en stock».
* Encabezados editables para cada bloque.
* Shortcodes [pair_recommendations] y [pair_recently_viewed] para colocar bloques en cualquier lugar.
* Tarjetas de producto con el estilo del tema, sin JavaScript propio en el frontend, sin saltos de diseño.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]`: un bloque de recomendación. En la página de un producto usa ese producto; en otros lugares usa el carrito. `strategy` es opcional (related, tags, bestsellers, newest, recently).
* `[pair_recently_viewed count="4" columns="4"]`: los productos vistos recientemente por el cliente.

== Installation ==

1. Instala y activa WooCommerce.
2. Instala Plogins Pair y actívalo.
3. Abre WooCommerce -> Recomendaciones de Pair. Al activarlo se establecen valores por defecto sensatos; activa o desactiva bloques, elige una estrategia y define los encabezados.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Sí. El plugin funciona con productos de WooCommerce y no muestra nada hasta que WooCommerce está activo.

= How are recommendations chosen? =
Eliges una estrategia por bloque: misma categoría por popularidad (por defecto), etiquetas compartidas, los más vendidos, los más nuevos o los productos vistos recientemente por el cliente. Si no hay suficientes coincidencias, el bloque se completa con productos recientes para que nunca quede vacío.

= Is this different from WooCommerce upsells and cross-sells? =
Sí. Las ventas adicionales y cruzadas de WooCommerce se eligen manualmente para cada producto. Pair genera las recomendaciones automáticamente a partir de tu catálogo, así que no tienes que seleccionarlas producto a producto.

= How does "recently viewed" work, and is it GDPR friendly? =
Cuando un visitante abre un producto, Pair guarda el ID de ese producto en una cookie propia en su propio dispositivo. Solo conserva los ID de producto, no guarda ningún dato personal y nunca envía nada a un servicio externo. El bloque simplemente vuelve a mostrar esos productos.

= Will it slow down my store or shift the layout? =
No. Los bloques se renderizan con el marcado de tarjeta de producto de tu tema y una pequeña hoja de estilos, sin JavaScript en el frontend. Las consultas están acotadas por el número de productos que elijas.

= Can I control where the blocks appear? =
Sí. Activa o desactiva de forma independiente los bloques de la página de producto, el carrito y los vistos recientemente, y usa los shortcodes para colocar un bloque en cualquier lugar.

= Does this plugin work on WordPress Multisite? =

Sí. Este plugin es compatible con WordPress Multisite. Actívalo para toda la red o en sitios individuales; cada sitio conserva sus propios ajustes y datos.

== Screenshots ==

1. El bloque «También te puede gustar» en la página de un producto.
2. Sugerencias de venta cruzada debajo del carrito.
3. La pantalla de ajustes de las recomendaciones de Pair, organizada por secciones.

== External Services ==

Este plugin no se conecta a ningún servicio externo. Las recomendaciones se calculan en tu propio sitio a partir de tu catálogo de WooCommerce, y los productos vistos recientemente se guardan únicamente en una cookie propia en el dispositivo del visitante.

== Translations ==

Plogins Pair incluye traducciones al polaco, al alemán y al español para la interfaz del plugin. El dominio de texto es `plogins-pair`, por lo que los paquetes de idioma de WordPress.org también pueden sustituir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Añadidas traducciones al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.0 =
* Versión inicial: bloques automáticos de página de producto, carrito y vistos recientemente; cinco estrategias seleccionables con un respaldo de productos recientes; número, columnas, encabezados y filtro de stock configurables; shortcodes [pair_recommendations] y [pair_recently_viewed]; pantalla de ajustes por secciones con ayuda contextual.
