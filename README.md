# Luandro-com Docker Server

## Getting started

On a clean Ubuntu machine install Docker:
```bash
curl -fsSL https://get.docker.com -o get-docker.sh
sh get-docker.sh
```

And also `docker-compose` ([original insctructions](https://docs.docker.com/compose/install/)):
```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

> Note: If the command docker-compose fails after installation, check your path. You can also create a symbolic link to /usr/bin or any other directory in your path.

```bash
sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
```
## Setup the machine

- Create network: `docker network create nginx-proxy`
- [Create swap file](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-ubuntu-14-04) (modify with the swap size you want to create):
```
sudo fallocate -l 4G /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile
``` 
Make sure the swap was create correctly using `sudo swapon -s`.

## Let's start

Clone this repo to the `www` folder: `git clone https://github.com/Luandro-com/luandro-com-server.git /var/www`. Edit the `whoami` service in the [nginx-proxy.yml](https://github.com/Luandro-com/luandro-com-server/blob/master/nginx-proxy.yml) file with your own domain and e-mail.

Now you're finally ready to start the nginx proxy server. Jump to the directory with `cd /var/www` and run `docker-compose -f nginx-proxy.yml up -d`.

## Running a Wordpress site

Use one of the examples to create your own Wordpress:
```
mv albavieira.com.br sitiodoastronauta.com.br
```

Inside the `sitiodoastronauta.com.br` folder `mv .env.example .env` and edit the necessary fields.

If you have a backup of existing Wordpress site move the `wp-content` folder of your old site inside `wp-app` and the sql dump file inside `wp-data`. That will start the project from the backup automatically.

Finally when everything is ready run `docker-compose up -d`. And voila!

Use `docker-compose down` to stop the services.
