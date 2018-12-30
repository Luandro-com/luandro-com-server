#!/bin/sh

echo "Site:"
read THESITE

echo "-------------------------"
echo "Connecting to db"
echo "-------------------------"

THESITE=$THESITE

# https://unix.stackexchange.com/questions/56771/replace-dots-with-underscores-in-filenames-leaving-extension-intact

# for fname in *; do
#   name="${fname%\.*}"
#   extension="${fname#$name}"
#   newname="${name//./_}"
#   newfname="$newname""$extension"
#   if [ "$fname" != "$newfname" ]; then
#     echo mv "$fname" "$newfname"
#     #mv "$fname" "$newfname"
#   fi
# done

cd /var/www/$THESITE

# https://stackoverflow.com/questions/7586995/read-variables-from-wp-config-php
THEDB=`cat wp-config.php | grep DB_NAME | cut -d \' -f 4`
THEDBUSER=`cat wp-config.php | grep DB_USER | cut -d \' -f 4`
THEDBPW=`cat wp-config.php | grep DB_PASSWORD | cut -d \' -f 4`
THEDATE=`date +%d%m%y%H%M`

# THEDB="diariosdemochila_com"
# THEDBUSER="diario1IAla2hF75"
# THEDBPW="DdALC1G0TeFYsZQ"
mkdir -p /var/www/backup/$THESITE
echo "Done"
echo "-------------------------"
echo "Creating DB Dump"
echo "-------------------------"
mysqldump -u $THEDBUSER -p${THEDBPW} --ignore-table=albavieira_com_br.wp_wfNet404s $THEDB > /var/www/backup/$THESITE/db_${THEDB}_${THEDATE}.sql
echo "Done"
echo "-------------------------"
echo "Preparing file backup"
echo "-------------------------"
tar czf /var/www/backup/$THESITE/files_${THESITE}_${THEDATE}.tar -C / var/www/$THESITE/htdocs
echo "Done"
echo "-------------------------"
echo "Compressing files"
echo "-------------------------"
gzip /var/www/backup/files/files_${THESITE}_${THEDATE}.tar
echo "Done"
echo "-------------------------"
echo " Database path => /var/www/backup/files/db_"${THEDB}"_"${THEDATE}".bak.gz"
echo " Websites path => /var/www/backup/files/files_"${THESITE}"_"${THEDATE}".tar"
echo "-------------------------"
echo "Thank you!"
echo "-------------------------"

# rsync -azP root@165.227.110.74:/var/www/backup/$THESITE .

# tar -xvzf sitebackup_diariosdemochila.com_0709172026.tar

# gzip -d dbbackup_diariosdemochila_com_0709172026.bak.gz