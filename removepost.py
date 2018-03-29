#!/usr/bin/env python
import pymongo, sys
import pprint
from pymongo import MongoClient
from bson.objectid import ObjectId

try:
    conn = MongoClient()
except:
    print("Could not connec to Mongo DB")

postid = sys.argv[1]
postid = postid[:24]
print postid

db=conn.EATC

collection = db.posts

db.posts.delete_one({"_id": ObjectId(str(postid))})