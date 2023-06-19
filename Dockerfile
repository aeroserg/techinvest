FROM php:7.4-cli
COPY . .

CMD [ "php", "-u", "index.php" ]
EXPOSE 3001

