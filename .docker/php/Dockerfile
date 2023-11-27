FROM php:8.2-fpm-buster

RUN docker-php-ext-install mysqli

RUN apt-get update && apt-get install -y \
     gnupg \
     g++ \
     procps \
     openssl \
     git \
     unzip \
     zlib1g-dev \
     libzip-dev \
     libfreetype6-dev \
     libpng-dev \
     libjpeg-dev \
     libicu-dev  \
     libonig-dev \
     libxslt1-dev \
     acl

     RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

