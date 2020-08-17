FROM php:7.4.8-fpm
RUN docker-php-ext-install pdo pdo_mysql