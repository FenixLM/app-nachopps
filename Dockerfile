# Usa la imagen base de Bitnami para Laravel
FROM bitnami/laravel:latest

# Copia el script de entrada en el contenedor
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh


# Instala dependencias adicionales si es necesario
# Ejemplo: RUN apt-get update && apt-get install -y <nombre_del_paquete>

# Establece el script de entrada
ENTRYPOINT ["docker-entrypoint.sh"]

# Comando predeterminado para iniciar Laravel
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=8000  & npm run dev --host=0.0.0.0"]
