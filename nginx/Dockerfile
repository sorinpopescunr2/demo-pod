FROM nginx:1.22.0

WORKDIR /var/www

RUN mkdir -p /var/log/nginx \
    /var/www/html

COPY .etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

RUN rm /var/log/nginx/*.log
