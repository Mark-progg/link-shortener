#!/bin/bash

if [ ! -f .env ]; then
    cp .env.example .env
    echo ".env создан"
fi

if [ ! -d vendor ]; then
    echo "Установка зависимостей..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

if ! grep -q "APP_KEY=base64:" .env; then
    echo "Генерация ключа..."
    php artisan key:generate --ansi
fi

exec "$@"

