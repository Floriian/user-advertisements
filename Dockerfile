FROM php:8.0-apache

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli

CMD [ "apache2-foreground" ]