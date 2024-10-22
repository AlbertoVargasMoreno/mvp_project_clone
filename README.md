# Sistema Básico de CRUD con PHP y MySQL
Este proyecto es un sistema básico de CRUD (Crear, Leer, Actualizar, Eliminar) desarrollado en PHP con MySQL. Sigue los estándares de [PSR-4] y utiliza Composer para la organización y carga de clases.

## Características
**CRUD Básico:** Permite gestionar registros en la base de datos.

**Composer y PSR-4:** Estructura organizada y carga automática de clases.

**Acceso de Usuarios:** Inicio de sesión seguro.

**Conexión y Consultas Seguras:** Utiliza PDO y consultas preparadas.


## Próximas Mejoras
- **(En Proceso) Validación y Sanitización:** Prevenir datos incorrectos.
- **Mejoras de Seguridad:** Aunque las contraseñas se almacenan de manera segura utilizando funciones de hash, se pueden implementar medidas adicionales de seguridad, como la autenticación en dos pasos.

## Pre-requisitos

Configurar Apache para usar archivos `.htaccess` es fundamental para el correcto [funcionamiento] de este proyecto, [como_configurar_apache].

## Instalación
1. Clonar el repositorio.
2. Ejecutar composer install.
3. Configurar la base de datos.

    3.1 Crear y cargar datos iniciales a la base de datos:
    ```bash
    # Ir a la carpeta que contiene el archivo .sql
    cd config/database/

    # Ingresar a la consola de MySQL
    mysql -u root -p

    # Crear la base de datos y ejecutar el script SQL
    CREATE DATABASE mvp_project;
    USE mvp_project;
    SOURCE database.sql
    ```
    3.2 Crear un archivo `database.ini` en la carpeta `config/database/` con la siguiente estructura:
    ```ini
    hostname='localhost';
    database='mvp_project';
    username='root';
    password='your_password';
    ```
4. Acceder al proyecto desde el navegador en la dirección:
[localhost/mvp_project/public](http://localhost/mvp_project/public)

> ¡Este sistema proporciona una base para desarrollar aplicaciones más completas!

## Reconocimientos

- https://github.com/davidhartsough/you-dont-need-bootstrap/blob/master/normalize.slim.css
- https://github.com/necolas/normalize.css/blob/master/normalize.css


[PSR-4]:https://www.php-fig.org/psr/psr-4/
[funcionamiento]:https://stackoverflow.com/questions/65417541/apache-doesnt-seem-to-be-detecting-my-htaccess-file
[como_configurar_apache]:https://bootcampdeveloper.com/htaccess-configuracion-redirecciones-https-dominio/
