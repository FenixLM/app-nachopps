#!/bin/bash

# Instalar las dependencias de Composer
composer install

# # Esperar a que MariaDB esté disponible
# until mysql -h "$DB_HOST" -u "$DB_USERNAME" -e 'SHOW DATABASES;' &> /dev/null; do
#   echo "Host: $DB_HOST Esperando a la base de datos..."
#   echo "Host: $DB_HOST"
# echo "Usuario: $DB_USERNAME"
#   sleep 2
# done

# generar la clave de la aplicación
php artisan key:generate

# # Ejecutar las migraciones
php artisan migrate --force



# Ejecutar el comando original
exec "$@"
