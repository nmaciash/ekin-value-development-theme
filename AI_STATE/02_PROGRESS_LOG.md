# PROGRESS LOG

## 2026-05-10 — Sesión 16: ACF completo para Method + shortcode en Contacto ✅

### Completado

**Auditoría de inicio de sesión**
- Producción confirmada correcta (Home + todas las páginas subidas)
- Tabs del Home revisados: todos correctos

**group_method reescrito completo (inc/acf-fields.php)**
- Primera versión tenía solo 4 campos. Corregido en sesión: ahora cubre todo el contenido del template.
- Tab Hero: `method_hero_eyebrow`, `method_hero_h1_pre`, `method_hero_h1_em`, `method_hero_h1_small`, `method_hero_lede`
- Tab Phases: 5 fases × 3 campos cada una — `method_p{1-5}_title` (textarea, salto de línea = `<br>`), `method_p{1-5}_body`, `method_p{1-5}_items` (textarea, una línea = un ítem de lista)
- Tab Disciplines: `method_disc_eyebrow`, `method_disc_h2` + `_em`, `method_disc_intro`, 4 disciplinas × 3 campos — `method_d{1-4}_tag`, `method_d{1-4}_title`, `method_d{1-4}_items`
- Tab CTA: `method_cta_eyebrow`, `method_cta_h2` + `_em`, `method_cta_sub`, `method_cta_btn1` + `_url`, `method_cta_btn2` + `_url`

**page-method.php reescrito completo**
- Helpers locales: `nmh_met_h2($text, $em_raw)` para H2 con cursiva; `nmh_met_items($raw)` para convertir textarea en array de `<li>`
- Fases y disciplines renderizadas con `foreach` en vez de HTML repetido × 5
- Todos los textos via `nmh_get_acf_field()` con fallbacks exactos al contenido original
- URLs de botones CTA: campo ACF con fallback automático a `get_permalink(get_page_by_path())`

**Shortcode en Contacto (inc/acf-fields.php + page-contacto.php)**
- Añadido campo `con_form_shortcode` (text) en tab Formulario del group_contacto
- Template: si el campo tiene valor → `do_shortcode()`, si está vacío → formulario HTML nativo como fallback
- Uso: pegar `[nmh-contact-forms]` en el admin cuando el plugin esté instalado

### Archivos modificados
- `inc/acf-fields.php` — group_method reescrito completo + con_form_shortcode en group_contacto
- `page-templates/page-method.php` — reescrito completo
- `page-templates/page-contacto.php` — shortcode field + lógica do_shortcode/fallback

### Decisión de sesión
- Nosotros y Propietarios son páginas legacy no usadas en la refactorización: se excluyen de la auditoría ACF.

---

## 2026-05-10 — Sesión 15: Corrección errores Sesión 14 (Hero ACF + h2 em + footer menu) ✅

### Completado

**Hero rotations — campos ACF creados (inc/acf-fields.php + front-page.php)**
- 6 campos nuevos en tab Hero: `home_hero_rot1/2/3_text` (textarea, una línea = un `<span class="line">`) + `home_hero_rot1/2/3_em` (texto plano, palabras separadas por `|` que se envuelven en `<em>` por coincidencia exacta)
- Helper `nmh_hero_rot_lines($text, $em_raw)` en `front-page.php`: divide por `\n`, aplica `<em>`, output seguro (esc_html + str_replace)
- Los 3 bloques `.rot` del template usan el helper en vez de HTML hardcoded
- Campos de botón (btn1/btn2) movidos al final del tab Hero, añadidos campos URL `home_hero_btn1_url` / `home_hero_btn2_url` con fallbacks `home_url('/method/')` y `home_url('/contacto/')`

**h2 display — `<em>` e italic restaurados (5 secciones)**
- Helper `nmh_h2_display($text, $em_raw)` en `front-page.php`: misma lógica que el de rotaciones pero con `nl2br()` al final para soportar saltos de línea
- Los 5 campos h2 (Capabilities, Method Teaser, Editorial, Why Investors, CTA) pasaron de `type: text` a `type: textarea` con `rows: 2`
- Añadidos campos `_em` compañeros para cada uno con los valores por defecto del diseño
- Template: los 5 `esc_html()` reemplazados por `nmh_h2_display()`

