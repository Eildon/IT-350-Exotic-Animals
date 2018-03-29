#!/usr/bin/env python

import pymongo
import sys
from pymongo import MongoClient
try:
    conn = MongoClient()
    print("Connected Successfully")
except:
    print("Could not connect to Mongo DB")
userid = sys.argv[1]
name = sys.argv[2]
diet = sys.argv[3]
age = sys.argv[4]
weight = sys.argv[5]
height = sys.argv[6]
amount = sys.argv[7]

# database
db = conn.EATC

# Created or Switched to collection names
collection = db.posts

rec_hol = {"name": name,"diet":diet,"age":age,"weight":weight,"height":height,"amount":amount,"owner_id":userid}
rec_id = collection.insert(rec_hol)
print("Data inserted with record")
