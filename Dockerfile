FROM php:8.2-cli

WORKDIR /app

COPY . .

RUN apt-get update && apt-get install -y git unzip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

CMD ["php", "--version"]