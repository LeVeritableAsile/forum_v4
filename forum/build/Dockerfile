FROM php:8.1-fpm-alpine

# Use the default production configuration
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY php-custom.ini $PHP_INI_DIR/conf.d/php-custom.ini

# Install helper used to install php extensions
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install required dependencies
RUN chmod +x /usr/local/bin/install-php-extensions && \
  install-php-extensions \
    @composer-2 \
    curl \
    dom \
    fileinfo \
    gd \
    json \
    mbstring \
    openssl \
    pdo_mysql \
    tokenizer \
    zip

# Create the working directory
VOLUME /var/www/dev.lesitedecuisine.fr
WORKDIR /var/www/dev.lesitedecuisine.fr
RUN chown www-data:www-data .
USER www-data

# Install the forum
RUN composer create-project flarum/flarum . && \
  composer require migratetoflarum/old-passwords && \
  composer require flarum/mentions && \
  composer require flarum/tags && \
  composer require fof/nightmode && \
  composer config repositories.asile_ninja vcs https://github.com/LeVeritableAsile/ext_ninja.git && \
  composer require asile/ninja

# With its configuration
ADD config.php .
ADD favicon.ico .
