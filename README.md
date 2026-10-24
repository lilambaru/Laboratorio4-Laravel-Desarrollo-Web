# Laboratorio 4 - Instalación, configuración y desarrollo web con Laravel

### Desarrollo Web

Estudiante: Ambar Greco  
Profesora: Irina Fong

---

## Introducción

En este laboratorio se trabajó con Laravel, un framework de PHP que facilita el desarrollo de aplicaciones web mediante una estructura organizada y herramientas que permiten gestionar rutas, controladores, vistas, bases de datos y sistemas de autenticación.

El propósito de esta práctica fue conocer el proceso necesario para preparar un entorno de desarrollo con Laravel, desde la instalación de las herramientas requeridas hasta la creación de un proyecto funcional.

Durante el desarrollo se trabajó con Visual Studio Code, WAMP, Composer, PHP, SQLite, Bootstrap y Laravel UI. Posteriormente, se implementó un sistema de autenticación que permite registrar usuarios, iniciar sesión, acceder a una página protegida y cerrar sesión.

Finalmente, se realizaron pruebas para comprobar el funcionamiento del sistema y verificar las validaciones de los formularios.

## Objetivos

- Conocer el proceso de instalación y configuración de Laravel.
- Preparar un entorno local de desarrollo utilizando WAMP y PHP.
- Utilizar Composer para instalar y administrar las dependencias del proyecto.
- Crear y ejecutar una aplicación Laravel desde Visual Studio Code.
- Configurar una base de datos para almacenar la información de los usuarios.
- Implementar un sistema de registro e inicio de sesión.
- Comprobar el funcionamiento de las validaciones y el cierre de sesión.

---

## 1. Herramientas utilizadas

Para realizar este laboratorio se utilizaron diferentes tecnologías y herramientas de desarrollo web.

- WAMP: Entorno de desarrollo local que incluye herramientas como Apache, PHP y MySQL.
- PHP: Lenguaje de programación utilizado por Laravel para ejecutar la lógica de la aplicación.
- Composer: Administrador de dependencias utilizado para instalar Laravel y sus paquetes.
- Laravel: Framework utilizado para desarrollar la aplicación web.
- Visual Studio Code: Editor utilizado para trabajar con los archivos y el código del proyecto.
- Node.js y NPM: Herramientas utilizadas para instalar y compilar los recursos frontend.
- Bootstrap: Framework utilizado para diseñar los formularios y la interfaz visual.
- SQLite: Base de datos utilizada para almacenar la información del sistema.
- Git y GitHub: Herramientas utilizadas para controlar las versiones y publicar el proyecto.

## 2. Preparación del entorno de desarrollo

Antes de comenzar con Laravel fue necesario disponer de las herramientas que permiten ejecutar aplicaciones PHP en un entorno local.

### 2.1. Instalación de WAMP

WAMP permite ejecutar aplicaciones web desde una computadora con Windows.

Para preparar el entorno se debe descargar WampServer desde su página oficial e instalarlo siguiendo las instrucciones del instalador.

Página oficial: https://wampserver.aviatechno.net/

Una vez instalado, se puede utilizar la carpeta `www` para almacenar los proyectos web.

En este laboratorio se trabajó con la siguiente ubicación:

```text
C:\wamp64\www\laravel
```

Esta carpeta se utilizó para organizar el proyecto desarrollado con Laravel.

### 2.2. Instalación de Composer

Composer es una herramienta que permite instalar Laravel y administrar las bibliotecas necesarias para ejecutar aplicaciones PHP.

Se puede descargar desde:

https://getcomposer.org/

Después de instalar Composer, se abre una terminal y se comprueba su funcionamiento utilizando el siguiente comando:

```bash
composer --version
```

Si Composer está correctamente instalado, la terminal muestra información sobre la versión disponible.

### 2.3. Comprobación de PHP

Laravel necesita PHP para ejecutar sus aplicaciones.

Para verificar que PHP se encuentra disponible, se utiliza el comando:

```bash
php -v
```

