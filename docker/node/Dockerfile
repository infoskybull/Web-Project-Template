FROM node:20-alpine

WORKDIR /var/www/html

COPY docker/laravel/package*.json ./
COPY .env .env

RUN npm install

EXPOSE 5173
