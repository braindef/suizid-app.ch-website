#!/bin/sh

apt-get install sudo ejabberd apache2 php5 php5-curl rsync libapache2-mod-php5
dpkg-reconfigure ejabberd

echo www-data ALL=NOPASSWD:/var/www/createUser.sh >> /etc/sudoers

echo bei der ejabber konfig noch allenfalls nur den hostnahmen unter den FQDN setzen
echo ssl bei apache einschalten 
echo sudo a2ensite default-ssl 
echo sudo a2enmod ssl sudo service apache2 restart 
echo sudo /etc/init.d/apache2 restart


