FROM behance/docker-php:7.3-alpine
COPY --chown=www-data:www-data ./ /app/public
COPY --chown=www-data:www-data nginx.conf /etc/nginx/nginx.conf
COPY php.ini /etc/php7/php.ini
WORKDIR /app/public
RUN chmod 777 /app/public/* && composer install
ENV PHP_FPM_UPLOAD_MAX_FILESIZE=300M
ENV SERVER_MAX_BODY_SIZE=300M

