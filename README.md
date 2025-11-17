# Tech by Brised

**Enlace al sitio web:** http://techbybrised.wuaze.com/
## Descripción del proyecto
Tech by Brised es un sitio web personal que muestra información sobre mí, incluyendo una biografía corta, foto personal y hobbies. La página principal incluye un **menú de navegación** con las secciones: **Inicio, Sobre mí, Hobbies y Contacto**.

El sitio utiliza **HTML, CSS, JavaScript y PHP**, y el formulario de contacto permite a los visitantes enviarme mensajes, los cuales se almacenan en una base de datos usando **PDO** en un hosting gratuito (InfinityFree).

## Estructura del proyecto
/config
db.php # Conexión a la base de datos con PDO
/imagenes
imagen1.jpeg # Imagen usada en la página principal
contacto.php # Formulario de contacto y procesamiento en PHP
estilos.css # Estilos del sitio
index.html # Página principal con menú de navegación
script.js # Funcionalidad adicional con JavaScript

## Funcionalidades
- Menú de navegación: Inicio, Sobre mí, Hobbies, Contacto.
- Formulario de contacto que:
  - Captura nombre, correo y mensaje.
  - Guarda los datos en la base de datos `if0_40428192_brised_sitioweb` en la tabla `usuarios`.
  - Muestra un mensaje de confirmación al usuario después de enviar el formulario.
- Diseño responsive y estético con CSS y JavaScript.

## Instrucciones de uso
1. Acceder al sitio web mediante el enlace: http://techbybrised.wuaze.com/ 
2. Navegar por las secciones usando el menú de navegación: Inicio, Sobre mí, Hobbies y Contacto.  
3. Completar el formulario de contacto con los campos requeridos y enviar el mensaje.  
4. Los mensajes enviados se almacenarán en la base de datos y se mostrará un mensaje de confirmación.
