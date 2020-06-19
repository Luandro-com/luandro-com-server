#!/bin/bash

echo "Make sure you have added the web portal to the html folder"
echo "Cloning server"
git clone https://github.com/MoinhoDigital/tile-server.git
echo "Lauching docker-compose"
docker-compose up -d