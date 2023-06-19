FROM php:7.4-cli
COPY . .
WORKDIR /techinvest
CMD  ["php-fpm"]
CMD [ "php", "-u", "./index.php" ]
EXPOSE 3001

