#!/bin/bash

# Instalar las dependencias de Composer
composer install

# Generar la clave de la aplicación
php artisan key:generate

# Ejecutar las migraciones
php artisan migrate --force

# Instalar dependencias de NPM
npm install


#Iniciar Laravel
php artisan serve --host=0.0.0.0 --port=8000 &
npm run dev --host=0.0.0.0
# npm run dev --host

# Ejecutar el comando original
exec "$@"
