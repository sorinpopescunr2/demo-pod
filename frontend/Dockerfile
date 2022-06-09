FROM node:18.2.0@sha256:8594391a4982b9d537e4c999ee8cf6d9b653a5354c4c56bc7cd19310671c6a06

WORKDIR /app

COPY app /app

RUN mkdir -p /opt/frontend/

RUN cp -r public/* /opt/frontend/

RUN npm ci
RUN mkdir p /opt/frontend/bootstrap
RUN cp -r node_modules/bootstrap/dist/* /opt/frontend/bootstrap
