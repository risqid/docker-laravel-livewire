FROM php:8.4-fpm-alpine

ARG USER_ID
ARG GROUP_ID

# For Alpine, we use 'shadow' to modify the existing www-data user
RUN apk add --no-cache shadow && \
    usermod -u ${USER_ID} www-data && \
    groupmod -g ${GROUP_ID} www-data

# Install system dependencies
RUN apk add --no-cache \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    icu-dev \
    shadow \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip bcmath intl exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www

USER www-data

EXPOSE 9000
CMD ["php-fpm"]