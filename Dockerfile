
FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
      git \
      unzip \
      zip

RUN rm -r /var/lib/apt/lists/*
RUN pecl install xdebug-3.1.1
RUN docker-php-ext-enable xdebug

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# change the web_root to cakephp /var/www/html/src folder
RUN sed -i -e "s/html/html\/webroot/g" /etc/apache2/sites-enabled/000-default.conf

# use default developer config
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
