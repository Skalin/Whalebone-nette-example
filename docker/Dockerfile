FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer


# Copy the application code
COPY . /var/www/html

RUN chmod -R 777 /var/www/html/src/bin/console

COPY /docker/entrypoint.sh /usr/local/bin/entrypoint.sh
COPY /docker/wait-for-it.sh /usr/local/bin/wait-for-it.sh

COPY --chown=www-data /docker/app /var/www/html/src

RUN chmod 777 -R /var/www/html/src/temp
RUN chmod 777 -R /var/www/html/src/log
RUN chown -R www-data:www-data /var/www/html/src

RUN chmod +x /usr/local/bin/wait-for-it.sh
RUN chmod +x /usr/local/bin/entrypoint.sh


# Set working directory
WORKDIR /var/www/html/src

ENTRYPOINT ["sh", "/usr/local/bin/entrypoint.sh"]