#!/usr/bin/env python
import pymongo, sys
import pprint
from pymongo import MongoClient
from bson.objectid import ObjectId

try:
    conn = MongoClient()
except:
    print("Could not connec to Mongo DB")

postid= sys.argv[1]
postid = postid[:24]
name= sys.argv[2]
diet= sys.argv[3]
age= sys.argv[4]
weight= sys.argv[5]
height= sys.argv[6]
amount= sys.argv[7]

db=conn.EATC

collection = db.posts

db.posts.update({"_id":ObjectId(str(postid))},{"$set":{"name":name,"diet":diet,"age":age,"weight":weight,"height":height,"amount":amount}})