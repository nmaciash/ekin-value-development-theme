# NEXT SESSION

## ⚠️ INSTRUCCIÓN DE ARRANQUE — LEER ANTES DE PROPONER NADA

**El servidor es externo y compartido. Claude no puede verificar producción.**
El usuario sube los archivos por SFTP manualmente y valida con capturas en el navegador.
Claude solo trabaja sobre archivos locales. No preguntar por subidas, no proponer planes de verificación.

**Flujo de trabajo:**
1. Leer `AI_STATE/01_CURRENT_TASK.md` y `AI_STATE/05_BUGS.md`
2. El usuario dice qué tarea atacar
3. Claude localiza el código, propone el cambio, lo ejecuta
4. Repite hasta que el usuario aprueba

**NO hacer al arrancar:**
- No proponer "plan de sesión" con bloques numerados
- No preguntar si ha subido archivos ni sugerir verificaciones
- No sugerir fases que no hayan sido pedidas

---

## Primer paso exacto

**Confirmar imagen en producción** (usuario sube `assets/images/ekin-hd.png` por SFTP y verifica que la sección aparece entre 02 y 03).

Si la imagen está OK → arrancar **Fase 6: Investor page**:
- Leer `/draft/investor.html`, extraer secciones y crear:
  - `page-templates/page-investor.php`
  - `assets/css/page-investor.css`
  - Enqueue condicional en `inc/enqueue.php`
- El usuario crea la página en WP Admin y asigna el template.

---

## Fases pendientes (en orden)

- Fase 6: Investor page
- Fase 7: Newsletter page
- Fase 8: Unificación tipográfica en páginas legacy

## Bugs menores abiertos (no bloquean)
- 2 inline styles en `front-page.php` → mover a `front-page.css`
- Páginas legacy con header fijo: verificar `padding-top` suficiente
- Nav vacío si no hay menú asignado en WP admin
- Plugin NMH Contact Forms: instalar y reactivar shortcode en `page-contacto.php`
