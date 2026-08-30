#!/usr/bin/env bash
# exit on error
set -o errexit

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
npm install
npm run build

# Ensure database exists (SQLite) and run migrations
touch database/database.sqlite
php artisan migrate --force

# Optimize Laravel configuration and routes caching
php artisan config:cache
php artisan route:cache
php artisan view:cache
