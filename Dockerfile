FROM php:8.1-apache

# Installation des dépendances nécessaires
RUN apt-get update \
    && apt-get install -y wget vim git zip unzip zlib1g-dev libzip-dev libpng-dev \
    && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo_mysql gd zip pcntl exif

# Activation de l'extension mysqli
RUN docker-php-ext-enable mysqli

# Activation des modules Apache
RUN a2enmod headers expires rewrite

# Installation et configuration de Xdebug
RUN pecl install xdebug-3.1.5 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www/html
