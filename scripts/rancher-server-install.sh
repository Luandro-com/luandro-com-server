#!/bin/bash

# Update
apt-get update && apt-get upgrade -y && apt-get install git -y

echo "Please type DOMAIN:"
read DOMAIN
echo "Please type EMAIL:"
read EMAIL
echo "Thanks, we'll start Installing"

# Install Docker
curl https://releases.rancher.com/install-docker/17.06.sh | sh

# Install Docker Compose
sudo -i
curl -L https://github.com/docker/compose/releases/download/1.16.10/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose
docker-compose --version

sudo usermod -aG docker $(whoami)

# if ("$(whoami)") then
#     echo
# else
#     echo
# fi

# sudo usermod -aG docker $()

sudo service docker start

git clone https://github.com/Luandro-com/luandro-com-server.git /srv/server

cd /srv/server

docker-compose -f docker-compose/rancher-server-compose.yml up -d \
    -e http_proxy:$DOMAIN \
    -e https_proxy:$DOMAIN \
    -e VIRTUAL_HOST:$DOMAIN \
    -e LETSENCRYPT_HOST:$DOMAIN \
    -e LETSENCRYPT_EMAIL: $EMAIL

sudo reboot