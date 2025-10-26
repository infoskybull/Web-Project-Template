docker builder prune -af
docker system prune -af

cp ./.env ./docker/laravel/.env
docker compose down -v
docker compose build --no-cache
docker compose up -d

chown -R www-data:www-data docker/laravel/
docker compose exec -T laravel_app php artisan migrate