Este comando muestra la versión de PHP instalada en el equipo.

También es importante comprobar que la versión sea compatible con Laravel y que estén habilitadas las extensiones requeridas.

### 2.4. Instalación de Visual Studio Code

Visual Studio Code se utilizó para crear, visualizar y modificar los archivos que forman parte del proyecto Laravel.

Se puede descargar desde:

https://code.visualstudio.com/

Este editor permite trabajar con PHP, HTML, CSS, JavaScript y otros archivos necesarios para el desarrollo de aplicaciones web.

---

## 3. Creación del proyecto Laravel

Una vez preparado el entorno de desarrollo, se puede crear el proyecto utilizando Composer.

Primero se abre una terminal y se accede a la carpeta donde se almacenará la aplicación.

```powershell
cd C:\wamp64\www\laravel
```

Posteriormente, se utiliza el comando de Composer para crear un nuevo proyecto Laravel:

```bash
composer create-project laravel/laravel mi-proyecto-laravel
```

Este comando descarga Laravel y prepara la estructura inicial de la aplicación junto con sus dependencias.

Una vez finalizada la instalación, se accede a la carpeta del proyecto:

```bash
cd mi-proyecto-laravel
```

La carpeta contiene diferentes directorios necesarios para el funcionamiento de Laravel, como `app`, `bootstrap`, `config`, `database`, `public`, `resources` y `routes`.

## 4. Apertura del proyecto en Visual Studio Code

Después de crear el proyecto, se abre Visual Studio Code y se selecciona la carpeta `mi-proyecto-laravel`.

Desde el explorador de archivos se puede visualizar la estructura de Laravel.

Entre las carpetas principales se encuentran:

- `app`: Contiene los modelos, controladores y otros componentes de la aplicación.
- `bootstrap`: Contiene archivos necesarios para iniciar Laravel.
- `config`: Almacena los archivos de configuración.
- `database`: Contiene las migraciones y otros archivos relacionados con la base de datos.
- `public`: Contiene el punto de entrada público de la aplicación y los recursos publicados.
- `resources`: Contiene vistas, estilos y archivos JavaScript.
- `routes`: Contiene las rutas utilizadas por la aplicación.

Esta organización permite separar los diferentes componentes y facilita el mantenimiento del proyecto.

## 5. Configuración del archivo .env

Laravel utiliza un archivo llamado `.env` para almacenar las variables de configuración del entorno.

Este archivo permite establecer datos como el nombre de la aplicación, la conexión con la base de datos y otras configuraciones.

Si el archivo no existe, se puede crear a partir de `.env.example`:

```powershell
Copy-Item .env.example .env
```

Posteriormente, se genera la clave de la aplicación:

```bash
php artisan key:generate
```

Esta clave es utilizada por Laravel para diferentes mecanismos de seguridad y cifrado.

Por seguridad, el archivo `.env` no debe publicarse en GitHub, ya que puede contener información privada.

## 6. Configuración de la base de datos

Para el sistema de autenticación se utilizó SQLite, una base de datos que permite almacenar información mediante un archivo local.

Dentro del archivo `.env` se configura el controlador correspondiente:

```env
DB_CONNECTION=sqlite
```

El archivo de la base de datos se encuentra normalmente en:

```text
database/database.sqlite
```

Si el archivo todavía no existe, debe crearse antes de ejecutar las migraciones.

Posteriormente, se utiliza el siguiente comando:

```bash
php artisan migrate
```

Este comando permite ejecutar las migraciones y crear las tablas necesarias para el funcionamiento del sistema.

Entre ellas se encuentra la tabla de usuarios, utilizada para almacenar la información de las cuentas registradas.

## 7. Ejecución inicial de Laravel

Para comprobar que el proyecto funciona correctamente, se abre una terminal dentro de su carpeta principal.

Se ejecuta el siguiente comando:

```bash
php artisan serve
```

Laravel inicia un servidor local y muestra una dirección que normalmente es:

```text
http://127.0.0.1:8000
```

Al abrir esa dirección desde un navegador, se puede visualizar la aplicación.

