<?php
/**
 * env-loader.php — Carga variables de entorno desde .env
 *
 * Parsea el archivo .env en la raíz del tema y las inyecta en $_ENV y putenv().
 * Si el archivo no existe, continúa sin error (compatible con producción sin .env).
 *
 * Uso: getenv('ACF_SHOW_ADMIN'), getenv('ENVIRONMENT'), etc.
 */

$env_file = get_template_directory() . '/.env';

if ( ! file_exists( $env_file ) ) {
    return;
}

$lines = file( $env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );

foreach ( $lines as $line ) {
    $line = trim( $line );

    // Ignorar comentarios y líneas vacías
    if ( $line === '' || $line[0] === '#' ) {
        continue;
    }

    // Separar en clave=valor
    if ( strpos( $line, '=' ) === false ) {
        continue;
    }

    list( $key, $value ) = explode( '=', $line, 2 );
    $key   = trim( $key );
    $value = trim( $value );

    // Eliminar comillas envolventes si las hay
    if ( strlen( $value ) >= 2 ) {
        $first = $value[0];
        $last  = $value[ strlen( $value ) - 1 ];
        if ( ( $first === '"' && $last === '"' ) || ( $first === "'" && $last === "'" ) ) {
            $value = substr( $value, 1, -1 );
        }
    }

    if ( ! array_key_exists( $key, $_ENV ) ) {
        $_ENV[ $key ] = $value;
        putenv( "{$key}={$value}" );
    }
}
