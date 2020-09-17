FROM behance/docker-php:7.3
COPY --chown=www-data:www-data ./ /app/public
COPY --chown=www-data:www-data /app/public/nginx.conf /etc/nginx/
RUN chmod 777 /app/public/*