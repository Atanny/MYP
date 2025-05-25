# Base PHP image with needed extensions
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl git unzip zip libzip-dev libpng-dev libonig-dev libxml2-dev \
    libpq-dev npm nodejs

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy files
COPY . .

# Install backend dependencies
RUN composer install --optimize-autoloader --no-dev

# Install and build frontend
RUN npm install && npm run build

# Set proper permissions (optional)
RUN chown -R www-data:www-data /var/www

# Clear caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Expose port
EXPOSE 8000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
