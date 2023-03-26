FROM php:7.4-fpm-alpine
WORKDIR /var/www/html
RUN apk update && apk add \
       build-base \
       vim
RUN docker-php-ext-install pdo_mysql mysqli opcache
COPY php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www
USER www
COPY --chown=www:www ../data/ /var/www/html
EXPOSE 9000
