FROM php:8.3-fpm-alpine

## from - https://github.com/docker-library/php/blob/12c155ba57dc4ab67e60fa2a702e38a22f210f35/8.3/alpine3.20/fpm/Dockerfile

RUN apk add --no-cache ca-certificates curl openssl tar xz
RUN docker-php-ext-install opcache

WORKDIR /srv

EXPOSE 9000

# run in foreground and run as root
CMD ["php-fpm", "-F", "-R"]
