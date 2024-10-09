<?php
/*
Plugin Name: Ocultar Imágenes
Description: Permite al administrador ocultar todas las imágenes del sitio web, reemplazándolas por su texto alternativo o un mensaje predeterminado personalizable.
Version: 1.4
Author: A. Cambronero Blogpocket.com
*/

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

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
add_filter('the_content', 'ocultar_imagenes_manual');

// Función de reemplazo para cada imagen
function reemplazar_imagen_por_alt($matches) {
    $img_tag = $matches[0];
    $mensaje_personalizado = get_option('mensaje_personalizado_ocultar_imagenes', 'No hay ALT');

    // Buscar el atributo alt
    if (preg_match('/alt=["\']([^"\']*)["\']/i', $img_tag, $alt_matches)) {
        $alt_text = $alt_matches[1];
        // Verificar si el alt está vacío
        if (trim($alt_text) == '') {
            $alt_text = $mensaje_personalizado;
        }
    } else {
        $alt_text = $mensaje_personalizado;
    }

    // Devolver el texto alternativo en un párrafo
    return '<p class="texto-alternativo"><strong>[Imagen oculta en apoyo al Día Mundial de la Vista: ' . esc_html($alt_text) . ']</strong></p>';
}

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
    if (isset($_POST['ocultar_imagenes_nonce']) && wp_verify_nonce($_POST['ocultar_imagenes_nonce'], 'guardar_configuracion')) {
        $activar = isset($_POST['activar_ocultacion_imagenes']) ? 1 : 0;
        update_option('activar_ocultacion_imagenes', $activar);

        // Guardar mensaje personalizado
        if (isset($_POST['mensaje_personalizado'])) {
            $mensaje_personalizado = sanitize_text_field($_POST['mensaje_personalizado']);
            update_option('mensaje_personalizado_ocultar_imagenes', $mensaje_personalizado);
        }

        echo '<div class="updated"><p>Configuración guardada.</p></div>';
    }

    // Obtener los valores actuales de las opciones
    $activar_ocultacion = get_option('activar_ocultacion_imagenes');
    $mensaje_personalizado = get_option('mensaje_personalizado_ocultar_imagenes', 'No hay ALT');

    ?>

    <div class="wrap">
        <h1>Configuración de Ocultar Imágenes</h1>
        <form method="post" action="">
            <?php wp_nonce_field('guardar_configuracion', 'ocultar_imagenes_nonce'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Activar ocultación de imágenes</th>
                    <td>
                        <input type="checkbox" name="activar_ocultacion_imagenes" value="1" <?php checked(1, $activar_ocultacion); ?> />
                        <label for="activar_ocultacion_imagenes">Marque esta casilla para ocultar las imágenes del contenido.</label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mensaje personalizado</th>
                    <td>
                        <input type="text" name="mensaje_personalizado" value="<?php echo esc_attr($mensaje_personalizado); ?>" class="regular-text" />
                        <p class="description">Este mensaje se mostrará cuando la imagen no tenga texto alternativo.</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>

    <?php
}

// Mostrar un aviso en el panel de administración si la ocultación está activada
function ocultar_imagenes_admin_notice() {
    $activar_ocultacion = get_option('activar_ocultacion_imagenes');
    if ($activar_ocultacion) {
        echo '<div class="notice notice-info is-dismissible">
            <p>La ocultación de imágenes está actualmente <strong>activada</strong>.</p>
        </div>';
    }
}
add_action('admin_notices', 'ocultar_imagenes_admin_notice');

// Registrar opciones durante la activación del plugin
function ocultar_imagenes_activate() {
    add_option('activar_ocultacion_imagenes', 0);
    add_option('mensaje_personalizado_ocultar_imagenes', 'No hay ALT');
}
register_activation_hook(__FILE__, 'ocultar_imagenes_activate');

// Eliminar opciones durante la desactivación del plugin (opcional)
function ocultar_imagenes_deactivate() {
    delete_option('activar_ocultacion_imagenes');
    delete_option('mensaje_personalizado_ocultar_imagenes');
}
// Si deseas eliminar las opciones al desactivar el plugin, descomenta la siguiente línea
// register_deactivation_hook(__FILE__, 'ocultar_imagenes_deactivate');
