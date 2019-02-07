ARG PHP_VERSION=${PHP_VERSION}
FROM php:${PHP_VERSION}-fpm-alpine

RUN apk --update add --no-cache \
  wget \
  curl \
  git \
  build-base \
  libmcrypt-dev \
  libxml2-dev \
  zlib-dev \
  autoconf \
  cyrus-sasl-dev \
  libgsasl-dev \
  postgresql-dev \
  freetype \
  libpng \
  libjpeg-turbo \
  freetype-dev \
  libpng-dev \
  libjpeg-turbo-dev && \
  docker-php-ext-install mbstring pdo pdo_pgsql tokenizer xml opcache && \
  docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} gd && \
  apk del --no-cache \
    freetype-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libmcrypt-dev \
    libxml2-dev \
    zlib-dev \
    cyrus-sasl-dev \
    libgsasl-dev && \
  mkdir -p /var/www && \
  php -v | head -n 1 | grep -q "PHP ${PHP_VERSION}."

COPY ./opcache.ini /usr/local/etc/php/conf.d/opcache.ini  

#
#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------
#
COPY ./laravel.ini /usr/local/etc/php/conf.d
COPY ./xlaravel.pool.conf /usr/local/etc/php-fpm.d/

WORKDIR /var/www

CMD ["php-fpm"]

EXPOSE 9000
