#!/usr/bin/env bash
# exit on error
set -o errexit

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
npm install
npm run build

# Create required directories
mkdir -p database storage/app storage/framework/sessions storage/framework/views storage/framework/cache storage/logs bootstrap/cache

# Set permissions
chmod -R 775 storage bootstrap/cache

# Ensure database exists (SQLite) and run migrations + seed
touch database/database.sqlite
php artisan migrate:fresh --seed --force