Este procedimiento permite comprobar que Laravel está instalado y que el servidor puede ejecutar el proyecto correctamente.

---

## 8. Instalación del sistema de autenticación

Después de comprobar el funcionamiento inicial de Laravel, se procede a configurar el sistema de autenticación.

Para ello se utiliza Laravel UI, un paquete que permite generar formularios de autenticación con Bootstrap.

Primero se instala el paquete mediante Composer:

```bash
composer require laravel/ui
```

Posteriormente, se ejecuta:

```bash
php artisan ui bootstrap --auth
```

Este comando genera los archivos necesarios para utilizar los formularios de autenticación, incluyendo las vistas de inicio de sesión y registro.

También crea componentes relacionados con la administración de sesiones y recuperación de contraseñas.

## 9. Instalación y compilación de recursos frontend

Una vez configurado Laravel UI, es necesario instalar las dependencias de JavaScript y los estilos utilizados por la aplicación.

Para ello se ejecuta:

```bash
npm install
```

Posteriormente, se compilan los recursos utilizando:

```bash
npm run build
```

Laravel utiliza Vite para procesar y compilar los archivos de estilos y JavaScript.

Este procedimiento permite que Bootstrap y los demás recursos visuales se carguen correctamente en el navegador.

## 10. Configuración de las rutas

Las rutas permiten determinar qué contenido se mostrará cuando un usuario acceda a una dirección específica.

En este proyecto se utilizó el archivo:

`routes/web.php`

