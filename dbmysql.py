#!/usr/bin/python

import os , sys

time = sys.argv[1]
print time

os.system('mysqldump -u root -p"csrl" EATC > /var/www/html/backups/mysql/'+time+'.sql')