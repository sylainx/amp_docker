FROM php:8.1.5-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get upgrade -y