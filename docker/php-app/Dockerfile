FROM php:7.3.29-apache

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    git wget zip unzip

# Install composer
RUN curl -fsSL https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer global require phpunit/phpunit ^8.0 --no-progress --no-scripts --no-interaction

ENV PATH /root/.composer/vendor/bin:$PATH

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/cache/*

WORKDIR /var/www/html/

CMD ["php-fpm"]
