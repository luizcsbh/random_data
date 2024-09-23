# Use uma imagem oficial do PHP 8.2 com suporte a extensões necessárias para Laravel
FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    nano \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring zip pdo pdo_mysql

# Instalar Composer globalmente
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Definir o diretório de trabalho
WORKDIR /var/www

# Copiar o arquivo de dependências e instalar via Composer
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader

# Copiar todos os arquivos do projeto
COPY . .

# Gerar autoloader do Composer
RUN composer dump-autoload --optimize

# Ajustar permissões
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Expor a porta usada pelo servidor artisan
EXPOSE 8000

# Definir o comando de execução do contêiner para rodar o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000