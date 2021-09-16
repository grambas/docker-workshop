FROM php:7.3.29-apache

# Install required pacakges and libs
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    git wget zip unzip curl telnet libmemcached-dev libicu-dev libzip-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip

# Install composer
RUN curl -fsSL https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer global require phpunit/phpunit ^8.0 --no-progress --no-scripts --no-interaction

ENV PATH /root/.composer/vendor/bin:$PATH

# Install memcached php lib
RUN pecl install memcached && docker-php-ext-enable memcached

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/cache/*
