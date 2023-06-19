FROM php:7.4-cli
COPY . /usr/src/techinvest
WORKDIR /usr/src/techinvest
CMD [ "php", "-u", "./index.php" ]
EXPOSE 3001

