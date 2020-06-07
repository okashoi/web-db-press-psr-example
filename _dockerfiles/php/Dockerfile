FROM php:7.4.6-cli

RUN apt-get update &&\
    apt-get install -y libzip-dev unzip &&\
    docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php &&\
    mv composer.phar /usr/local/bin/composer
