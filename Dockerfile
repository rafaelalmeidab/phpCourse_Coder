# Use a imagem oficial do PHP 7.4.33 do Docker Hub
FROM php:7.4.33-apache

# Instala dependências necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite

# Copia os arquivos do projeto para o diretório raiz do Apache
COPY . /var/www/html/

# Define as permissões apropriadas para o diretório de trabalho
RUN chown -R www-data:www-data /var/www/html

# Exposição da porta 80 para o Apache
EXPOSE 80

# Comando padrão para iniciar o Apache
CMD ["apache2-foreground"]
