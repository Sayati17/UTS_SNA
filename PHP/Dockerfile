FROM php:8.1-apache

COPY . /var/www/html
RUN apt-get update
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html

EXPOSE 80
EXPOSE 7077
