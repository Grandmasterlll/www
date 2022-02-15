# Image
FROM php:8.0-fpm

LABEL maintainer="Melkov Aleksandr <a.melkov@richbrains.net>"
ARG TZ=UTC
# Starting from scratch
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Dependencies
RUN apt-get update

# Zip
RUN apt-get install -y libzip-dev zip && docker-php-ext-configure zip && docker-php-ext-install zip

# Localtime
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
    && echo $TZ > /etc/timezone
# Git
RUN apt-get install -y git

# Curl
RUN apt-get install -y libcurl3-dev curl && docker-php-ext-install curl

# GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

# Mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

# BC Math
RUN docker-php-ext-install bcmath

# Human Language and Character Encoding Support
RUN apt-get install -y zlib1g-dev libicu-dev g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Custom php.ini config
COPY php.ini /usr/local/etc/php/php.ini

# Install Xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Composer installation
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Clean up
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Node
RUN rm -rf /var/lib/apt/lists/ && curl -sL https://deb.nodesource.com/setup_10.x | bash -
RUN apt-get install nodejs npm -y

# Set up user permissions
ARG UID=1000
ARG GID=1000
RUN addgroup --gid $GID user
RUN adduser --disabled-password --gecos '' --uid $UID --gid $GID user
USER user

# Set up default directory
WORKDIR /var/www
COPY . /var/www
