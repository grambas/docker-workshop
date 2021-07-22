FROM php:7.3.29-apache

# Install required pacakges and libs
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    zip unzip git curl telnet libmemcached-dev libicu-dev libzip-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip

# Install memcached php lib
RUN pecl install memcached && docker-php-ext-enable memcached

# Install composer
RUN curl -fsSL https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer
