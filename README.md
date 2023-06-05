# wp-docker-boilerplate
Wordpress boilerplate with Docker

## Installation

Create local certificates with [mkcert](https://mkcert.org/) and move them in certs folder

```bash
./install_certs.sh
```

## Environment

Place on root directory a .env file like

    WORDPRESS_VERSION=5.9
    PHP_VERSION=8.1
    MYSQL_ROOT_PASSWORD=admin
    DB_HOST=db
    DB_PORT=3308
    DB_USER=root
    DB_PASSWORD=password
    DB_NAME=boilerplate
    WORDPRESS_TABLE_PREFIX=wp_
    WP_PORT=8092
    
## Deploy
Run docker-compose

    docker-compose up -d