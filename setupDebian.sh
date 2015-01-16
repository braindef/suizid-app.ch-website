#!/bin/sh

echo rename SERVER!!
exit

apt-get install sudo ejabberd apache2 php5 php5-curl rsync libapache2-mod-php5
dpkg-reconfigure ejabberd

echo www-data ALL=NOPASSWD:/var/www/createUser.sh >> /etc/sudoers

echo bei der ejabber konfig noch allenfalls nur den hostnahmen unter den FQDN setzen

echo Echo die Zeile mod_http_bind einfügen in ejabberd.cfg
echo {modules,
echo  [
echo   {mod_http_bind, []},               <-- diese Zeile einfügen
echo   {mod_adhoc,    []},
echo   {mod_announce, [{access, announce}]}, % requires mod_adhoc
echo   {mod_caps,     []},
echo   {mod_configure,[]}, % requires mod_adhoc
echo   {mod_admin_extra, []},
echo 
echo ssl bei apache einschalten 
echo sudo a2ensite default-ssl 
echo sudo a2enmod ssl sudo service apache2 restart 
echo sudo /etc/init.d/apache2 restart

echo build strophe.js
apt-get install build-essential
cd strophejs
make

echo
echo do not forget to enable bosh in your ejabberd configuration file
echo diff:
echo 559d558
echo <   {mod_http_bind, []},
