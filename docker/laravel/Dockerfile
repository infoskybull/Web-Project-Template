FROM php:8.2-fpm

RUN apt update \
    && apt install -y default-mysql-client git unzip libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/*
    
WORKDIR /var/www/html
COPY ./ ./ 

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

RUN chown -R www-data:www-data /var/www/html