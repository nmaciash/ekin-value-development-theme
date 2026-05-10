# AGENTS — NMH EkinValueDevelopment Theme

## Rol
Actúa como Desarrollador Senior de WordPress y Arquitecto de Sistemas.
Objetivo: preparar este theme para presentación a Kit Digital e implementar cambios del cliente.

---

## Contexto del proyecto

- Tema WordPress personalizado para **EKIN Value Development** (inversión inmobiliaria, Costa del Sol)
- Existe `/draft/` con el nuevo sistema visual HTML estático → migrar a WP por fases
- El theme está **parcialmente construido**: functions.php con contenido, CPT apartments, AJAX zona inversor
- La migración al nuevo diseño se hace por fases sin romper lo existente

---

## Arquitectura

- **Modular, escalable y desacoplada**
- Toda la lógica se organiza en `/inc/` (un archivo por responsabilidad)
- `functions.php` solo carga el entorno y hace `require` de los archivos de `/inc/`

### Estructura `/inc/` objetivo

| Archivo | Responsabilidad |
|---|---|
| `inc/env-loader.php` | Carga variables de `.env` |
| `inc/enqueue.php` | Registro y encola de assets |
| `inc/acf-loader.php` | Detección ACF + registro field groups |
| `inc/acf-fields.php` | Definición de campos ACF por página |
| `inc/elementor-cleaner.php` | Silencia Elementor fuera del editor |

> **Estado actual:** functions.php concentra todo. La migración a `/inc/` se hace de forma incremental, sin romper lo que ya funciona.

---

## Reglas absolutas

| Regla | Descripción |
|---|---|
| **CSS inline** | PROHIBIDO. Todo CSS en archivos `.css` dedicados |
| **JS inline** | PROHIBIDO. Todo JS en archivos `.js` dedicados |
| **`console.log` / `var_dump`** | PROHIBIDO en producción |
| **Rutas** | Siempre `get_template_directory_uri()` |
| **Archivos intocables** | NO modificar `.gitignore` ni `sftp.json` |

---

## Seguridad (obligatorio en todo output PHP)

Sanitizar siempre al mostrar datos:
- `esc_html()` — texto visible
- `esc_attr()` — atributos HTML
- `esc_url()` — URLs
- `absint()` — enteros positivos

---

## Sistema de entorno (`inc/env-loader.php`)

- Función: `nmh_load_env()`
- Busca `.env` en la raíz del tema
- Parsea ignorando líneas con `#`
- Carga variables con `putenv()` y `$_ENV`
- Si no existe → fallo silencioso (no lanza error)

---

## Pipeline de assets (`inc/enqueue.php`)

- Encolar `style.css` (tema)
- Encolar `assets/css/main.css`
- Encolar GSAP 3.12.5 + ScrollTrigger via CDN Cloudflare
- Encolar `assets/js/animations.js` → depende de `gsap`
- Encolar `assets/js/main.js` → depende de `jquery`, `gsap`
- Versionado con `filemtime()` en desarrollo
- GSAP y animations solo en front-page (`is_front_page()`)

---

## ACF Free — Contenido dinámico

### Regla principal
**ACF Free únicamente.** No usar características de ACF Pro:
- ~~Repeater~~
- ~~Flexible Content~~
- ~~Gallery field~~

Si hay que repetir contenido: campos individuales (`product_1`, `product_2`, etc.)

### Loader (`inc/acf-loader.php`)

- Detectar ACF: `if (function_exists('acf'))`
- Control de visibilidad de la UI en admin:
  ```php
  getenv('ACF_SHOW_ADMIN') === 'true'  // mostrar UI
  // false o no definido              // ocultar UI
  ```

### Definición de campos (`inc/acf-fields.php`)

- Toda definición de field groups va aquí, con `acf_add_local_field_group()`
- **NUNCA** definir field groups fuera de este archivo

### Estructura de tabs (organización obligatoria)

Cada página organiza sus campos en **pestañas horizontales**, una por sección:

```php
acf_add_local_field_group(array(
    'key'   => 'group_front_page',
    'title' => 'Contenido de Página de Inicio',
    'fields' => array(
        array(
            'key'       => 'field_hero_tab',
            'label'     => 'Hero Section',
            'name'      => 'hero_tab',
            'type'      => 'tab',
            'placement' => 'top',   // SIEMPRE top, nunca left
        ),
        array(
            'key'           => 'field_hero_image',
            'label'         => 'Imagen Principal',
            'name'          => 'hero_image',
            'type'          => 'image',
            'return_format' => 'url',
        ),
        // Pestaña siguiente...
    ),
    'location' => array(array(array(
        'param'    => 'page_type',
        'operator' => '==',
        'value'    => 'front_page',
    ))),
));
```

### Reglas de campos

- `placement => 'top'` en todos los tabs (pestañas horizontales siempre)
- `return_format => 'url'` en campos de imagen
- `default_value` en todos los campos de texto (el diseño nunca se rompe)
- Verificar existencia de ACF antes de llamar a sus funciones

### Helper function

Función disponible en el tema para obtener campos con fallback:

