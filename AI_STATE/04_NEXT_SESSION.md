# NEXT SESSION

## Instrucción de arranque
Lee `AI_STATE/01_CURRENT_TASK.md`, `AI_STATE/05_BUGS.md` y `AI_STATE/06_CONTEXT_SNAPSHOTS.md`.
Analiza el estado. Espera a que el usuario diga qué tarea atacar. No propongas planes no pedidos.

---

## Primer paso exacto

**Subir a producción los archivos modificados en Sesión 16 y verificar.**

Archivos a subir via SFTP:
- `inc/acf-fields.php`
- `page-templates/page-method.php`
- `page-templates/page-contacto.php`

Verificar en producción:
1. Página Method: el meta box muestra los 4 tabs (Hero, Phases, Disciplines, CTA) con todos los campos
2. Página Contacto: el tab Formulario muestra el campo Shortcode del formulario

Cuando producción esté confirmada, continuar con:
- Fase 6: Investor page
- Fase 7: Newsletter page
- Fase 8: Unificación tipográfica en páginas legacy

---

## Bugs abiertos (ver 05_BUGS.md para detalle)

- ⚠️ 2 inline styles en `front-page.php` → mover a `front-page.css`
- ⚠️ Páginas legacy con header fijo: verificar `padding-top` suficiente
- ⚠️ Nav vacío si no hay menú asignado en WP admin
- ⚠️ Plugin NMH Contact Forms: pendiente instalación — cuando esté listo, pegar `[nmh-contact-forms]` en el campo ACF de Contacto

## Páginas excluidas de auditoría ACF
- Nosotros y Propietarios: páginas legacy no usadas en la refactorización actual
