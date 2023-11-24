#!/bin/bashrm
mv .env.example .env
composer install --optimize-autoloader --no-dev
php artisan key:generate
php artisan optimize:clear
php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache
