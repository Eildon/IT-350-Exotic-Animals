#!/usr/bin/env python
import pymongo
import sys
import pprint
from pymongo import MongoClient
try:
    conn = MongoClient()
    #print("Connected Successfully")
except:
    print("Could not connect to Mongo DB")


# database
db = conn.EATC

# Created or Switched to collection names
collection = db.posts
x=0
for post in db.posts.find():
    x=x+1

print x
