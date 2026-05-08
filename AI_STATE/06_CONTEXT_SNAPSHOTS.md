# CONTEXT SNAPSHOTS

## Snapshot 002 — 2026-05-07 (actualización)

### Nuevas directrices añadidas esta sesión

**ACF Free obligatorio:**
- Sin Repeater, Flexible Content ni Gallery (son Pro)
- Campos individuales con sufijo numérico para contenido repetido
- Definición en `inc/acf-fields.php` con `acf_add_local_field_group()`
- Tabs siempre `placement => 'top'` (horizontales)
- Helper `nmh_get_acf_field()` para fallback seguro en templates
- Control de admin UI via `ACF_SHOW_ADMIN` en `.env`

**Arquitectura modular /inc/:**
- `functions.php` → solo carga y hace require de /inc/
- Migración incremental: no se rompe lo existente
- Elementor silenciado fuera del editor via `inc/elementor-cleaner.php`
- Sistema de entorno `.env` via `inc/env-loader.php`

**Seguridad obligatoria:**
- `esc_html()`, `esc_attr()`, `esc_url()`, `absint()` en todo output PHP
- PROHIBIDO CSS/JS inline en archivos PHP

**Assets:**
- GSAP 3.12.5 + ScrollTrigger via CDN Cloudflare
- Solo en `is_front_page()`
- Versionado con `filemtime()`

### Estado de la tarea activa (Fase 1 — Contacto)
El template `page-templates/page-contacto.php` existe con HTML estructurado y shortcode `[nmh-contact-forms]`. Falta:
1. `assets/css/page-contacto.css` con estilos del draft
2. Enqueue condicional en `functions.php`
3. Formulario HTML provisional (el shortcode va después)

---

## Snapshot 001 — 2026-05-07 (inicial)

### Situación
Primera sesión con AI_STATE activo. El tema WordPress `nmneoselene` para EKIN Value Development tiene una base funcional (CPT, AJAX zona inversor, Customizer, Slick, Bootstrap) pero visualmente usa un diseño legacy.

Existe un draft HTML estático completo en `/draft/` con el nuevo sistema visual (navy + champagne gold, Fraunces + Inter Tight, tokens CSS) listo para migrar a WordPress.

### Tarea activa al inicio
Página de Contacto: el template `page-templates/page-contacto.php` ya existe con estructura HTML y el shortcode `[nmh-contact-forms]` integrado, pero sin los estilos del nuevo diseño.

### Decisión de arquitectura tomada
Migración por fases. Cada página nueva tiene su propio CSS encolado condicionalmente. No se toca el `style.css` global hasta refactor posterior. Los tokens del draft son la referencia de diseño.
