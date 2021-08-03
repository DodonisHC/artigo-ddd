# Set arg PHP_VERSION
ARG PHP_VERSION

# Set base image
FROM php:8.0-fpm

# Set working dir
WORKDIR /var/www/html

# Copy service files to container
COPY . .

# Install dependencies
RUN apt-get update && apt-get install -y \
        build-essential \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        locales \
        zip \
        jpegoptim optipng pngquant gifsicle \
        vim \
        unzip \
        git \
        curl \
        default-mysql-client \
    # Clear cache
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install \
        pdo_mysql \
        exif \
        pcntl \
        gd \
    && docker-php-ext-configure gd # --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/

# Install composer and allows the user to execute the config.sh file
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x config.sh

EXPOSE 9000

CMD ["php-fpm"]
