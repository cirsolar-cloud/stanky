#!/bin/sh

sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf

./cloud_sql_proxy -instances=tst-cirsolar-cloud:asia-east1:tst-cirsolar-db=tcp:5432 

php-fpm -D

# while ! nc -w 1 -z 127.0.0.1 9000; do sleep 0.1; done;

nginx
