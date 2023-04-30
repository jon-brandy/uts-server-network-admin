# 2540120603 - Nicolas Saputra Gunawan - LA07
# Image menggunakan PHP 8.1.x + Web Server
FROM php:8.1.18-apache AS php_image

# Konten dari web harus di copy menggunakan perintah dari dalam dockerfile
COPY . /var/www/html/

# Install mysqli extension untuk PHP di container docker.
RUN docker-php-ext-install mysqli

# Pastikan akses control list untuk kepemilikan ‘u’ dan ‘g’ sudah di set ke www-data.
RUN chown -R www-data:www-data /var/www/html/ 
 
# dan hilangkan permission ‘w’ and ‘x’ untuk others. 
RUN chmod -R 774 /var/www/html/

FROM mysql:latest AS mysql_image
COPY redlock-db.sql /docker-entrypoint-initdb.d/

# root password harus di set sebagai root.
ENV MYSQL_ROOT_PASSWORD=root
# user creds.
ENV MYSQL_USER=nicolas
ENV MYSQL_PASSWORD=nic


