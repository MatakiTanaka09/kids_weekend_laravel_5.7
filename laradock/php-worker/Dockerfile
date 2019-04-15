#
#--------------------------------------------------------------------------
# Image Setup
#--------------------------------------------------------------------------
#
ARG PHP_VERSION=${PHP_VERSION}
FROM php:${PHP_VERSION}-alpine
RUN docker-php-ext-install pdo pdo_mysql mysqli tokenizer xml && \
    apk --update add wget \
    curl \
    git \
    build-base \
    libmcrypt-dev \
#    libxml2-dev \
    zlib-dev \
    autoconf \
    cyrus-sasl-dev \
    libgsasl-dev \
    postgresql-dev \
    supervisor && \

    apk del --no-cache \
      libmcrypt-dev \
#      libxml2-dev \
      zlib-dev \
      cyrus-sasl-dev \
      libgsasl-dev && \
    rm /var/cache/apk/* && \
    mkdir -p /var/www

# Install composer and add its bin to the PATH.
RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer

# Source the bash
RUN . ~/.bashrc

RUN php -v | head -n 1 | grep -q "PHP ${PHP_VERSION}."

#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------
#

WORKDIR /var/www
