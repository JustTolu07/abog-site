FROM php:8.3-cli

# Install system dependencies & Node.js 20
RUN apt-get update && apt-get install -y \
    git unzip libsqlite3-dev \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Run build tasks inside the image
RUN composer install --no-dev --optimize-autoloader \
    && npm install \
    && npm run build \
    && touch database/database.sqlite \
    && php artisan migrate --force \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
