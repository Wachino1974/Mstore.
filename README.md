## Punto de venta de Instrumentos Musicales (Mstore)
La Tienda de Instrumentos Musicales es un sistema de punto de venta diseñado para gestionar el inventario y la venta de instrumentos musicales. Permite a los administradores registrar, actualizar y eliminar productos de manera eficiente, así como visualizar información detallada de cada instrumento disponible. Con una interfaz intuitiva y un sistema de gestión de base de datos, este punto de venta facilita la administración de una tienda de música de manera efectiva.

<a id='contenido'></a>

## Tabla de contenidos:
---
<ul>
<li><a href='#introduccion'>Introducción</a></li>
<li><a href='#instalcion'>Intalación</a></li>
<li><a href='#arqui'>Arquitectura MVC</a></li>
</ul>

<a id='introduccion'></a>

## Introducción

En el desarrollo de este CRUD llamado Mstore, se hizo uso de diversas herramientas tecnológicas que permitieron la implementación de un sistema robusto y funcional. Además de una base de datos estructurada, la cual cumple una función vital dentro del sistema, se emplearon tecnologías de desarrollo web para garantizar una experiencia de usuario fluida y eficiente.

Tecnologías utilizadas:

PHP: Lenguaje principal para la lógica del backend y la interacción con la base de datos.
MySQL: Sistema de gestión de bases de datos relacional utilizado para almacenar y gestionar la información de los instrumentos.
Bootstrap: Framework de CSS que facilita el diseño responsivo y atractivo de la interfaz de usuario.
JavaScript: Utilizado para mejorar la interactividad y la experiencia del usuario dentro del sistema.
jQuery: Biblioteca de JavaScript empleada para simplificar la manipulación del DOM y mejorar la funcionalidad del CRUD.
FontAwesome: Conjunto de iconos utilizados para mejorar la estética y usabilidad de la interfaz.

Gracias a la integración de estas herramientas, Mstore permite una gestión eficiente del inventario de instrumentos musicales, brindando opciones para agregar, actualizar y eliminar productos de manera sencilla, al mismo tiempo que facilita la visualización del stock disponible.

---
<a href='#contenido'>ir al contenido</a>

<a id='instalacion'></a>

## Instalación

Instalción de Xammp...💻🖱️
XAMPP es un paquete de software libre, que consiste principalmente en el sistema de gestión de bases de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script PHP y Perl. El nombre es en realidad un acrónimo: X (para cualquiera de los diferentes sistemas operativos), Apache, MariaDB/MySQL, PHP, Perl. A partir de la versión 5.6.15, XAMPP cambió la base de datos MySQL por MariaDB, un fork de MySQL con licencia GPL.

El programa se distribuye con la licencia GNU y actúa como un servidor web libre, fácil de usar y capaz de interpretar páginas dinámicas. A esta fecha, XAMPP está disponible para Microsoft Windows, GNU/Linux, Solaris y Mac OS X.

 Sigue estos pasos para instalar XAMPP:

   -Descarga XAMPP desde la página oficial: https://www.apachefriends.org/es/index.html
   -Ejecuta el instalador y selecciona los componentes esenciales:
   -Apache (Servidor Web)
   -MySQL (Base de Datos)
   -PHP (Lenguaje de programación)
   -Finaliza la instalación y abre el "Panel de Control de XAMPP".
   -Inicia los servicios de Apache y MySQL.


Configuración del CRUD de la Tienda de Instrumentos Musicales

  Creación de la Base de Datos

Accede a phpMyAdmin desde http://localhost/phpmyadmin/.
Crea una nueva base de datos llamada tienda_instrumentos.
Importa el archivo database.sql (proporcionado con el proyecto) en la base de datos.
 
 Instalación del Proyecto

Descarga o clona el repositorio en C:\xampp\htdocs\mstore.
Asegúrate de que el servidor de XAMPP esté ejecutándose.
Accede al proyecto desde http://localhost/mstore/public.


      
<a href='#contenido'>ir al contenido</a>

<a id='#arqui'></a>

## Arquitectura MVC 🪛🪛💻


## Descripción y contexto
---
Esto es un archivo README. Debe contener la documentación de soporte uso de la herramienta digital. Las siguientes secciones son las secciones recomendadas que debes poner incluir en cualquier herramienta digital. Puedes descargar este archivo para que te sirva como plantilla.

Asegúrate de empezar este archivo con una breve descripción sobre las funcionalidades y contexto de la herramienta digital. Sé conciso y al grano.

