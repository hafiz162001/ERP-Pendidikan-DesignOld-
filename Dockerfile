FROM strongpapazola/ubuntu:template-web-php7.4
RUN rm -rf /var/www/html/*
COPY . /var/www/html/
RUN rm -rf /var/www/html/.git
RUN rm -rf /var/www/html/.git*
RUN rm -rf /var/www/html/*.sh
#RUN rm /var/www/html/application/config/config.php;\
#rm -rf /var/www/html/.git*;
#COPY CONFIG_PROD/config.php /var/www/html/application/config/config.php
#COPY CONFIG_PROD/hooks.php /var/www/html/application/config/hooks.php

CMD apachectl -D FOREGROUND

