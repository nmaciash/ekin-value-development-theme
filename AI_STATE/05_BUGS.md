# BUGS / ISSUES

## Pendientes

### ⚠️ 2 inline styles en front-page.php
- **Tipo:** Técnico / limpieza
- **Detalle:** Secciones dark con `style=""` como workaround Bootstrap. Pendiente mover las reglas a `front-page.css`.
- **Acción:** Localizar los 2 atributos `style=""` en `front-page.php` y extraer las reglas a CSS.

### ⚠️ Páginas legacy con nuevo header fijo
- **Tipo:** Layout
- **Detalle:** El nuevo `header.php` usa `position: fixed`. Las páginas que no son front-page (nosotros, propietarios, blog, etc.) pueden tener el contenido tapado por el header sin `padding-top` suficiente.
- **Acción:** Verificar en producción página a página. Si hay solapamiento, añadir regla en `site.css` o en cada CSS de página.

### ⚠️ Plugin NMH Contact Forms
- **Tipo:** Dependencia externa
- **Detalle:** Shortcode `[nmh-contact-forms]` reemplazado por formulario HTML nativo en `page-contacto.php`. El formulario nativo no tiene backend (no envía emails).
- **Acción:** Instalar el plugin cuando esté disponible y reactivar el shortcode (hay comentario TODO en el template).

### ⚠️ Nav header vacío si no hay menú asignado
- **Tipo:** Configuración WP
- **Detalle:** Si `header-menu` no tiene items asignados en WP → Apariencia → Menús, el nav aparece vacío.
- **Acción:** Verificar en WP admin que el menú está asignado a la location `header-menu`.

## Resueltos

### ✅ Menú hamburguesa — overlay / X / scroll (resuelto 2026-05-08)
- **Detalle:** Overlay empezaba en inset incorrecto (72px < 130px altura real del header); `backdrop-filter` en el header creaba containing block para el overlay fixed, que colapsaba al hacer scroll.
- **Solución:** `inset: 130px 0 0 0` en el overlay; `backdrop-filter` movido a `::before` del header.

### ✅ Errores JS legacy en consola (resuelto 2026-05-08)
- **Detalle:** `scripts.js` buscaba `.nm-nav` y `.hamburger-btn` que ya no existen en el nuevo header → TypeError en líneas 34 y 61.
- **Solución:** Protegidos con guards de existencia (`&& $(".nm-nav").length` e `if (hambtn)`).

### ✅ Spans/em aplastados por reset global de style.css (resuelto 2026-05-08)
- **Detalle:** `style.css` legacy aplica `span { font-size: 1.4rem }` y `em { font-size: 1rem; font-style: inherit }` globalmente, pisando el diseño del hero y stats.
- **Solución:** `font-size: inherit` añadido en `.hero-title .line`, `.hero-title em`, `.stats dt span`.

### ✅ Header desktop descolocado + ausencia de hamburguesa móvil (resuelto 2026-05-08)
- **Detalle:** `style.css` legacy aplicaba `nav { position:fixed; width:100%; ... }` a cualquier `<nav>`.
- **Solución:** Resets en `.site-nav-bar` en `site.css`.

### ✅ Header/footer con el nuevo diseño (resuelto 2026-05-07)
- **Solución:** Reescritos completamente en Fase 4.

### ✅ ACF Free no instalado (resuelto 2026-05-07)
- **Solución:** Usuario confirmó que ACF Free ya está instalado y activo.
