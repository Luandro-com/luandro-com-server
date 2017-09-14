

## Rancher Server

On a clean Ubuntu server run the [rancher-server-install.sh](https://github.com/Luandro-com/luandro-com-server/blob/master/scripts/rancher-server-install.sh) script:

```
wget https://dl.eff.org/certbot-auto
chmod a+x certbot-auto
./certbot-auto
./certbot-auto certonly

vim /etc/nginx.conf

mkdir /srv/rancher_backup

docker run -d -v /srv/rancher_backup:/var/lib/mysql --restart=unless-stopped -p 8080:8080 rancher/server

docker run -d --name=nginx --restart=unless-stopped -p 80:80 -p 443:443 -v /etc/letsencrypt:/etc/letsencrypt -v /etc/nginx.conf:/etc/nginx/conf.d/default.conf --link=rancher-server nginx:1.11

docker run -d --restart=always -e DB_DUMP_FREQ=60 -e DB_DUMP_BEGIN=2330 -e DB_DUMP_TARGET=/db --link my-db-container:db -v /local/file/path:/db deitch/mysql-backup


```

Now just go to the domain you selected and authenticate to start using Rancher.

## Setup Agent

On a clean Ubuntu server run the [agent-setup.sh](luandro-com-server/scripts/agent-setup.sh) script:

`source <(curl -s https://git.io/v51qU)`

## Running applications

## Exports