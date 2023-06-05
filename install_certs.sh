#!/bin/bash

if ! command -v mkcert &> /dev/null
then
	echo "Installing mkcert..."
    curl -JLO "https://dl.filippo.io/mkcert/latest?for=linux/amd64" 
    chmod +x mkcert-v*-linux-amd64
    sudo mv mkcert-v*-linux-amd64 /usr/local/bin/mkcert
    echo "Installed"
fi

mkcert my-site.com && \
mkcert -install && \
mv my-site.com*.pem ./docker/nginx/certs

