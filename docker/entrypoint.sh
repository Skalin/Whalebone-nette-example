#!/bin/sh

wait-for-it.sh db:3306 --timeout=60 --strict -- echo "Database is up"

# Run Composer install
composer install

# Run database migrations
php /var/www/html/src/bin/console migrations:migrate --no-interaction

# Start Apache in the foreground
apache2-foreground