**Renombrado de labels ACF**
- Todas las instancias de "Palabras con acento (em)" → "Palabras con diseño destacado" en `inc/acf-fields.php`

**Footer nav menu (assets/css/site.css)**
- Añadidas reglas explícitas sobre `.footer-grid .menu li` y `.footer-grid .menu li a` para igualar el diseño del menú WP al de las listas hardcoded (Disciplines, Office)
- Reseteados: font-family, font-weight, font-size (14px), letter-spacing, text-transform, padding, display, border-radius
- `.footer-grid .menu li a::after { display: none }` elimina el subrayado de ítem activo del header

### Archivos modificados
- `inc/acf-fields.php`
- `front-page.php`
- `assets/css/site.css`

### Bugs cerrados
- 🔴 Hero rotations sin ACF → **RESUELTO**
- 🟠 h2 display sin `<em>` en 5 secciones → **RESUELTO**

---

## 2026-05-10 — Sesión 14: Alineación ACF meta boxes con diseño actual del Home ⚠️ INCOMPLETO

### Contexto
Los meta boxes del Home (group_home en inc/acf-fields.php) seguían el diseño ANTERIOR al rediseño de la Fase 4.
Mostraban tabs obsoletos en el admin (Propiedades, Equipo, Vídeo costa…) y no cubrían ninguna de las secciones nuevas.
El front-page.php tenía todo el texto nuevo hardcoded sin conexión a ACF.

### Completado
- **inc/acf-fields.php** — `group_home` reescrito completamente:
  - Eliminados 7 tabs obsoletos (Hero title/subtitle, Servicios intro, Propiedades, Imagen corporativa, Somos Servicio legacy, Vídeo costa, Equipo)
  - Añadidos 8 tabs nuevos: Hero, Approach, Capabilities, Method Teaser, Editorial, Why Investors, CTA
  - ~55 campos con `default_value` exacto al contenido que estaba hardcoded
  - Mantenidos los field keys existentes que aún se usaban: `home_s1-4_title/desc`, `home_somos_p1/p2/image`

- **front-page.php** — Variables y template actualizados:
  - Bloque PHP inicial: de 10 variables a 46 llamadas `nmh_get_acf_field()`
  - Cada sección del template usa variables en vez de texto hardcoded
  - Fallbacks = texto actual → output visual idéntico al de antes (no hay regresión de contenido)
  - Novedad: `tel:` en CTA construido con `preg_replace('/\s+/', '', $cta_phone)` para limpiar espacios del número

- **AGENTS.md** — Añadida sección "Home page — ACF constraints" con tabla de qué queda hardcoded y por qué + mapa de tabs → secciones

### Lo que QUEDA HARDCODED (decisiones documentadas en AGENTS.md)
- Hero rotations (3 slides animados con h1): estructura HTML demasiado acoplada a JS. SIN campo ACF.
- Intro statement "From acquisition… to exit.": contiene `<span class="dim">` en posiciones fijas.
- Marquee de ciudades: decorativo, duplicado para animación CSS.
- Full-bleed image ekin-hd.png: asset fijo de branding.
- Decoradores tipográficos: `+` en stat1, `€` y `M` en stat3.

### Errores/regresiones introducidos — PENDIENTES DE CORRECCIÓN (ver 05_BUGS.md)
1. **CRÍTICO**: Hero rotations sin campos ACF — el cliente no puede editar los titulares principales.
2. **VISUAL**: Los h2 display de 5 secciones perdieron el `<em>` italic. El diseño usa Fraunces italic dentro del heading como elemento visual clave. Afecta: Capabilities, Method Teaser, Editorial, Why Investors, CTA.

### Archivos modificados
- `inc/acf-fields.php` — group_home reescrito (resto de grupos intactos)
- `front-page.php` — reescrito completo
- `AGENTS.md` — sección nueva añadida al final, antes de "Pre-deploy checklist"

