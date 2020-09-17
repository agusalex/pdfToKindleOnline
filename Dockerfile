FROM behance/docker-php:7.3
COPY --chown=www-data:www-data ./ /app/public
COPY /app/public/nginx.conf /etc/nginx/nginx.conf
RUN chmod 777 /app/public/*
