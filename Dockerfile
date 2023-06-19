FROM php:7.4-cli
COPY . .
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]
EXPOSE 3001

