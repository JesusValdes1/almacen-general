# Imagen base con PHP, Composer y extensiones necesarias
FROM php:8.2-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configurar Apache para que apunte a /var/www/html/public
WORKDIR /var/www/html
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Instalar dependencias de Laravel
RUN composer install --optimize-autoloader --no-dev

# Generar clave de aplicación (si no está definida en variables)
# Esto lo puedes hacer en Render con APP_KEY
# RUN php artisan key:generate

# Exponer puerto
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]
