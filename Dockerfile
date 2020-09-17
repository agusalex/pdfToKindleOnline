FROM behance/docker-php:7.3-alpine
COPY --chown=www-data:www-data ./ /app/public
RUN chmod 777 /app/public/*
ENV PHP_FPM_UPLOAD_MAX_FILESIZE=300M
