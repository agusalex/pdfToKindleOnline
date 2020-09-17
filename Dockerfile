FROM behance/docker-php:7.3
COPY ./ /app/public
RUN chown www-data:www-data  /app/public
