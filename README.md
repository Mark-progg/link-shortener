# Сокращатель ссылок (Laravel + PostgreSQL)

Тестовое задание: сокращатель ссылок с логированием и привязкой к пользователю.

## Запуск

```bash
git clone https://github.com/Mark-progg/link-shortener
cd link-shortener
docker-compose up -d artisan
docker-compose run --rm app php artisan migrate --seed
```

### Сервер: http://localhost:8000
### Тестовые пользователи:
test1@example.com / password
test2@example.com / password
test3@example.com / password
