# NEXT SESSION

## Instrucción de arranque
Lee `AI_STATE/01_CURRENT_TASK.md`, `AI_STATE/05_BUGS.md` y `AI_STATE/06_CONTEXT_SNAPSHOTS.md`.
Analiza el estado. Espera a que el usuario diga qué tarea atacar. No propongas planes no pedidos.

---

## Primer paso exacto

**Subir a producción los archivos de Sesiones 16 y 17 y verificar.**

Archivos a subir via SFTP:
- `inc/acf-fields.php` (Sesión 16)
- `page-templates/page-method.php` (Sesión 16)
- `page-templates/page-contacto.php` (Sesión 16)
- `assets/css/site.css` (Sesión 17)
- `assets/css/front-page.css` (Sesión 17)
- `front-page.php` (Sesión 17)
- `footer.php` (Sesión 17)
- `style.css` (Sesión 17)

Verificar en producción:
1. Home: contraste eyebrow/em/pillar-num correcto en sección Capabilities y Method
2. Footer: headings Navigate/Disciplines/Office con tamaño visual correcto (eran h5, ahora h3 con mismos estilos)
3. Nav links: área táctil correcta en móvil
4. robots.txt: acceder a `https://ekinvaluedevelopment.com/robots.txt` — debe devolver contenido Yoast (si da 404, flush permalinks en WP admin)

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
