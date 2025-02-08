FROM php:8.4-fpm

ARG gid
ARG uid

RUN apt-get update
RUN apt-get install -y git
RUN apt-get install -y curl
RUN apt-get install -y zip
RUN apt-get install -y unzip
RUN apt-get install -y libzip-dev

RUN docker-php-ext-install zip


RUN usermod -u $uid www-data
RUN groupmod -g $gid www-data

Run chown -R www-data:www-data /var/www/html

USER www-data

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . /var/www/html
WORKDIR /var/www/html


ENTRYPOINT ["./run.sh"]