---

## 2026-05-09 — Sesión 13: Plantilla Legal ✅

### Completado
- Creado `page-templates/page-legal.php` (Template Name: Legal)
  - Eyebrow "Legal" + h1 con `the_title()` + fecha de última modificación en mono
  - `the_content()` del editor WP sin envolver en ACF
- Creado `assets/css/page-legal.css`
  - Contenido limitado a 720px de ancho (óptimo para lectura legal)
  - Padding superior `clamp(80px, 10vw, 140px)`, espacio inferior `clamp(48px, 7vw, 96px)`
  - Separador `border-top` antes de cada `h2` para estructurar secciones largas
  - `line-height: 1.75` en párrafos, tipografía con tokens del tema
- Añadido enqueue condicional en `inc/enqueue.php` (bloque `nmh-legal`)

### Uso
En WP Admin: Editar página legal → Atributos de página → Plantilla → Legal

### Archivos modificados
- `page-templates/page-legal.php` — creado
- `assets/css/page-legal.css` — creado
- `inc/enqueue.php` — bloque nmh-legal añadido al final

---

## 2026-05-09 — Sesión 12: Sección full-bleed imagen entre 02 y 03 ✅

### Completado
- Añadida sección `section-fullbleed-img` en `front-page.php` entre 02 The Approach y 03 Capabilities
- Imagen `assets/images/ekin-hd.png` con `loading="lazy"` + `decoding="async"` + dimensiones declaradas (1920×1080)
- Sección con `aria-hidden="true"` (imagen decorativa)
- CSS añadido en `assets/css/front-page.css`: bloque `section-fullbleed-img` con `width:100%`, `height:auto`, `line-height:0`

### Archivos modificados
- `front-page.php` — nueva sección insertada entre líneas 148-150
- `assets/css/front-page.css` — bloque `.section-fullbleed-img` añadido antes del bloque Pillars

### Pendiente del usuario
- Subir `assets/images/ekin-hd.png` al servidor vía SFTP

---

## 2026-05-08 — Sesión 11: Fase 5 Method page ✅ + Contact traducción ✅

### Completado
- Creado `page-templates/page-method.php` (Template Name: Method, 4 secciones, ACF + fallbacks)
- Creado `assets/css/page-method.css` (hero dark, phase-rows dark, disciplines light, CTA dark)
- Enqueue condicional añadido en `inc/enqueue.php`
- Iteraciones visuales tras capturas del usuario:
  - Fondos de sección corregidos (phase-rows y disciplines estaban invertidos)
  - Phase numbers: tamaño `clamp(52px,6vw,88px)`, Fraunces con `font-variation-settings: "opsz" 144, "SOFT" 50`
  - Listas de fases: `var(--font-sans)` en vez de mono
  - Hero h1 con `font-size: var(--t-h1)` explícito
  - CTA dark como en el draft
- `page-templates/page-contacto.php` traducido al inglés (fallbacks + labels + placeholders + botón)
- `assets/css/page-contacto.css` — eliminado divisor `::before` entre secciones

### Archivos modificados
- `page-templates/page-method.php` — creado
- `assets/css/page-method.css` — creado
- `inc/enqueue.php` — bloque nmh-method añadido
- `page-templates/page-contacto.php` — traducción EN
- `assets/css/page-contacto.css` — eliminado `.contact-form-section::before`

---

## 2026-05-08 — Sesión 10: Deploy Home + arranque Fase 5

### Completado
- Home subido a producción vía SFTP ✅
- Home verificado en navegador (escritorio + móvil) ✅
- Fase 5 Method page iniciada

---

## 2026-05-08 — Sesión 9: Menú hamburguesa ✅

### Bugs resueltos
- **Overlay encima de la X / arranca en top incorrecto**: `inset: 72px 0 0 0` no coincidía con la altura real del header (22px + 85px logo + 22px = 129px). Cambiado a `inset: 130px 0 0 0`.
- **Menú desaparece al hacer scroll**: `backdrop-filter` directo en `.site-header.is-scrolled` creaba un *containing block* para el `site-nav-bar` (`position: fixed` hijo). Al añadir `.is-scrolled`, el overlay pasaba a posicionarse relativo al header en vez del viewport y colapsaba. Solución: mover `backdrop-filter` a un `::before` pseudo-elemento del header.

