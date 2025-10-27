cp ./.env ./docker/laravel/.env
docker compose down -v
docker compose build --no-cache
docker compose up -d

sleep 2

docker compose exec -T laravel_app php artisan config:clear
docker compose exec -T laravel_app php artisan cache:clear
docker compose exec -T laravel_app php artisan route:clear
docker compose exec -T laravel_app php artisan view:clear

docker compose exec -T node npm run build