## Guía de usuario
---
Explica los pasos básicos sobre cómo usar la herramienta digital. Es una buena sección para mostrar capturas de pantalla o gifs que ayuden a entender la herramienta digital.
 	
## Guía de instalación
---
Paso a paso de cómo instalar la herramienta digital. En esta sección es recomendable explicar la arquitectura de carpetas y módulos que componen el sistema.

Según el tipo de herramienta digital, el nivel de complejidad puede variar. En algunas ocasiones puede ser necesario instalar componentes que tienen dependencia con la herramienta digital. Si este es el caso, añade también la siguiente sección.

La guía de instalación debe contener de manera específica:
- Los requisitos del sistema operativo para la compilación (versiones específicas de librerías, software de gestión de paquetes y dependencias, SDKs y compiladores, etc.).
- Las dependencias propias del proyecto, tanto externas como internas (orden de compilación de sub-módulos, configuración de ubicación de librerías dinámicas, etc.).
- Pasos específicos para la compilación del código fuente y ejecución de tests unitarios en caso de que el proyecto disponga de ellos.

### Dependencias
Descripción de los recursos externos que generan una dependencia para la reutilización de la herramienta digital (librerías, frameworks, acceso a bases de datos y licencias de cada recurso). Es una buena práctica describir las últimas versiones en las que ha sido probada la herramienta digital. 

    Puedes usar este estilo de letra diferenciar los comandos de instalación.

## Cómo contribuir
---
Esta sección explica a desarrolladores cuáles son las maneras habituales de enviar una solicitud de adhesión de nuevo código (“pull requests”), cómo declarar fallos en la herramienta y qué guías de estilo se deben usar al escribir más líneas de código. También puedes hacer un listado de puntos que se pueden mejorar de tu código para crear ideas de mejora.

## Código de conducta 
---
El código de conducta establece las normas sociales, reglas y responsabilidades que los individuos y organizaciones deben seguir al interactuar de alguna manera con la herramienta digital o su comunidad. Es una buena práctica para crear un ambiente de respeto e inclusión en las contribuciones al proyecto. 

La plataforma Github premia y ayuda a los repositorios dispongan de este archivo. Al crear CODE_OF_CONDUCT.md puedes empezar desde una plantilla sugerida por ellos. Puedes leer más sobre cómo crear un archivo de Código de Conducta (aquí)[https://help.github.com/articles/adding-a-code-of-conduct-to-your-project/]

## Autor/es
---
Nombra a el/los autor/es original/es. Consulta con ellos antes de publicar un email o un nombre personal. Una manera muy común es dirigirlos a sus cuentas de redes sociales.

## Información adicional
---
Esta es la sección que permite agregar más información de contexto al proyecto como alguna web de relevancia, proyectos similares o que hayan usado la misma tecnología.

## Licencia 
---

La licencia especifica los permisos y las condiciones de uso que el desarrollador otorga a otros desarrolladores que usen y/o modifiquen la herramienta digital.

Incluye en esta sección una nota con el tipo de licencia otorgado a esta herramienta digital. El texto de la licencia debe estar incluído en un archivo *LICENSE.md* o *LICENSE.txt* en la raíz del repositorio.

Si desconoces qué tipos de licencias existen y cuál es la mejor para cada caso, te recomendamos visitar la página https://choosealicense.com/.

Si la herramienta que estás publicando con la iniciativa Código para el Desarrollo ha sido financiada por el BID, te invitamos a revisar la [licencia oficial del banco para publicar software](https://github.com/EL-BID/Plantilla-de-repositorio/blob/master/LICENSE.md)

## Limitación de responsabilidades
Disclaimer: Esta sección es solo para herramientas financiadas por el BID.

El BID no será responsable, bajo circunstancia alguna, de daño ni indemnización, moral o patrimonial; directo o indirecto; accesorio o especial; o por vía de consecuencia, previsto o imprevisto, que pudiese surgir:

i. Bajo cualquier teoría de responsabilidad, ya sea por contrato, infracción de derechos de propiedad intelectual, negligencia o bajo cualquier otra teoría; y/o

ii. A raíz del uso de la Herramienta Digital, incluyendo, pero sin limitación de potenciales defectos en la Herramienta Digital, o la pérdida o inexactitud de los datos de cualquier tipo. Lo anterior incluye los gastos o daños asociados a fallas de comunicación y/o fallas de funcionamiento de computadoras, vinculados con la utilización de la Herramienta Digital.