```php
// Uso en templates
$hero_title = nmh_get_acf_field('hero_title', 'Título por defecto');
$hero_image = nmh_get_acf_field('hero_image', get_template_directory_uri() . '/assets/images/default.jpg');
```

---

## Elementor (`inc/elementor-cleaner.php`)

- Si la página **NO** está editada con Elementor: desencolar sus estilos y scripts
- Eliminar estilos globales de Elementor y Google Fonts por defecto
- **Mantener el archivo:** no eliminarlo, es necesario para rendimiento

---

## Compatibilidad

- ACF Free (ver sección ACF)
- Elementor (modo optimizado, ver sección Elementor)
- Automatización externa con Python (respetar estructura de archivos)

---

## Tipografía

Sistema único del draft, homogéneo en toda la web:

- **Display/Serif:** Fraunces (`font-variation-settings: "opsz" 144, "SOFT" 30`)
- **Sans:** Inter Tight
- **Mono:** JetBrains Mono

Cargadas via Google Fonts. Colores definidos en `/draft/styles/tokens.css` → se integrarán globalmente en fases posteriores.

---

## Tareas y fases

### ✅ Fase 0 — Análisis y setup AI_STATE
Completado en sesión 2026-05-07.

### 🔄 Fase 1 — Página de Contacto (ACTIVA)
- Crear `assets/css/page-contacto.css` con estilos del draft (tokens navy + champagne gold)
- Añadir enqueue condicional en functions.php
- Formulario HTML provisional (nombre, teléfono, email, mensaje) — el shortcode `[nmh-contact-forms]` se añadirá cuando esté el plugin

### ⬜ Fase 2 — Arquitectura /inc/
- Crear `/inc/` con los módulos descritos arriba
- Migrar contenido de functions.php a sus archivos correspondientes
- Sin romper funcionalidad existente

### ⬜ Fase 3 — ACF Free en todo el sitio
- `inc/acf-fields.php` con estructura de tabs para **cada página** (home, contacto, nosotros, propietarios, zona inversor, etc.)
- Helper `nmh_get_acf_field()` disponible globalmente
- Integrar en todos los templates de forma progresiva

### ⬜ Fase 4 — Rediseño Home
- Migrar draft `index.html` a `front-page.php`

### ⬜ Fases siguientes
- Method, Investor, Newsletter (del draft)
- Integración global de tokens en `style.css`
- Refactor de header/footer

---

## Home page — ACF constraints (front-page.php)

El `front-page.php` es completamente editable desde WP Admin salvo las siguientes excepciones:

| Elemento hardcoded | Razón |
|---|---|
| **Hero rotations** (3 slides con `<span class="line">` y `<em>`) | Estructura HTML acoplada a animaciones JS. El JS controla qué `.rot` es activo. No es texto plano. Requiere desarrollador. |
| **Intro statement** "From acquisition… to exit." | Contiene `<span class="dim">` y `<em>` integrados en posiciones fijas. Cambiar el texto rompe la maquetación sin tocar el HTML. |
| **Marquee de ciudades** | Contenido decorativo duplicado para la animación CSS de scroll infinito. No es contenido editorial. |
| **Full-bleed image** `ekin-hd.png` | Asset fijo de branding. Cambiar requiere subir nuevo asset y editar el template. |
| **Decoradores tipográficos** `+`, `€`, `M` en stats | Las cifras son editables (`home_stat*_num`). Los símbolos son fijos por diseño. |
| **URLs de navegación** `/method/`, `/contacto/` | Rutas internas WP hardcoded con `home_url()`. Cambiarlas requiere que el slug de la página coincida. |

### Mapa de tabs ACF → secciones de front-page.php

| Tab en WP Admin | Sección en página | Eyebrow |
|---|---|---|
| Hero | Hero con vídeo | 01 |
| Approach | Sección intro oscura | 02 |
| Capabilities | Pilares / servicios | 03 |
| Method Teaser | Teaser de las 5 fases | 04 |
| Editorial | "Where we operate" | 05 |
| Why Investors | Cards de razones | 06 |
| CTA | Sección de contacto final | 07 |

### Cómo hacer editable un elemento actualmente hardcoded

1. Definir el campo en `inc/acf-fields.php` dentro de `group_home`, con `default_value` igual al contenido actual.
2. Añadir la variable con `nmh_get_acf_field()` al bloque de variables inicial de `front-page.php`.
3. Sustituir el texto hardcoded por `<?php echo esc_html( $var ); ?>` (o `nl2br( esc_html( $var ) )` si admite saltos de línea).
4. Para elementos con HTML mixto (spans, em, br), evaluar si conviene `wp_kses()` o dividir el campo en partes.

---

## Pre-deploy checklist

```bash
# Buscar CSS inline
grep -r "style=" --include="*.php" --include="*.html"

# Buscar JS de debug
grep -r "console.log\|var_dump" --include="*.js" --include="*.php"
```

- [ ] No hay CSS/JS inline en archivos PHP
- [ ] No hay `console.log()` ni `var_dump()` activos
- [ ] Assets cargan correctamente en Laragon
- [ ] `sftp.json` y `.gitignore` no modificados
- [ ] Campos ACF tienen `default_value` en todos los textos
