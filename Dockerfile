FROM php:7.4-cli
COPY . .
WORKDIR . .
CMD [ "php", "-u", "index.php" ]
EXPOSE 3001

