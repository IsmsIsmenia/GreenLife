FROM php:7.4-apache

# Instala extensão do MySQL no PHP
RUN docker-php-ext-install mysqli

# Ativa o mod_rewrite do Apache (caso queira usar URLs amigáveis no futuro)
RUN a2enmod rewrite
