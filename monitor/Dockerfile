FROM nginx:1.22.0

WORKDIR /opt/logs

RUN mkdir -p /var/log/nginx \
    /opt/logs

COPY .etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

RUN ln -sf /var/log/nginx /opt/logs/monitor

RUN rm /var/log/nginx/*.log
