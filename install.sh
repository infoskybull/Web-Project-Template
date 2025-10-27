#!/bin/sh

if [ ! -f .env ]; then
  echo "Error: .env file does not exist"
  exit 1
fi

docker builder prune -af
docker system prune -af

cp ./.env ./docker/laravel/.env
docker compose down -v
docker compose build --no-cache
docker compose up -d

docker compose exec -T laravel_app php artisan migrate

rm ./docker/laravel/public/build/ -r

docker compose exec -T node npm run build