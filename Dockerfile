FROM php:8.0-apache as base
LABEL maintainer="leoskey <leoskey@live.com>"
LABEL description="禅道开源版本"

EXPOSE 80
VOLUME [ "/var/www" ]
ENV ZENTAO_VERSIOIN=16.5
ARG ZENTAO_URL=https://www.zentao.net/dl/zentao/${ZENTAO_VERSIOIN}/ZenTaoPMS.${ZENTAO_VERSIOIN}.php8.0.zip
ENV APACHE_DOCUMENT_ROOT=/var/www/www

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN docker-php-ext-install pdo pdo_mysql

FROM base as publish
WORKDIR /src
RUN apt-get update \
  && apt-get install zip -y \
  && curl -sSL ${ZENTAO_URL} -o ZenTaoPMS.${ZENTAO_VERSIOIN}.zip \
  && unzip ZenTaoPMS.${ZENTAO_VERSIOIN}.zip

FROM base as final
WORKDIR /var/www
COPY --from=publish /src/zentaopms .