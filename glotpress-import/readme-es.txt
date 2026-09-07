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

== Plogins Pair PRO ==

El plugin gratuito está completo para lo que hace: recomendaciones automáticas de tu
catálogo, en la página de producto y bajo el carrito, sin curación manual y sin nada
limitado en el tiempo. **Plogins Pair PRO** es un complemento aparte para tiendas que
quieren recomendaciones salidas de lo que la gente compró junto de verdad, y que
quieren medir lo que aportan los bloques.

                                                             Gratis   PRO
    ---------------------------------------------------------------------
    "También te puede gustar" en la página de producto           sí    sí
    Venta cruzada bajo el carrito clásico                        sí    sí
    Bloque de vistos recientemente                               sí    sí
    Cinco estrategias, elegidas por bloque                       sí    sí
    Shortcodes y widgets de Elementor                            sí    sí
    Comprados juntos con frecuencia, desde pedidos                -    sí
    Añadir todo al carrito con un botón                           -    sí
    Elegir a mano lo que recomienda un producto                   -    sí
    Reglas por categoría de producto                              -    sí
    Descuento por lote aplicado al carrito                        -    sí
    Bloques en la página de gracias y en el pago                  -    sí
    Bloque para el editor                                         -    sí
    Test A/B de dos estrategias                                   -    sí
    Analítica de clics y conversiones                             -    sí

**Lo que añade PRO.** Comprados juntos con frecuencia, calculado a partir de tus
pedidos completados y no del catálogo, con un solo botón de "añadir todo al carrito"
y un descuento por lote opcional aplicado como cuota del carrito. Un selector por
producto para los casos en que la elección automática se equivoca, y reglas por
categoría de producto. Ubicaciones en la página de gracias y en el pago clásico. Un
bloque para el editor. Un test A/B que reparte a los visitantes entre dos
estrategias. Analítica de clics y conversiones, para que los bloques dejen de ser
una suposición. Desde 29 EUR al año.

Pair PRO necesita el plugin gratuito y no lo sustituye. Si el plugin gratuito falta o
está desactivado, PRO se queda inactivo y lo dice, en lugar de funcionar a medias.

* **Plogins Pair PRO** - [plogins.com/plogins-pair-pro/](https://plogins.com/plogins-pair-pro/)
* **Precios** - [plogins.com/plogins-pair-pro/pricing/](https://plogins.com/plogins-pair-pro/pricing/)

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

= Does the cart block work with the WooCommerce Cart block? =

No automáticamente. Las ubicaciones del carrito se enganchan a la plantilla del carrito clásico, que el bloque Carrito de WooCommerce no usa. Si tu página de carrito está construida con el bloque Carrito, la pantalla de ajustes lo indica y puedes añadir `[pair_recommendations]` o `[pair_recently_viewed]` en esa página dentro de un bloque de shortcode. El bloque de la página de producto no se ve afectado.

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

= 1.1.1 =
* Se ha añadido a esta página una sección "Plogins Pair PRO" con una comparativa entre gratis y PRO. Cada fila se comprobó en el código del complemento, no en sus textos de marketing.
* Se ha rediseñado el banner de WordPress.org. El anterior estaba compuesto más alto que el recorte de 772x250 al que se ajusta, así que la segunda línea de características y la captura quedaban cortadas en los bordes.

= 1.1.0 =
* Añadido: widgets de Elementor para el bloque de recomendaciones y la fila de vistos recientemente, de modo que ambos pueden colocarse en cualquier punto de un diseño de Elementor y no solo en sus posiciones fijas. Elementor es opcional; sin él no se carga nada.
* Añadido: el filtro `pair/recommendations`, para que un complemento pueda curar o reordenar la selección antes de mostrarla.

= 1.0.9 =
* Plugin Check: se deja de pasar `exclude` a `wc_get_products()`. El producto de origen y los del carrito se siguen omitiendo, pero se descartan después de la consulta y no dentro de ella.

= 1.0.8 =
* Probado con WordPress 7.1. Verificado activando esta versión en una instalación limpia de 7.1 con WooCommerce 11.1, no editando la cabecera.

= 1.0.7 =
* Se ha corregido la promoción de PRO en la pantalla de ajustes, que indicaba un precio en zlotys. PRO se cobra en euros, así que un administrador de una tienda polaca veía un importe en zlotys y luego se le cobraba en euros, y además esa cifra venía de una conversión fija que se alejaba del cargo real según se movía el cambio. La promoción muestra ahora el precio en euros que realmente se cobra.

= 1.0.6 =
* La pantalla de ajustes avisa ahora cuando tu página de carrito está construida con el bloque Carrito de WooCommerce. La venta cruzada en el carrito y los vistos recientemente necesitan el carrito clásico, así que en lugar de marcar una casilla y no ver nada en la tienda, ves una nota con el shortcode que sí funciona en una página de carrito por bloques.

= 1.0.5 =
* El aviso de PRO en la administración enumera ahora lo que Pair PRO incluye de verdad. Se había quedado en las cuatro primeras funciones mientras PRO crecía hasta nueve, así que nunca mencionaba el descuento por lote, la selección manual, las reglas por categoría, los tests A/B ni la pantalla de analítica.

= 1.0.3 =
* Traducciones: completadas las de polaco, alemán y español para el panel de mejora a PRO.

= 1.0.2 =
* Añadidas traducciones al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.0 =
* Versión inicial: bloques automáticos de página de producto, carrito y vistos recientemente; cinco estrategias seleccionables con un respaldo de productos recientes; número, columnas, encabezados y filtro de stock configurables; shortcodes [pair_recommendations] y [pair_recently_viewed]; pantalla de ajustes por secciones con ayuda contextual.
