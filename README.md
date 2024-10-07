# Hide Images
Allows the admin to hide all images on the website by replacing them with their alt text or a default message. This plugin is intended to support World Sight Day and promote the use of the ALT parameter.
# Upload and Install the Plugin
- Save the hide-images-october-10.php file.
- Use an FTP client or your hosting's file manager to upload the file to the WordPress plugins folder: /wp-content/plugins/.
- Go to the WordPress admin panel.
- Navigate to Plugins > Installed Plugins.
- Find "Hide Images on October 10" and click Activate.
# Test the Plugin
To make sure the plugin is working properly:
- Navigate to Settings > Hide Images and enable image hiding by checking the box that says "Check this box to hide images from content."
- Visit a post or page that contains images and verify that they are not displayed.
- You may need to purge your server and/or browser cache after checking/unchecking the hide images option for the change to take effect.
# Additional Notes
- Without Deleting Images: This method does not remove images from your media library or posts; it simply hides them from the user.
- Compatibility: This plugin only affects post and page content. If you have images in widgets or elsewhere in your theme, you may need to add additional filters.
- Automatic Restore: After October 10th, deactivate the plugin or navigate to Settings > Hide Images and uncheck the box that says "Check this box to hide images from content."
- Security: Uses WordPress functions like wp_nonce_field, wp_verify_nonce, and current_user_can to ensure only authorized users can change settings.
- User Experience: Add confirmation messages when saving settings to improve the admin experience.
- Style: You can customize the look of the settings page using CSS if needed.
- Multisite: If you are using WordPress Multisite and want this setting to be global or site-specific, additional settings will be required.
# Final Thoughts
- Backup: It's always a good idea to backup your site before installing new plugins.
- Support & Maintenance: Since this is a custom plugin, be sure to test it after WordPress updates to ensure compatibility.

------------------------------------

# Ocultar imágenes
Permite al administrador ocultar todas las imágenes del sitio web reemplazándolas por su texto alternativo o un mensaje predeterminado. Con este plugin se quiere apoyar el Día Mundial de la vista y promover el uso del parámetro ALT.
# Subir e instalar el plugin
- Guarda el archivo ocultar-imagenes-10-octubre.php.
- Utiliza un cliente FTP o el administrador de archivos de tu hosting para subir el archivo a la carpeta de plugins de WordPress: /wp-content/plugins/.
- Ve al panel de administración de WordPress.
- Navega a Plugins > Plugins instalados.
- Busca "Ocultar Imágenes el 10 de Octubre" y haz clic en Activar.
# Probar el plugin
Para asegurarte de que el plugin funciona correctamente:
- Navega a Ajustes > Ocultar Imágenes y habilita la ocultación de imágenes marcando la casilla que dice "Marque esta casilla para ocultar las imágenes del contenido."
- Visita una publicación o página que contenga imágenes y verifica que no se muestren.
- Es probable que tengas que purgar la caché del servidor y/o la del navegador tras marcar/desmarcar la opción de ocultación de las imágenes, para que el cambio tenga efecto.
# Notas adicionales
- Sin eliminar imágenes: Este método no elimina las imágenes de tu biblioteca de medios ni de tus publicaciones; simplemente las oculta al usuario.
- Compatibilidad: Este plugin afecta únicamente al contenido de las publicaciones y páginas. Si tienes imágenes en widgets o en otras partes de tu tema, es posible que necesites añadir filtros adicionales.
- Restauración automática: Después del 10 de octubre, desactiva el plugin o navega a Ajustes > Ocultar Imágenes desmarcando la casilla que dice "Marque esta casilla para ocultar las imágenes del contenido."
- Seguridad: Utiliza funciones de WordPress como wp_nonce_field, wp_verify_nonce, y current_user_can para asegurar que solo usuarios autorizados puedan cambiar la configuración.
- Experiencia de Usuario: Añade mensajes de confirmación al guardar la configuración para mejorar la experiencia del administrador.
- Estilización: Puedes personalizar el aspecto de la página de configuración mediante CSS si es necesario.
- Multisitio: Si estás utilizando WordPress Multisite y deseas que esta configuración sea global o específica por sitio, se requerirán ajustes adicionales.
# Consideraciones finales
- Backup: Siempre es buena idea hacer una copia de seguridad de tu sitio antes de instalar nuevos plugins.
- Soporte y mantenimiento: Dado que este es un plugin personalizado, asegúrate de probarlo después de actualizaciones de WordPress para garantizar su compatibilidad.
