#!/bin/sh

# create install dir
mkdir -p /usr/local/nagios/libexec/

# set perms & owner for utils file
chown root.root utils.php
chown nagios.nagios utils.php
chmod 644 utils.php

# copy utils file
cp -p utils.php /usr/local/nagios/libexec/

# set perms & owner for check files
chown root.root check_*
chown nagios.nagios check_*
chmod 755 check_*

# copy check files
cp -p check_* /usr/local/nagios/libexec/

# copy config file(s)
cp -p *.cfg /usr/local/nagios/etc/objects/

# enable config file(s)
cp /usr/local/nagios/etc/nagios.cfg /usr/local/nagios/etc/nagios.cfg.bk
cat /usr/local/nagios/etc/nagios.cfg.bk | awk '{sub(/cfg_file=\/usr\/local\/nagios\/etc\/objects\/commands\.cfg/,"cfg_file=/usr/local/nagios/etc/objects/commands.cfg\ncfg_file=/usr/local/nagios/etc/objects/nagiosplugins-php.cfg");print}' > /usr/local/nagios/etc/nagios.cfg

# required packages
apt-get install php5-cli php-pear php5-dev build-essential
apt-get install libssh2-1 libssh2-1-dev
# not available now, but may be in the future
apt-get install php5-ssh2

# upgrade pear
pear upgrade PEAR

# install ssh2
pecl install ssh2-beta
echo "extension=ssh2.so" >> /etc/php5/cli/php.ini
