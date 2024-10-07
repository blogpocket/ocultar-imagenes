<?php
/*
Plugin Name: Ocultar Imágenes Manualmente
Description: Permite al administrador ocultar todas las imágenes del sitio web reemplazándolas por su texto alternativo o un mensaje predeterminado.
Version: 1.3
Author: A. Cambronero Blogpocket.com
*/

// Función principal para ocultar imágenes
function ocultar_imagenes_manual($content) {
    // Obtener el valor de la opción de activación
    $activar_ocultacion = get_option('activar_ocultacion_imagenes');

    if ($activar_ocultacion) {
        // Reemplazar etiquetas <img> con su atributo alt o mensaje predeterminado
        $content = preg_replace_callback('/<img[^>]*>/i', 'reemplazar_imagen_por_alt', $content);
    }
    return $content;
}

// Función de reemplazo para cada imagen
function reemplazar_imagen_por_alt($matches) {
    $img_tag = $matches[0];

    // Buscar el atributo alt
    if (preg_match('/alt=["\']([^"\']*)["\']/i', $img_tag, $alt_matches)) {
        $alt_text = $alt_matches[1];
        // Verificar si el alt está vacío
        if (trim($alt_text) == '') {
            $alt_text = 'No hay ALT [Imagen oculta en apoyo al Día Mundial de la Vista]';
        }
    } else {
        $alt_text = 'No hay ALT [Imagen oculta en apoyo al Día Mundial de la Vista]';
    }

    // Devolver el texto alternativo en un párrafo
    return '<p><strong>[Imagen ocultada en apoyo al Día Mundial de la VIsta: ' . esc_html($alt_text) . ']</strong></p>';
}

// Añadir el filtro al contenido
add_filter('the_content', 'ocultar_imagenes_manual');

// Crear la página de configuración en el menú de administración
function ocultar_imagenes_admin_menu() {
    add_options_page(
        'Ocultar Imágenes',
        'Ocultar Imágenes',
        'manage_options',
        'ocultar-imagenes-config',
        'ocultar_imagenes_config_page'
    );
}
add_action('admin_menu', 'ocultar_imagenes_admin_menu');

// Mostrar la página de configuración
function ocultar_imagenes_config_page() {
    // Verificar permisos
    if (!current_user_can('manage_options')) {
        wp_die('No tienes permisos para acceder a esta página.');
    }

    // Guardar la configuración si se ha enviado el formulario
    if (isset($_POST['activar_ocultacion_imagenes_nonce']) && wp_verify_nonce($_POST['activar_ocultacion_imagenes_nonce'], 'guardar_configuracion')) {
        $activar = isset($_POST['activar_ocultacion_imagenes']) ? 1 : 0;
        update_option('activar_ocultacion_imagenes', $activar);
        echo '<div class="updated"><p>Configuración guardada.</p></div>';
    }

    // Obtener el valor actual de la opción
    $activar_ocultacion = get_option('activar_ocultacion_imagenes');

    ?>

    <div class="wrap">
        <h1>Configuración de Ocultar Imágenes</h1>
        <form method="post" action="">
            <?php wp_nonce_field('guardar_configuracion', 'activar_ocultacion_imagenes_nonce'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Activar ocultación de imágenes</th>
                    <td>
                        <input type="checkbox" name="activar_ocultacion_imagenes" value="1" <?php checked(1, $activar_ocultacion); ?> />
                        <label for="activar_ocultacion_imagenes">Marque esta casilla para ocultar las imágenes del contenido.</label>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>

    <?php
}
