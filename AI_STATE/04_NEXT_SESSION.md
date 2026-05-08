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

## Tareas pendientes (en orden de prioridad)

### 1. Primer paso — Fase 5: Method page
Migrar `/draft/method.html` a un template WordPress nuevo.
- Crear `page-templates/page-method.php`
- Crear `assets/css/page-method.css` con tokens del draft
- Encolar condicionalmente en `inc/enqueue.php` con `is_page_template('page-templates/page-method.php')`
- Conectar campos ACF donde corresponda (fallbacks hardcodeados del draft)

### 2. Fases siguientes
- Fase 6: Investor page
- Fase 7: Newsletter page
- Fase 8: Tokens globales / unificación tipográfica en páginas legacy
- Pendiente transversal: Plugin NMH Contact Forms + reactivar shortcode en `page-contacto.php`

### 3. Bugs menores abiertos (no bloquean)
- 2 inline styles en `front-page.php` → mover a `front-page.css`
- Páginas legacy con header fijo: verificar `padding-top` suficiente
- Nav vacío si no hay menú asignado en WP admin
