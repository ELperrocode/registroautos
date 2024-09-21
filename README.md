HENRY MALDONADO ILS131
Pasos para configurar el proyecto
Este proyecto está construido con **Filament** y **Laravel**. A continuación, se detallan los pasos necesarios para configurar y ejecutar el proyecto en tu entorno local.

https://filamentphp.com/docs/3.x/panels/installation ---Documentacion de la pagina de fillament


Luego de clonar el Repositorio

Instalar Dependencias
-composer install
-npm install

Configurar el Archivo .env

-En caso de ser necesario  (ni idea de que eso profe me lo dijo chatgpt)  
-Generar la Clave de Aplicación
-Laravel utiliza una clave de aplicación (APP_KEY) para cifrar datos. Si no tienes una clave configurada, ejecuta el siguiente comando para generarla:
-php artisan key:generate

Ejecutar Migraciones
-php artisan migrate

Ejecutar Seeders
#los seeder contienen datos de prueba como colores, marcas,modelos y tipos de vehiculos, se pueden agregar mas de ser necesario
-php artisan db:seed

Crear un Usuario de Filament
-php artisan make:filament-user

Ingresar al login que se hace mediante agregando /admin a la ruta browser donde se tenga el proyecto
con el usuario que creamos en el paso anterior
en algunos casos dependiendo de que estes usando para levantar el servidor web habra que colocar el puerto a la ruta especificada
 en el "APP_URL" del  .env
