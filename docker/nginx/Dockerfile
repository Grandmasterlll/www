FROM nginx:latest

LABEL maintainer="Melkov Aleksandr <a.melkov@richbrains.net>"

COPY nginx.conf /etc/nginx/

RUN apt-get update \
    && apt-get upgrade \
    && apt-get install -y logrotate \
    && apt-get install -y openssl \
    && apt-get install -y bash

RUN apt-get install -y curl

# Create 'messages' file used from 'logrotate'
RUN touch /var/log/messages

# Copy 'logrotate' config file
COPY logrotate/nginx /etc/logrotate.d/

# Set upstream conf and remove the default conf
RUN echo "upstream php-upstream { server app:9000; }" > /etc/nginx/conf.d/upstream.conf \
    && rm /etc/nginx/conf.d/default.conf

ADD ./startup.sh /opt/startup.sh
RUN sed -i 's/\r//g' /opt/startup.sh
CMD ["/bin/bash", "/opt/startup.sh"]

EXPOSE 80 443
