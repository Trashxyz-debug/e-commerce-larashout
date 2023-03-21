#!/bin/bash


sudo chgrp -R www-data /var/www/html/$1
sudo find /var/www/html/$1 -type d -exec chmod g+rx {} + 
sudo find /var/www/html/$1 -type f -exec chmod g+r {} +
sudo chown -R $USER /var/www/html/$1
sudo find /var/www/html/$1 -type d -exec chmod u+rwx {} + 
sudo find /var/www/html/$1
