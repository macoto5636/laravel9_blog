FROM php:8.0-fpm

# COPY php.ini
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# Composer install
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get -y install \
    git \
    zip \
    unzip \
    vim \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql bcmath

WORKDIR /var/www/html