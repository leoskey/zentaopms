FROM php:7.2-apache
LABEL maintainer="leoskey <leoskey@live.com>"
LABEL description="禅道开源版本"

EXPOSE 80
VOLUME [ "/var/www" ]

ENV ZENTAO_VERSIOIN=15.2
ENV APACHE_DOCUMENT_ROOT /var/www/www

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /var/www
COPY . .