## PHP-pubip
Small docker php based on php:7.2-apache webserver for self-hosting a IP lookup website.

Build with included Dockerfile.
``` 
docker build --no-cache --tag mysticsilent/php-pubip:latest .
```

docker-compose.yaml
``` 
version: "3"
services:
  php-pubip:
    image: mysticsilent/php-pubip:latest
    restart: always
    container_name: php-pubip
    ports:
      - 80:80
```


Credits to HTML5 UP for template.
Big Picture by HTML5 UP
html5up.net
