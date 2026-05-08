# PROJECT OVERVIEW: NMNeoSelene — EKIN Value Development Theme

## Descripción
Tema WordPress personalizado para **EKIN Value Development**, empresa de inversión inmobiliaria en la Costa del Sol (Marbella). Orientado a inversores internacionales.

## Estado general
- **Fase**: Tema funcional parcialmente construido. Diseño legacy en producción. Nuevo draft visual listo para migrar por fases.
- **Objetivo inmediato**: Presentación Kit Digital + implementar cambios del cliente

## Stack técnico
- WordPress custom theme (PHP, jQuery, Bootstrap 5.3)
- **ACF Free** (sin Pro — sin Repeater, Flexible Content, Gallery) — para todo el sitio
- Elementor (compatibilidad, silenciado fuera del editor)
- GSAP 3.12.5 + ScrollTrigger via CDN
- Fuentes del draft: Fraunces, Inter Tight, JetBrains Mono (via Google Fonts)
- Fuentes legacy actuales: Century Gothic, Poppins, Montserrat, Roboto + Material Icons

## Plugins requeridos

| Plugin | Obligatorio | Propósito |
|--------|-------------|-----------|
| **Advanced Custom Fields (Free)** | ✅ Sí | Contenido dinámico en todas las páginas |
| **NMH Contact Forms** (plugin propio) | ✅ Sí | Shortcode `[nmh-contact-forms]` en página de contacto |
| **Elementor** | ⚠️ Opcional | Compatibilidad silenciada; solo si el cliente lo usa |

## Arquitectura objetivo (modular)
```
/inc/
  env-loader.php       ← carga .env
  enqueue.php          ← assets pipeline
  acf-loader.php       ← detección ACF + control admin UI
  acf-fields.php       ← definición field groups por página
  elementor-cleaner.php ← silencia Elementor fuera del editor
```
Estado actual: todo en `functions.php`. Migración incremental por fases.

## Páginas/templates existentes
- `front-page.php` — Home (video hero, secciones servicios)
- `page-templates/page-contacto.php` — Contacto (shortcode `[nmh-contact-forms]`)
- `page-templates/page-apartments.php` — Listado apartamentos
- `page-nosotros.php`, `page-propietarios.php`, `page-zona-inversor.php`
- `page-blog-template.php`, `page-centrado-contenido.php`
- `single-apartments.php`, `single-propiedades.php`
- `404.php`, `archive.php`, `search.php`

## CPT y funcionalidades registradas
- CPT `apartments` con taxonomía `property_type`
- AJAX handler `gph_cargar_contenido` para zona inversor
- Customizer con slider (5 imágenes, constante `MI_TEMA_SLIDER_COUNT`)
- Slick Slider via CDN
- Menus: `header-menu`, `footer-menu`
- Sidebars: `sidebar-1`, `page-sidebar`, `blog-sidebar`

## Draft (nuevo diseño)
Carpeta `/draft/` — prototipo HTML estático completo:
- **Paleta**: Navy oscuro `#0a1628` + dorado champagne `#c9a55c`
- **Tipografía**: Fraunces (display) + Inter Tight (sans) + JetBrains Mono
- **Tokens**: `/draft/styles/tokens.css` — referencia de verdad para el rediseño
- **Páginas**: Home (`index.html`), Method (`method.html`), Investor (`investor.html`), Newsletter (`newsletter.html`)

## Fases de migración
| Fase | Estado | Descripción |
|------|--------|-------------|
| 0 | ✅ | Análisis inicial, AI_STATE configurado |
| 1 | 🔄 | Página de Contacto con nuevo diseño |
| 2 | ⬜ | Crear arquitectura /inc/ modular |
| 3 | ⬜ | ACF Free en front-page (tabs + helper) |
| 4 | ⬜ | Rediseño Home |
| 5+ | ⬜ | Method, Investor, Newsletter, tokens globales |

## Archivos intocables
- `.gitignore`
- `sftp.json`
