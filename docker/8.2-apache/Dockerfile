FROM php:8.2.4-apache-bullseye

WORKDIR /var/www/html

ARG WWWGROUP

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libwebp-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    zip \
    curl \
    unzip \
    libmagickwand-dev --no-install-recommends \
    supervisor \
    ghostscript \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libc-client-dev libkrb5-dev \
    libpq-dev \
    git \
    openssh-client

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql
RUN docker-php-ext-install xml
#RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-install zip
RUN docker-php-ext-install mbstring
#RUN apt-get install -y libc-client-dev libkrb5-dev
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install -j$(nproc) imap
RUN mkdir -p /usr/src/php/ext/imagick
RUN curl -fsSL https://github.com/Imagick/imagick/archive/06116aa24b76edaf6b1693198f79e6c295eda8a9.tar.gz | tar xvz -C "/usr/src/php/ext/imagick" --strip 1
RUN docker-php-source delete
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN sed -i '/disable ghostscript format types/,+6d' /etc/ImageMagick-6/policy.xml

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

RUN groupadd --force -g $WWWGROUP sail

RUN useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail

RUN chown -R sail:$WWWGROUP /var/www/html \
    && a2enmod rewrite \
    && a2enmod headers

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && echo "deb https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
    && apt-get update \
    && apt-get install -y yarn

RUN apt-get update; \
    # Imagick extension
    apt-get install -y libmagickwand-dev; \
    pecl install imagick; \
    docker-php-ext-enable imagick;

#COPY start-container /usr/local/bin/start-container

#COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY php.ini /usr/local/etc/php/php.ini

#RUN chmod +x /usr/local/bin/start-container
RUN chmod -R 777 /var/www/html

ENTRYPOINT apache2-foreground
