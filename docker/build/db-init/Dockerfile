ARG PHP_VERSION

FROM php:${PHP_VERSION}-alpine
RUN docker-php-ext-install mysqli

COPY ./init.php .

CMD php init.php