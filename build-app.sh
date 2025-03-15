#!/bin/bash
# Make sure this file has executable permissions, run `chmod +x build-app.sh`
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache
# Exit the script if any command fails
set -e

# Build assets using NPM
npm run build

# Clear cache
php artisan optimize:clear
