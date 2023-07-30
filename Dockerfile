FROM php:8.0-apache
RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