### Archivos modificados
- `assets/css/site.css`
  - `.site-header`: añadido `::before` con `position: absolute; inset: 0; z-index: -1` (vacío por defecto)
  - `.site-header.is-scrolled`: eliminado `backdrop-filter` directo; solo mantiene `background` y `border-bottom-color`
  - `.site-header.is-scrolled::before`: `backdrop-filter: blur(18px) saturate(140%)` y webkit-prefix
  - `.site-nav-bar` (mobile): `inset: 72px 0 0 0` → `inset: 130px 0 0 0`; `padding` restaurado a `32px var(--gutter) 48px`

### Decisión: Zona Inversor descartada
La página `page-zona-inversor.php` y su AJAX no van a usarse. Tarea eliminada del backlog.

---

## 2026-05-08 — Sesión 8: Retoques visuales Home ✅ + correcciones JS legacy

### Home — declarada finalizada al cierre de sesión

### Archivos modificados
- `assets/css/front-page.css`
  - `.hero-title-list`: `clamp(34px, 4.6vw, 64px)` → `clamp(42px, 5.8vw, 84px)` (textos transición demasiado pequeños)
  - `.hero-title .line`: añadido `font-size: inherit; line-height: inherit` — el legacy `span { font-size: 1.4rem }` de `style.css` pisaba el tamaño
  - `.hero-title em`: añadido `font-size: inherit` — mismo problema, el reset global de `em` en `style.css` lo aplanaba a `1rem`
  - `.stats dt span`: añadido `font-size: inherit; line-height: inherit` — el "240" de `€240M` era un `<span>` aplastado por el legacy
  - `.footer-kit`: centrado con `justify-content: center`, imagen de 48px → 80px, separadores arriba y abajo
  - `.side-rail`: `bottom: 22px` → `top: 50%; transform: translateY(-50%)` (iconos tel+mail al centro vertical)

- `footer.php`
  - `.footer-kit` movido encima de `.footer-bottom` (entre el grid de columnas y el copyright)

- `front-page.php`
  - Fallback `$ed_img` cambiado de `''` a `get_template_directory_uri() . '/assets/images/plate-002-costa-sol.jpg'` — imagen editorial se carga automáticamente sin ACF

- `assets/js/scripts.js`
  - Línea 34: protegido con `&& $(".nm-nav").length` — `.nm-nav` no existe en el nuevo header, devolvía `undefined` al llamar `.position()`
  - Línea 61: `.hamburger-btn` protegido con `if (hambtn)` — `.hamburger-btn` no existe en el nuevo header, devolvía `null` al llamar `.addEventListener`

### Patrón de bug identificado (importante)
El `style.css` legacy contiene resets globales agresivos:
- `p, strong, li, span { font-size: 1.4rem }` — aplasta cualquier `<span>` sin clase específica
- `h1, h2, h3, h4, h5, h6, p, span, a, strong, blockquote, i, b, u, em, li { font-size: 1rem; font-style: inherit }` — aplasta `<em>` e inline elements
- Solución sistemática: añadir `font-size: inherit` en los selectores de clase específicos del nuevo diseño

---

## 2026-05-08 — Sesión 7: Correcciones header (desktop + móvil) + logo imagen

### Archivos modificados
- `header.php` — brand SVG+texto reemplazado por `<img class="brand-logo">` (apunta a `assets/images/logo.png`); `<nav>` renombrado a `site-nav-bar`; añadido `<button class="nav-toggle">` hamburguesa
- `assets/css/site.css` — `.site-nav-bar` con resets del legacy (`position:static; width:auto; z-index:auto`); `.brand`/`.brand-logo` simplificados; `.nav-toggle` con animación a X; breakpoint móvil ≤880px con overlay de nav
- `assets/js/site.js` — toggle hamburguesa (`.nav-open` en header), cierre automático al clicar enlace

