# Hide Images
Allows the administrator to hide all images on the website, replacing them with their alt text or a customizable default message. This plugin is intended to support World Sight Day and promote the use of the ALT parameter.
# Upload and Install the Plugin
- Use an FTP client or your hosting's file manager to upload the zip file to the WordPress plugins folder: /wp-content/plugins/ocultar-imagenes.
- Go to the WordPress admin panel.
- Navigate to Plugins > Installed Plugins.
- Find "Ocultar Imágenes" and click Activate.
# Steps to add CSS to your site
## Locate your CSS stylesheet
- If you're using a child theme, add the code to your child theme's style.css file.
- If you're not using a child theme, you can add the CSS in the WordPress customizer:
- Go to Appearance > Customize > Additional CSS.
- You can also use a plugin specifically for adding custom CSS, such as Simple Custom CSS or Custom CSS and JS.
## Add CSS code
- Copy the code provided in the alt-text.css file and paste it in the appropriate location depending on the method you chose.
- Make sure not to delete or alter the existing code unless you know what you're doing.
## Save changes
- If you're using the customizer, click the Publish button.
- If you edited the style.css file, save the file and upload it to the server if necessary.
## Check for changes
- Visit a page or post on your site where the alt text message is displayed.
- Refresh the page and check that the style is applied correctly.
- If you don't see the changes, try clearing your browser's cache, and if you use caching plugins, clear the site's cache as well.
# Test the Plugin
To make sure the plugin is working properly:
- Navigate to Settings > Hide Images and enable image hiding by checking the box that says "Check this box to hide images from content."
- Enter your custom message. This message will be displayed when the image has no alt text.
- Visit a post or page that contains images and verify that they are not displayed.
- You may need to purge your server and/or browser cache after checking/unchecking the hide images option for the change to take effect; and/or after changing the custom default text..
- If you want to remove the options when deactivating the plugin, uncomment the following line
// register_deactivation_hook(__FILE__, 'ocultar_imagenes_deactivate');
# Additional Notes
## Color customization:
- If you want to change the border or background color, you can modify the hexadecimal values:
- Border: Change #ccc to another color.
- Background: Change #f9f9f9 to another color.
## Mobile-friendliness
- The code provided is responsive and should adapt well to different screen sizes.
- If you want mobile-specific settings, you can use media queries in CSS.
## Theme and plugin support
- If you don't see the changes after adding the CSS, your theme or a plugin may be overriding the styles.
- In that case, you can add !important to the CSS properties, although it is recommended to use it with caution:
## Other considerations
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
- Accessibility reminder: By styling the alt text message and displaying it prominently, you're helping to raise awareness about the importance of providing proper descriptions in the alt attribute of images. This improves the accessibility of your site for users using screen readers and for those who are unable to view images for various reasons.

------------------------------------

# Ocultar imágenes
Permite al administrador ocultar todas las imágenes del sitio web, reemplazándolas por su texto alternativo o un mensaje predeterminado personalizable. Con este plugin se quiere apoyar el Día Mundial de la vista y promover el uso del parámetro ALT.
# Subir e instalar el plugin
- Utiliza un cliente FTP o el administrador de archivos de tu hosting para subir el archivo zip a la carpeta de plugins de WordPress: /wp-content/plugins/ocultar-imagenes.
- Ve al panel de administración de WordPress.
- Navega a Plugins > Plugins instalados.
- Busca "Ocultar Imágenes" y haz clic en Activar.
# Pasos para añadir el CSS a tu sitio
## Localiza tu hoja de estilos CSS
- Si utilizas un tema hijo, añade el código en el archivo style.css de tu tema hijo.
- Si no utilizas un tema hijo, puedes añadir el CSS en el personalizador de WordPress:
- Ve a Apariencia > Personalizar > CSS Adicional.
- También puedes utilizar un plugin específico para añadir CSS personalizado, como Simple Custom CSS o Custom CSS and JS.
## Añade el código CSS
- Copia el código proporcionado en el archivo texto-alternativo.css y pégalo en el lugar adecuado según el método que elijas.
- Asegúrate de no eliminar ni alterar el código existente a menos que sepas lo que estás haciendo.
## Guarda los cambios
- Si estás usando el personalizador, haz clic en el botón Publicar.
- Si editaste el archivo style.css, guarda el archivo y súbelo al servidor si es necesario.
## Verifica los cambios
- Visita una página o publicación de tu sitio donde se muestre el mensaje de texto alternativo.
- Actualiza la página y verifica que el estilo se aplique correctamente.
- Si no ves los cambios, intenta limpiar la caché de tu navegador y, si utilizas plugins de caché, vacía también la caché del sitio.
# Probar el plugin
Para asegurarte de que el plugin funciona correctamente:
- Navega a Ajustes > Ocultar Imágenes y habilita la ocultación de imágenes marcando la casilla que dice "Marque esta casilla para ocultar las imágenes del contenido."
- Escribe el mensaje personalizado. Este mensaje se mostrará cuando la imagen no tenga texto alternativo.
- Visita una publicación o página que contenga imágenes y verifica que no se muestren.
- Es probable que tengas que purgar la caché del servidor y/o la del navegador tras marcar/desmarcar la opción de ocultación de las imágenes, para que el cambio tenga efecto; y/o después de cambiar el texto predeterminado personalizado.
- Si deseas eliminar las opciones al desactivar el plugin, descomenta la siguiente línea
// register_deactivation_hook(__FILE__, 'ocultar_imagenes_deactivate');
# Notas adicionales
## Personalización de colores:
- Si deseas cambiar el color del borde o del fondo, puedes modificar los valores hexadecimales:
- Borde: Cambia #ccc por otro color.
- Fondo: Cambia #f9f9f9 por otro color.
## Adaptación a dispositivos móviles
- El código proporcionado es responsive y debería adaptarse bien a diferentes tamaños de pantalla.
- Si deseas ajustes específicos para móviles, puedes utilizar media queries en CSS.
## Compatibilidad con temas y plugins
- Si después de añadir el CSS no ves los cambios, puede que tu tema o algún plugin esté sobrescribiendo los estilos.
- En ese caso, puedes añadir !important a las propiedades CSS, aunque se recomienda usarlo con precaución:
## Otras consideraciones
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
- Recordatorio sobre la accesibilidad: Al estilizar el mensaje de texto alternativo y mostrarlo de manera destacada, estás ayudando a crear conciencia sobre la importancia de proporcionar descripciones adecuadas en el atributo alt de las imágenes. Esto mejora la accesibilidad de tu sitio para usuarios que utilizan lectores de pantalla y para aquellos que no pueden visualizar las imágenes por diversas razones.
