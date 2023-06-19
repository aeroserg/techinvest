FROM php:7.4-apache
COPY . . # /usr/src/techinvest
# WORKDIR /usr/src/techinvest
CMD [ "php", "-u", "./index.php" ]
EXPOSE 80

