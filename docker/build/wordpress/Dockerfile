ARG WORDPRESS_VERSION
ARG PHP_VERSION
FROM wordpress:${WORDPRESS_VERSION}-php${PHP_VERSION}-apache

RUN apt-get update
RUN apt-get install nano locate -y
RUN apt-get clean

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN touch /usr/local/etc/php/xdebug.log && chown www-data:www-data /usr/local/etc/php/xdebug.log
COPY xdebug.ini /usr/local/etc/php/conf.d