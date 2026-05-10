# NEXT SESSION

## Instrucción de arranque
Lee `AI_STATE/01_CURRENT_TASK.md`, `AI_STATE/05_BUGS.md` y `AI_STATE/06_CONTEXT_SNAPSHOTS.md`.
Analiza el estado. Espera a que el usuario diga qué tarea atacar. No propongas planes no pedidos.

---

## Primer paso exacto

**Revisión tab por tab del meta box "Contenido · Home" — continuación.**

Los errores de Sesión 14 (Hero rotations + h2 em) están resueltos. Ahora:

1. El usuario confirma que los archivos subidos funcionan correctamente en producción.
2. Se revisa cada tab restante del Home buscando errores o mejoras:
   - Approach
   - Capabilities
   - Method Teaser
   - Editorial
   - Why Investors
   - CTA

3. Cuando el Home esté validado, se audita **página por página** el resto del sitio:
   - El usuario ha detectado que al menos una página no tiene campos ACF — identificar cuál y añadirlos.
   - Páginas a revisar: Nosotros, Propietarios, Contacto, Method, Legal.

---

## Bugs abiertos (ver 05_BUGS.md para detalle)

- ⚠️ 2 inline styles en `front-page.php` → mover a `front-page.css`
- ⚠️ Páginas legacy con header fijo: verificar `padding-top` suficiente en cada página
- ⚠️ Nav vacío si no hay menú asignado en WP admin
- ⚠️ Plugin NMH Contact Forms: instalar y reactivar shortcode en `page-contacto.php`

## Fases pendientes (después de auditoría)

- Fase 6: Investor page
- Fase 7: Newsletter page
- Fase 8: Unificación tipográfica en páginas legacy
