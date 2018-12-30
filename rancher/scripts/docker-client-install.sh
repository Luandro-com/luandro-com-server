#!/bin/bash

# Update
apt-get update && apt-get upgrade -y

# read username
# read email


# Install Docker
curl https://releases.rancher.com/install-docker/17.06.sh | sh

# Install Docker Compose
sudo -i
curl -L https://github.com/docker/compose/releases/download/1.16.10/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose
docker-compose --version

sudo usermod -aG docker $(whoami)

if ("$(whoami)") then
    echo
else
    echo
fi

sudo usermod -aG docker $()

sudo service docker start

sudo apt-get update && sudo apt-get upgrade -y

sudo reboot