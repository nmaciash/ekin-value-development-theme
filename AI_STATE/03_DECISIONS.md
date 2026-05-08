# DECISIONS

## 2026-05-07 — Arquitectura modular con /inc/

El theme evolucionará hacia una arquitectura modular donde `functions.php` solo carga entorno y hace `require` de archivos en `/inc/`. La migración es **incremental**: no se rompe lo existente, se extrae por fases.

Carpeta `/inc/` objetivo:
- `env-loader.php` — carga `.env`
- `enqueue.php` — assets
- `acf-loader.php` — detección ACF + control admin UI
- `acf-fields.php` — definición de field groups
- `elementor-cleaner.php` — silenciar Elementor fuera del editor

**Estado actual:** functions.php concentra todo. Los módulos /inc/ se crearán en Fase 2.

---

## 2026-05-07 — ACF Free (sin Pro)

Contenido dinámico vía **ACF Free únicamente**. Prohibido usar:
- Repeater, Flexible Content, Gallery (son de ACF Pro)

Si hay que repetir contenido: campos individuales con sufijo numérico (`product_1`, `product_2`).

Toda la definición de field groups va en `inc/acf-fields.php` con `acf_add_local_field_group()`.
Tabs siempre con `placement => 'top'` (horizontales). Nunca verticales.

Helper global: `nmh_get_acf_field('campo', 'valor_defecto')` para evitar que el diseño se rompa sin contenido.

Control de visibilidad admin UI via variable de entorno `ACF_SHOW_ADMIN`.

---

## 2026-05-07 — Elementor silenciado

`inc/elementor-cleaner.php` desencola los assets de Elementor en páginas que no usan el editor. Se mantiene el archivo aunque Elementor no esté activo (previsión de rendimiento).

---

## 2026-05-07 — Sistema de tokens del draft como referencia

El draft (`/draft/styles/tokens.css`) define la paleta y tipografía del nuevo EKIN. Toda la migración de páginas debe usar esos tokens como referencia.

Por ahora los tokens se replican en cada CSS de página hasta integrarlos globalmente en `style.css` (Fase 4+).

---

## 2026-05-07 — Formulario de contacto provisional

El shortcode `[nmh-contact-forms]` es el objetivo final. Mientras tanto, campos HTML nativos con estilos del draft. No se usa ningún plugin de formularios de terceros (CF7, etc.).

---

## 2026-05-07 — Enqueue condicional de CSS por página

Cada página del nuevo rediseño tiene su propio CSS encolado condicionalmente con `is_page_template()`. No se mezcla con el `style.css` global hasta refactor completo.

---

## 2026-05-07 — Sistema tipográfico único (draft)

Fraunces + Inter Tight + JetBrains Mono como sistema homogéneo en toda la web. Confirmado por el cliente aunque es probable que pida cambios en fases posteriores. Hasta ese momento, no se introduce ninguna otra familia tipográfica.

Referencia exacta: `font-variation-settings: "opsz" 144, "SOFT" 30` en Fraunces (display/serif).

---

## 2026-05-07 — Assets con GSAP

GSAP 3.12.5 + ScrollTrigger via CDN Cloudflare. Solo se encolan en `is_front_page()`. `animations.js` depende de `gsap`. `main.js` depende de `jquery` + `gsap`.

Versionado con `filemtime()` en desarrollo para evitar caché.
