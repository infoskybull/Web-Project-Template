FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    php8.2 \
    default-mysql-client \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/*
    
WORKDIR /var/www/html

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

RUN composer install --no-scripts --no-autoloader || true

COPY ../../.env .env

RUN chown -R www-data:www-data /var/www/html

CMD ["php-fpm"]