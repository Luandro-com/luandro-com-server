#!/bin/sh

echo "Site:"
read THESITE

echo "-------------------------"
echo "Connecting to db"
echo "-------------------------"

# https://stackoverflow.com/questions/7586995/read-variables-from-wp-config-php
WPDBNAME=`cat wp-config.php | grep DB_NAME | cut -d \' -f 4`
WPDBUSER=`cat wp-config.php | grep DB_USER | cut -d \' -f 4`
WPDBPASS=`cat wp-config.php | grep DB_PASSWORD | cut -d \' -f 4`

THESITE=$THESITE

# https://unix.stackexchange.com/questions/56771/replace-dots-with-underscores-in-filenames-leaving-extension-intact

for fname in *; do
  name="${fname%\.*}"
  extension="${fname#$name}"
  newname="${name//./_}"
  newfname="$newname""$extension"
  if [ "$fname" != "$newfname" ]; then
    echo mv "$fname" "$newfname"
    #mv "$fname" "$newfname"
  fi
done

THEDB="diariosdemochila_com"
THEDBUSER="diario1IAla2hF75"
THEDBPW="DdALC1G0TeFYsZQ"
THEDATE=`date +%d%m%y%H%M`
echo "Done"
echo "-------------------------"
echo "Creating DB Dump"
echo "-------------------------"
mysqldump -u $THEDBUSER -p${THEDBPW} $THEDB | gzip > /var/www/$THESITE/backup/dbbackup_${THEDB}_${THEDATE}.bak.gz
echo "Done"
echo "-------------------------"
echo "Preparing file backup"
echo "-------------------------"
tar czf /var/www/$THESITE/backup/sitebackup_${THESITE}_${THEDATE}.tar -C / var/www/$THESITE/htdocs
echo "Done"
echo "-------------------------"
echo "Compressing files"
echo "-------------------------"
gzip /var/www/$THESITE/backups/files/sitebackup_${THESITE}_${THEDATE}.tar
echo "Done"
echo "-------------------------"
echo " Database path => /var/www/"$THESITE"/backups/files/dbbackup_"${THEDB}"_"${THEDATE}".bak.gz"
echo " Websites path => /var/www/"$THESITE"/backups/files/sitebackup_"${THESITE}"_"${THEDATE}".tar"
echo "-------------------------"
echo "Thank you!"
echo "-------------------------"

rsync -azP admin@diariosdemochila.com:../../var/www/diariosdemochila.com/backup .

tar -xvzf sitebackup_diariosdemochila.com_0709172026.tar

gzip -d dbbackup_diariosdemochila_com_0709172026.bak.gz