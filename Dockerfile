# Use uma imagem oficial do PHP com FPM
FROM php:8.1-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    sqlite3 \
    libsqlite3-dev

# Instale extensões do PHP necessárias
RUN docker-php-ext-install pdo pdo_sqlite gd

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configure o diretório de trabalho
WORKDIR /var/www

# Copie todos os arquivos para o contêiner
COPY . .

# Dê as permissões corretas para a pasta de armazenamento e cache do Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage

# Exponha a porta 9000 para o PHP-FPM
EXPOSE 9000

# Inicia o PHP-FPM
CMD ["php-fpm"]