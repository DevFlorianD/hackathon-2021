FROM debian:stretch

RUN apt-get update && \
    apt-get install -y nano nginx software-properties-common && \
    apt-get install -y certbot && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY nginx.conf /etc/nginx/
COPY api.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/api.conf /etc/nginx/sites-enabled/api

RUN usermod -u 1000 www-data

CMD ["nginx", "-g", "daemon off;"]

EXPOSE 80