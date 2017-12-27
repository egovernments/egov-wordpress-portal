FROM nginx:1.11.10-alpine

ENV DATA_DIR=/opt/eGov/egov-wordpress-portal
RUN mkdir -p ${DATA_DIR}
ADD  wp-content ${DATA_DIR}/wp-content

COPY docker-entrypoint.sh /usr/local/bin/

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