### Bug raíz diagnosticado y resuelto
`style.css` legacy tenía `nav { position:fixed; width:100%; justify-content:space-between; z-index:99999 }` aplicando a cualquier elemento `<nav>`. El `.site-nav-bar` heredaba esos estilos, causando que el nav se posicionara como overlay full-width independiente del header. Resuelto con resets de clase en `site.css` (mayor especificidad que el selector de elemento).

### Pendiente de verificar en producción
- Logo `assets/images/logo.png` — imagen aún no subida (placeholder preparado). Altura configurada a 85px.
- Verificar menú hamburguesa en móvil (overlay, animación X, cierre al clicar enlace)
- Verificar layout desktop con el logo imagen + menú alineado

---

## 2026-05-07 — Sesión 6: Fase 4 completada (rediseño visual Home)

### Archivos creados
- `assets/css/site.css` — tokens globales, header, footer, side-rail, botones, helpers
- `assets/css/front-page.css` — hero (video), marquee, intro, pillars, method, editorial, stats, why, cta
- `assets/js/site.js` — scroll header (.is-scrolled), copyright year auto
- `assets/js/front-page.js` — hero rotator (3 rotaciones c/6s)

### Archivos reescritos
- `header.php` — nuevo diseño: brand mark SVG, nav WP, side-rail
- `footer.php` — nuevo diseño: footer-mark, footer-grid, Kit Digital, legal links
- `front-page.php` — 7 secciones nuevas: hero, marquee, intro, pillars, method, editorial, why, cta
- `inc/enqueue.php` — Google Fonts globales (Fraunces+Inter Tight+JetBrains Mono), site.css global, front-page.css+js condicional

### Decisiones
- Hero mantiene vídeo (adaptado con .hero-video + .hero-overlay en vez de .hero-stage CSS)
- Textos en inglés (pillar titles usan ACF con fallbacks en EN)
- nmh-fonts-contacto eliminado: reemplazado por nmh-fonts global
- page-contacto.css ahora depende de nmh-site (no de nmh-fonts-contacto)
- GSAP solo en front-page
- Kit Digital logo conservado en footer

---

## 2026-05-07 — Sesión 5: Fase 3 completada (ACF en front-page)

### Archivos modificados
- `front-page.php` — 6 secciones activas conectadas con ACF + fallbacks hardcodeados
- `page-templates/page-contacto.php` — bug corregido (helper llamado con 3 args, solo acepta 2)

### Secciones conectadas
| Sección | Campos ACF |
|---------|-----------|
| Hero vídeo | `home_hero_video`, `home_hero_title`, `home_hero_subtitle` |
| Servicios | `home_servicios_intro`, `home_s[1-4]_title/desc` |
| Propiedades | `home_prop_title`, `home_prop_text`, `home_prop_motto` |
| Imagen corporativa | `home_corp_image` |
| Somos Servicio | `home_somos_title`, `home_somos_p[1-2]`, `home_somos_bullet[1-4]`, `home_somos_image` |
| Vídeo costa | `home_video_costa` |

---

## 2026-05-07 — Sesión 4: Fase 2 completada (arquitectura /inc/)

### Archivos creados
- `inc/env-loader.php` — parsea `.env` e inyecta en `$_ENV` y `putenv()`. Sin error si el archivo no existe.
- `inc/enqueue.php` — centraliza todos los assets: Bootstrap, Slick, fuentes legacy, GSAP (front-page), page-contacto
- `inc/elementor-cleaner.php` — desencola estilos/scripts de Elementor en páginas no construidas con Elementor

---

## 2026-05-07 — Sesión 3: Fase 1 completada (página de Contacto)

### Archivos creados/modificados
- `assets/css/page-contacto.css` — CSS completo con tokens navy/champagne, hero, form, responsive
- `functions.php` — añadido enqueue condicional de Google Fonts (Fraunces + Inter Tight) y page-contacto.css
- `page-templates/page-contacto.php` — reescrito: ACF integrado, formulario HTML nativo, shortcode eliminado temporalmente
