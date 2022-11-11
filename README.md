## Documentacion Español.
## Resumen 📚
El módulo permitirá seleccionar objetos (Tablas, vistas, procedimientosalmacenados) dentro de una base de datos y obtener sus propiedades (columnas, parámetros, etc.).En función de ello y de los permisos que tenga generar los métodos respectivos para el CRUD enformato JSON para la API REST.El modulo debe administrar además las APIs ya creadas en algún tipo de repositorio permitiendoacceder a las APIS disponibles, sus parámetros y sus salidas.

## Objetivos
* **Construir una herramienta que permita de acuerdo a la definición de una tablagenerar las APIs básicas de mantenimiento de los registros (CRUD).** 


 * Leer la base de datos y seleccionar tablas, procedimientos almacenados ovistas sobre los cuales se desea construir la API REST.
* Obtener la metadata o parámetros del objeto de la base de datos de formadinámica y construir los métodos que soporte de acuerdo a sus permisos para realizar un el CRUDcorrespondiente **(GET/POST/PUT/DELETE)**.
* Aplicar conceptos de seguridad en APIs usando Token o API-Key para laautorización de llamadas o procedimientos críticos e identificación del cliente que ejecuta la API.
* Un módulo que permita la gestión de API REST en función de los objetosencontrados en la base de datos.
 


## Tecnologías involucradas 👩‍💻

```
Git
POSTAMN
Laravel
PHP7
SQLServer 2008R2
jwt-auth
```

## Para iniciar el proyecto.
```py
    composer install
    php artisan serve
    php artisan migrate # En caso que no se posea una tabla de usuario en la estructura de su base de datos 
                        # usarpara generarla en su modelo.
```


## Autores ✒️

_Developer_

* NOMBRES ALMUNOS


## Contribuciones.
¡Gracias por considerar contribuir al marco de Laravel! La guía de contribución se puede encontrar en la [documentación de Laravel] (https://laravel.com/docs/contributions).

## Codigo de conducta.
Para garantizar que la comunidad de Laravel les dé la bienvenida a todos, revise y respete el [Código de conducta] (https://laravel.com/docs/contributions#code-of-conduct).
También nos gustaría agregar nuestro propio código de conducta para este presente proyecto https://pillan.inf.uct.cl/~fespinoza/PDF/Codigo%20Etico.pdf.

## Vulnerabilidades de seguridad.

Si descubre una vulnerabilidad de seguridad dentro de Laravel, envíe un correo electrónico a Taylor Otwell a través de [taylor@laravel.com](mailto:taylor@laravel.com). Todas las vulnerabilidades de seguridad se abordarán de inmediato.

## Licencia 📓

El marco de Laravel es un software de código abierto con licencia de [licencia MIT] (https://opensource.org/licenses/MIT).