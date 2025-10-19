# 1. Base PHP-FPM image
FROM php:8.2-fpm

# 2. Install system dependencies + nginx
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    libzip-dev \
    libonig-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip mbstring

# 3. Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Set working directory
WORKDIR /var/www/html

# 5. Copy project files
COPY . .

# 6. Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# 7. Copy Vue build (already in public/)
COPY ./public ./public

# 8. Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 9. Remove default Nginx site
RUN rm /etc/nginx/sites-enabled/default

# 10. Add custom Nginx config (see nginx.conf)
COPY nginx.conf /etc/nginx/sites-enabled/laravel.conf

# 11. Expose HTTP port
EXPOSE 80

# 12. Start Nginx and PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
