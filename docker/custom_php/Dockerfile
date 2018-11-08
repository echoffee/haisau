FROM php:7.2-apache
RUN apt -y update --fix-missing
RUN apt upgrade -y
RUN docker-php-ext-install pdo pdo_mysql
