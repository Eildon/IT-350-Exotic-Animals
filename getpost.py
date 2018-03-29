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

start = sys.argv[1]
end = sys.argv[2]

# database
db = conn.EATC

# Created or Switched to collection names
collection = db.posts

for post in db.posts.find().limit(int(end)).skip(int(start)):
    print "Name: " + post['name']
    print "Age: "+ post['age']
    print "Amount: " + post['amount']

