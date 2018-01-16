FROM egovio/wordpress:4.9.1-php7.2-apache

ENV DATA_DIR=/usr/src/wordpress

RUN rm -rf ${DATA_DIR}/wp-content

ADD wp-content ${DATA_DIR}/wp-content
