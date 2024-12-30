FROM php:8.1-fpm

# Instalar la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Opcional: Instalar extensiones adicionales
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# Copia el contenido de app al directorio raíz de PHP
COPY ./app/ /var/www/html/

# Establece el directorio de trabajo
WORKDIR /var/www/html
