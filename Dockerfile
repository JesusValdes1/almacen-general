FROM php:8.2-apache

# Extensiones necesarias
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar proyecto
WORKDIR /var/www/html
COPY . .

# Configuración de Apache para Laravel (usar public/)
RUN a2enmod rewrite \
    && sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Instalar dependencias
RUN composer install --optimize-autoloader --no-dev

EXPOSE 8080
CMD ["apache2-foreground"]
