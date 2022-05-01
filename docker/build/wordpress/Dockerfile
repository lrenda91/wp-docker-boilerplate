ARG WORDPRESS_VERSION
ARG PHP_VERSION
FROM wordpress:${WORDPRESS_VERSION}-php${PHP_VERSION}-apache

RUN apt-get update
RUN apt-get install nano locate -y
RUN apt-get clean

RUN pecl install xdebug && updatedb
COPY xdebug.ini /usr/local/etc/php/conf.d
RUN echo "zend_extension=$(locate xdebug.so)" >> /usr/local/etc/php/conf.d/xdebug.ini