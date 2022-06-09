FROM php:8.1.6-fpm@sha256:c36b8e95f73b82ab32530dfe3739e2dad731efde71845d9ce0f6c1230523681c

RUN mkdir -p /var/log/backend \
    /tmp/php/sessions

RUN chmod -R a+w /var/log/backend \
    /tmp/php/sessions

RUN echo 'session.save_path="0;666;/tmp/php/sessions"' >> /usr/local/etc/php/conf.d/session.ini

COPY app /var/www/html
