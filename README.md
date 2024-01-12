# CapitalTrack

Bienvenido a CapitalTrack, la aplicación líder diseñada para simplificar y potenciar la gestión de tus inversiones en acciones. Con CapitalTrack, tendrás el control total sobre tu cartera de inversiones, permitiéndote tomar decisiones informadas y maximizar tus rendimientos.

![](http://imgfz.com/i/WiGRoYb.png)

## Descripción y contexto
### CapitalTrack: Empodera tus inversiones, simplifica tu éxito.
CapitalTrack es la aplicación esencial para gestionar tus inversiones en acciones de manera eficiente y organizada. Con una interfaz amigable y funcionalidades poderosas, CapitalTrack simplifica la gestión de tus acciones, desde el registro inicial hasta el análisis continuo.

En un mundo financiero cada vez más dinámico, CapitalTrack se destaca al ofrecer una solución integral y fácil de usar para inversores de todos los niveles. Ya sea que estés empezando tu viaje en el mundo de las inversiones o seas un experto en finanzas, CapitalTrack se adapta a tus necesidades, proporcionando herramientas esenciales para tomar decisiones informadas.


## Funcionalidad
### Características Destacadas

 *- Registro de Acciones mediante Formulario: *
CapitalTrack te permite ingresar fácilmente las acciones que has adquirido a través de un formulario intuitivo. Completa los detalles, como el nombre de la acción, fecha de compra, cantidad y precio de compra de manera rápida y precisa.

*- Tabla Resumen de Acciones: *
Visualiza todas tus inversiones en una tabla resumen clara y detallada. La tabla proporciona una visión general de tus acciones, incluyendo el nombre, cantidad, precio actual y variación de valor. Mantente informado sobre el rendimiento de tu cartera en un solo vistazo.

## Instalación
1. Descarga e instala XAMPP en tu computadora.
2. Clona o descarga el repositorio del proyecto.
3. Extrae todos los archivos de la carpeta y trasládalos directamente a la carpeta 'htdocs' en tu directorio XAMPP. Evita crear carpetas adicionales; simplemente cópialos directamente en 'htdocs'.
4. Inicia Apache y MySQL utilizando el panel de control de XAMPP.
5. Abre tu navegador web y visita 'localhost/phpmyadmin'.
6. En la página de phpMyAdmin, genera una nueva base de datos desde el panel izquierdo y asigna el nombre 'proyecto-1b-cesw'.
7. Importa el archivo 'proyecto-1b-cesw.sql' localizado en la carpeta 'baseDeDatos' a la base de datos recién creada y selecciona OK.
8. En una nueva pestaña del navegador, escribe 'localhost/proyecto-1b-cesw/codigo/' en la URL.
9. ¡Ya está! Has completado todos los pasos necesarios.

## Estándares
### Colores interfaz

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Color 1 | ![#0d6efd](https://via.placeholder.com/10/0d6efd?text=+) #0d6efd |
| Color 2 | ![#54a3ff](https://via.placeholder.com/10/54a3ff?text=+) #54a3ff |
| Color 3 | ![#ff5879](https://via.placeholder.com/10/ff5879?text=+) #ff5879 |
| Color 4 | ![#ffffff](https://via.placeholder.com/10/ffffff?text=+) #ffffff |

### Codificación 
#### PHP
*- Indentación:*
Se utiliza una indentación consistente (espacios o tabuladores) para mejorar la legibilidad del código.

*-Nombres Descriptivos:*
Se  asigna nombres descriptivos a tus variables, funciones y clases. Evita nombres ambiguos.

*- Separación de Responsabilidades:*
Se dividió el código en funciones o clases que realicen tareas específicas. Esto facilita la reutilización y el mantenimiento.

*- Evación de Magia Dura:*
Se evita valores "mágicos" en el código (números o cadenas directamente en el código). Usa constantes o variables para hacer el código más comprensible y fácil de mantener.

*- Manejo de Errores:*
Se implementa un manejo adecuado de errores y excepciones para mejorar la robustez del código.

#### HTML
*- Indentación:*
Al igual que en PHP, se utiliza una indentación consistente en HTML.

*- Uso de Atributos:*
Se utiliza atributos de forma sensata y sigue las mejores prácticas para la accesibilidad. Por ejemplo, asegúrate de proporcionar texto alternativo para las imágenes con el atributo alt.

*- Separación de Responsabilidades:*
Separa la estructura del contenido y la presentación. Utiliza clases y ID de manera significativa.

#### CSS
*- Indentación:*
Al igual que en PHP y HTML, se utiliza una indentación consistente en CSS.

*- Organización:*
Se organiza las reglas CSS de manera lógica. Puedes agrupar propiedades relacionadas y seguir un orden específico.

*- Evitar Estilos en Línea:*
Se evita estilos en línea siempre que sea posible.

*- Uso de Selectores:*
Se selecciona elementos de manera eficiente y evita selectores demasiado específicos, ya que pueden afectar el rendimiento.

## Metodología Ágil: XP (eXtreme Programming)

La aplicación se desarrolló siguiendo la metodología ágil XP (eXtreme Programming). XP se centra en la entrega continua de software de alta calidad, promoviendo la colaboración y la adaptabilidad a los cambios en los requisitos del proyecto.

### TDD (Test-Driven Development):

TDD, o Desarrollo Guiado por Pruebas, es una metodología de desarrollo de software que enfatiza la creación de pruebas automatizadas antes de escribir el código de producción. El proceso de TDD generalmente sigue estos pasos:

* -Escribir una Prueba:* Antes de comenzar a implementar una nueva funcionalidad o corregir un error, se escribe una prueba automatizada que defina el comportamiento esperado. Esta prueba inicial generalmente fallará porque la funcionalidad aún no está implementada.

* -Escribir el Código de Producción:* Se implementa la funcionalidad necesaria para que la prueba pase. En este punto, el objetivo es escribir la cantidad mínima de código necesaria para que la prueba tenga éxito.

* -Ejecutar las Pruebas:* Se ejecutan todas las pruebas automatizadas para garantizar que la nueva funcionalidad no haya introducido errores y que las funcionalidades existentes sigan funcionando correctamente.

* -Refactorizar el Código:* Si es necesario, se realiza la refactorización del código para mejorar su estructura, legibilidad o rendimiento, manteniendo las pruebas verdes.

Este ciclo se repite de forma continua a medida que se agregan nuevas funcionalidades o se realizan modificaciones en el código existente. La idea central es que las pruebas actúan como una especificación ejecutable del comportamiento del software y proporcionan una forma de validar que los cambios realizados no afectan negativamente la funcionalidad existente.

TDD se considera beneficioso para mejorar la calidad del código, facilitar el mantenimiento, y proporcionar una mayor confianza en la robustez del software. Además, ayuda a definir claramente los requisitos y a mantener un enfoque en las funcionalidades esenciales del sistema.

## Patrón Arquitectónico
La arquitectura de la aplicación sigue el patrón MVC (Modelo-Vista-Controlador) para organizar y separar las responsabilidades. Este patrón facilita el mantenimiento, escalabilidad y modularidad del código al dividir la aplicación en tres componentes principales:

- **Modelo (modelo/):** Representa la lógica de la aplicación y la manipulación de datos.
- **Vista (vista/):** Es la interfaz de usuario que muestra la información al usuario y recibe las interacciones del mismo.
- **Controlador (controlador/):** Actúa como intermediario entre el modelo y la vista, gestionando la lógica de la aplicación y coordinando las interacciones.

La implementación del patrón MVC proporciona una estructura organizada y favorece las buenas prácticas de desarrollo de software.


## Patrones de Diseño
### Patrón de Diseño: Singleton

El patrón Singleton se utiliza en la aplicación para garantizar una única instancia de ciertas clases clave. Esto se aplica, por ejemplo, en la gestión de la conexión a la base de datos o en la instancia del DAO.

### Patrón de Diseño: DAO (Data Access Object)

El patrón DAO se ha implementado para abstraer y encapsular el acceso a la base de datos. La clase `AccionDAO` maneja todas las operaciones relacionadas con las acciones, proporcionando una interfaz unificada para interactuar con la base de datos.


## Acerca de los desarrolladores
### GRUPO 5

Somos un equipo de estudiantes con el propósito de desarrollar software de alta calidad, aprovechando la diversidad y creatividad de nuestros integrantes. Buscamos ofrecer una experiencia de aprendizaje en la construcción y evolución de software, contribuyendo al desarrollo de soluciones tecnológicas beneficiosas para el público.

## Autores

- [@Christian Agila](https://github.com/drkwv34)
- [@Daniel Mera](https://github.com/DanielMeraV)
- [@George Quishpe](https://github.com/mquishpe)
