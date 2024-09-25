# Proyecto de Registro de Vehículos Henry Maldonado ILS131

Este proyecto está construido con **Filament** y **Laravel**. A continuación, se detallan los pasos necesarios para configurar y ejecutar el proyecto en tu entorno local.

## Documentación

- [Documentación de Filament](https://filamentphp.com/docs/3.x/panels/installation)

## Pasos para Configurar el Proyecto

### 1. Clonar el Repositorio

### 2. Instalar Dependencias
-composer install
-npm install

### 3.Configurar el Archivo .env
-Configura las variables de entorno según tu entorno local
-Copia el archivo .env.example a .env

 
### 4.Generar la Clave de Aplicación
-Laravel utiliza una clave de aplicación (APP_KEY en el archivo .env) para cifrar datos. Si no tienes una clave configurada, ejecuta el siguiente comando para generarla:
-php artisan key:generate

### 5.Ejecutar Migraciones y seeders
#Las migraciones se usan para crear las tablas, recueda tener la base de datos creada y configurada en tu archivo .env
-php artisan migrate

#los seeder contienen datos de prueba como colores, marcas,modelos y tipos de vehiculosy el usuario de test
-php artisan db:seed


### 6.Ingresar al Panel de administracion
#se hace agregando /admin a la ruta browser donde se tenga el proyecto ejemplo "http://localhost:8000/admin"
#con el usuario y contraseña
-test@example.com
-123


Nota
En algunos casos, dependiendo de qué estés usando para levantar el servidor web, habrá que colocar el puerto a la ruta especificada en el APP_URL del archivo .env.

Autor: Henry Maldonado 