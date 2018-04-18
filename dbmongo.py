#!/usr/bin/python

import os , sys

time = sys.argv[1]
print time

os.system('mongodump --db EATC --out /var/www/html/backups/mongo/'+time)