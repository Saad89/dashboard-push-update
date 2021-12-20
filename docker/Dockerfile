FROM ubuntu:19.10

ENV DEBIAN_FRONTEND noninteractive
ENV HOME            /root
ENV LC_ALL          C.UTF-8
ENV LANG            en_US.UTF-8
ENV LANGUAGE        en_US.UTF-8
ENV TZ 'Europe/Berlin'
ENV PHPV 7.3
ENV PORT 9000

RUN  sed -i 's/archive.ubuntu.com/old-releases.ubuntu.com/g' /etc/apt/sources.list \
    && sed -i 's/deb http:\/\/security/#deb http:\/\/security/g' /etc/apt/sources.list \
    && apt upgrade \
    && apt update  \
    && apt install -y software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt update
RUN apt install -y php \
        php$PHPV-fpm \
        php$PHPV-curl \
        php$PHPV-dom \
        php$PHPV-gd \
        php$PHPV-mbstring \
        php$PHPV-zip \
        php$PHPV-mysql \
        php$PHPV-apcu \
        php$PHPV-redis \
        php$PHPV-cli


RUN echo $TZ > /etc/timezone && \
    apt-get update && apt-get install -y tzdata && \
    rm /etc/localtime && \
    ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata && \
    apt-get clean

#fpm settings
RUN sed -i 's|;date.timezone =|date.timezone = "Europe/Berlin"|g' /etc/php/$PHPV/fpm/php.ini \
    && sed -i 's|memory_limit = 128M|memory_limit = 256M|g' /etc/php/$PHPV/fpm/php.ini \
    && sed -i 's|upload_max_filesize = 2M|upload_max_filesize = 8M|g' /etc/php/$PHPV/fpm/php.ini \
    && mkdir -p /run/php

#cli settings
RUN sed -i 's|;date.timezone =|date.timezone = "Europe/Berlin"|g' /etc/php/$PHPV/cli/php.ini \
    && sed -i 's|memory_limit = 128M|memory_limit = 256M|g' /etc/php/$PHPV/cli/php.ini

ADD www.conf /etc/php/$PHPV/fpm/pool.d/

EXPOSE $PORT
ENTRYPOINT /usr/sbin/php-fpm${PHPV} --nodaemonize --force-stderr
