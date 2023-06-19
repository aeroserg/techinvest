FROM php:7.4-cli
COPY . .
WORKDIR /usr/src/myapp
CMD [ "php", "-u", "index.php" ]
EXPOSE 3001

