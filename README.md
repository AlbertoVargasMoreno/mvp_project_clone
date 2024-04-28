# Sistema Básico de CRUD con PHP y MySQL
Este proyecto es un sistema básico de CRUD (Crear, Leer, Actualizar, Eliminar) desarrollado en PHP con MySQL. Sigue los estándares de PSR-4 y utiliza Composer para la organización y carga de clases.

## Características
**CRUD Básico:** Permite gestionar registros en la base de datos.

**Composer y PSR-4:** Estructura organizada y carga automática de clases.

**Acceso de Usuarios:** Inicio de sesión seguro.

**Conexión y Consultas Seguras:** Utiliza PDO y consultas preparadas.


## Próximas Mejoras
- **Estilo CSS:** Mejorar la apariencia visual.
- **Validación y Sanitización:** Prevenir datos incorrectos.
- **Mejoras de Seguridad:** Aunque las contraseñas se almacenan de manera segura utilizando funciones de hash, se pueden implementar medidas adicionales de seguridad, como la autenticación en dos pasos.

## Instalación
1. Clonar el repositorio.
2. Ejecutar composer install.
3. Configurar la base de datos en config.php.
4. Acceder al proyecto desde el navegador.

> ¡Este sistema proporciona una base para desarrollar aplicaciones más completas!

## Agregar PHPUnit

Para integrar PHPUnit en el proyecto, sigue estos pasos:

1. **Instalación de PHPUnit:**
   Ejecuta el siguiente comando en la terminal para instalar PHPUnit como una dependencia de desarrollo:

   ```shell
   $ composer require --dev phpunit/phpunit
   ```

2. **Ejecución de Pruebas:**
   Para ejecutar todas las pruebas, utiliza el siguiente comando:

   ```shell
   $ ./vendor/bin/phpunit tests
   ```

3. **Generación de Informe de Pruebas:**
   Si deseas generar un informe detallado de las pruebas realizadas utiliza el siguiente comando:

   ```shell
   $ ./vendor/bin/phpunit --testdox tests/UserTest.php
   ```

## Referencias

- Tutorial de Freecodecamp. [1]
- Documentación oficial de PHPUnit. [2]

[1]: https://www.freecodecamp.org/news/test-php-code-with-phpunit/
[2]: https://phpunit.de/getting-started/phpunit-10.html
