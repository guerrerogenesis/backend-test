## Product Management App - Backend Test

Este proyecto es una aplicación Laravel para la gestión de productos que incluye funcionalidades para listar, agregar, actualizar y eliminar productos y categorías. Es consumido por una interfaz frontend creada en React mediante una API RESTful.


## Requerimientos
Asegúrate de tener las siguientes herramientas instaladas en tu máquina:

- PHP 8.3 o superior.
- Composer 2.8 o superior.
- Base de datos MySQL.
- Node.js y NPM (si es necesario para el frontend, como en Laravel Mix).

## Pasos para Clonar el Repositorio

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/guerrerogenesis/backend-test.git

2. **Accede al directorio del proyecto donde lo clonaste:**
   ```bash
   cd nombre-del-repositorio

3. **Instala las dependencias:**
   ```bash
   composer install
   npm install *opcional

4. **Copiar el archivo .env.example**
    Laravel utiliza un archivo .env para la configuración del entorno. Copia el archivo .env.example a .env:
   ```bash
   cp .env.example .env


3. **Generar la clave de la aplicación**
    Laravel necesita una clave única para la aplicación. Ejecuta el siguiente comando para generarla:
   ```bash
   php artisan key:generate


3. **Configurar la base de datos**
    Abre el archivo .env y configura los parámetros de la base de datos. Por ejemplo, si estás usando MySQL, asegúrate de tener:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_base_de_datos
   DB_USERNAME=usuario
   DB_PASSWORD=contraseña



## Pasos para Ejecutar la Aplicación

Hay 2 opciones para generar la base de datos
1. **Correr las migraciones y seeders**
    Para crear las tablas en la base de datos y llenar los datos iniciales, ejecuta el siguiente comando:
    ```bash
    php artisan migrate --seed

O bien

1.**Importar el backup**
    En la carpeta raiz del proyecto viene un archivo llamado init.sql.zip que se puede utilizar para importar con el gestor de base de datos de su preferencia. Puede ser TablePlus, PHPMyAdmin, etc.


2. **Correr el servidor de desarrollo**
    Para iniciar el servidor de desarrollo de Laravel, ejecuta:
    ```bash
    php artisan serve

Esto arrancará el servidor en http://localhost:8000 por defecto. Puedes abrir esa URL en tu navegador para ver la aplicación.




---


## Esta proyecto esta desarrollado con:
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