El archivo contiene la configuración principal de las rutas web:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
```

La instrucción `Auth::routes()` registra las rutas relacionadas con el sistema de autenticación.

La ruta `/home` dirige al usuario hacia la página principal después de iniciar sesión.

## 11. Implementación del registro de usuarios

El formulario de registro permite crear nuevas cuentas dentro de la aplicación.

Se encuentra en el archivo:

`resources/views/auth/register.blade.php`

El formulario solicita la siguiente información:

- Nombre del usuario.
- Correo electrónico.
- Contraseña.
- Confirmación de contraseña.

Cuando el usuario completa el formulario, Laravel procesa los datos y aplica las validaciones correspondientes.

Si la información es válida, se puede crear una cuenta y almacenar los datos necesarios en la base de datos.

### Resultado del formulario de registro

![Registro de usuarios](https://raw.githubusercontent.com/lilambaru/laboratorio-2-login-laravel/main/capturas/captura2.png)

## 12. Implementación del inicio de sesión

El formulario de inicio de sesión permite que los usuarios registrados accedan a la aplicación.

Se encuentra en el archivo:

`resources/views/auth/login.blade.php`

Para iniciar sesión, el usuario debe introducir su correo electrónico y contraseña.

Laravel comprueba las credenciales y, cuando son correctas, permite el acceso a las páginas protegidas.

El formulario también incluye una opción para recordar la sesión y un enlace para recuperar la contraseña.

### Resultado del inicio de sesión

![Inicio de sesión](https://raw.githubusercontent.com/lilambaru/laboratorio-2-login-laravel/main/capturas/captura1.png)

## 13. Acceso al Dashboard

Cuando un usuario inicia sesión correctamente, es dirigido hacia la página principal de la aplicación.

Esta vista se encuentra en el archivo:

`resources/views/home.blade.php`

En el Dashboard aparece un mensaje indicando que el usuario ha iniciado sesión.

Esto permite comprobar que la autenticación funciona correctamente.

### Resultado del Dashboard

![Dashboard](https://raw.githubusercontent.com/lilambaru/laboratorio-2-login-laravel/main/capturas/captura3.png)

## 14. Implementación del cierre de sesión

El sistema también permite que los usuarios finalicen su sesión.

Para ello se utiliza un menú desplegable ubicado en la parte superior de la aplicación.

El usuario puede seleccionar la opción de cerrar sesión para finalizar su autenticación.

Esta funcionalidad ayuda a evitar que una sesión permanezca abierta cuando el usuario ya no necesita utilizar la aplicación.

### Resultado del cierre de sesión

![Cerrar sesión](https://raw.githubusercontent.com/lilambaru/laboratorio-2-login-laravel/main/capturas/captura4.png)

## 15. Validaciones del sistema

Durante el laboratorio se realizaron pruebas para comprobar el funcionamiento de las validaciones.

### 15.1. Contraseñas que no coinciden

Se introdujeron contraseñas diferentes en los campos de contraseña y confirmación.

Laravel detectó la diferencia y mostró un mensaje indicando que la confirmación no coincidía.

Esta validación evita que se complete el registro cuando las contraseñas son diferentes.

![Validación de contraseña](https://raw.githubusercontent.com/lilambaru/laboratorio-2-login-laravel/main/capturas/captura5.png)

### 15.2. Credenciales incorrectas

También se realizó una prueba intentando iniciar sesión con un correo electrónico y una contraseña que no correspondían a un usuario válido.

Laravel rechazó el intento y mostró un mensaje indicando que las credenciales no coincidían con los registros almacenados.

![Error de inicio de sesión](https://raw.githubusercontent.com/lilambaru/laboratorio-2-login-laravel/main/capturas/captura6.png)

Estas pruebas permitieron verificar que el sistema responde correctamente ante diferentes errores de autenticación.

---

## 16. Archivos principales del sistema

Durante el desarrollo se trabajó con diferentes archivos que cumplen funciones específicas.

- `app/Http/Controllers/Auth/LoginController.php`: Controlador relacionado con el inicio de sesión.
- `app/Http/Controllers/Auth/RegisterController.php`: Controlador encargado del registro de usuarios.
- `app/Http/Controllers/Auth/ForgotPasswordController.php`: Controlador relacionado con la recuperación de contraseñas.
- `app/Http/Controllers/HomeController.php`: Controlador de la página principal del usuario.
- `app/Models/User.php`: Modelo que representa a los usuarios.
- `resources/views/auth/login.blade.php`: Vista del inicio de sesión.
- `resources/views/auth/register.blade.php`: Vista del formulario de registro.
- `resources/views/home.blade.php`: Vista del Dashboard.
- `routes/web.php`: Archivo que contiene las rutas web.
- `database/migrations/`: Directorio que contiene las migraciones de la base de datos.

## 17. Resultados obtenidos

Al finalizar el laboratorio se logró preparar un entorno local de desarrollo con Laravel y ejecutar una aplicación web funcional.

Se configuraron los componentes necesarios para trabajar con PHP, Composer, SQLite, Bootstrap y Laravel UI.

Además, se implementó un sistema de autenticación que permite registrar usuarios, iniciar sesión, acceder al Dashboard y cerrar sesión.

Las pruebas realizadas demostraron que Laravel puede detectar errores en los formularios y controlar el acceso mediante las credenciales del usuario.

## 18. Repositorio del sistema de login

El código fuente del sistema de autenticación, junto con sus capturas de pantalla y documentación específica, se encuentra disponible en el siguiente repositorio:

[Laboratorio 2 - Sistema de Login en Laravel](https://github.com/lilambaru/laboratorio-2-login-laravel)

Este repositorio complementa la documentación presentada en el Laboratorio 4 y permite consultar los archivos utilizados durante el desarrollo.

## 19. Conclusión

El desarrollo de este laboratorio permitió comprender el procedimiento necesario para instalar, configurar y ejecutar un proyecto web utilizando Laravel.

Durante la práctica se reforzaron los conocimientos relacionados con PHP, Composer, la estructura de Laravel, las rutas, los controladores, las vistas y la conexión con una base de datos.

La implementación del sistema de autenticación permitió aplicar estos conocimientos mediante el registro de usuarios, el inicio de sesión, el cierre de sesión y las validaciones de los formularios.

Finalmente, el uso de Visual Studio Code, Git y GitHub facilitó la organización del proyecto y la documentación del trabajo realizado, fortaleciendo los conocimientos prácticos en el desarrollo de aplicaciones web.
