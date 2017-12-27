FROM egovio/wordpress:4.9.1-php7.2-apache

ENV DATA_DIR=/opt/eGov/egov-wordpress-portal
RUN mkdir -p ${DATA_DIR}
ADD  wp-content ${DATA_DIR}/wp-content

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

CMD ["apache2-foreground"]
