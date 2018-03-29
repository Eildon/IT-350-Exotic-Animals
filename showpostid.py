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

userid = sys.argv[1]
start = sys.argv[2]
end = sys.argv[3]

# database
db = conn.EATC

# Created or Switched to collection names
collection = db.posts

for post in db.posts.find({"owner_id":userid}).limit(int(end)).skip(int(start)):
    print post['_id']

