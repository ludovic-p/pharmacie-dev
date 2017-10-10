FROM php:7.0-fpm
#~~~ DEPENDENCIES ~~~#

# Add PHP repository to apt source
RUN apt-get update \
    && apt-get install -y \
        libpng12-dev \
        libjpeg-dev  \
        curl \
        sed \
        zlib1g-dev \
    && docker-php-ext-install \
        zip \
        mysqli \
        pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get install -y autoconf g++ make openssl libssl-dev libcurl4-openssl-dev
RUN apt-get install -y libcurl4-openssl-dev pkg-config
RUN apt-get install -y libsasl2-dev

#~~~ DIRS ~~~#
WORKDIR /var/www/html/
RUN mkdir /var/www/logs/ /var/www/cache/
RUN chmod 777 /var/www/logs/ /var/www/cache/
RUN chown www-data:www-data /var/www/logs/ /var/www/cache/
RUN usermod -u 1000 www-data
