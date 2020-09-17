FROM behance/docker-php:7.3
RUN useradd -ms /bin/bash www-data
COPY --chown=www-data:www-data ./ /app/public
RUN chmod 777 /app/public/*
USER www-data
