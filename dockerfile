FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/shared/nginx/
RUN rm -rf /usr/shared/nginx/html
RUN ln -s public html