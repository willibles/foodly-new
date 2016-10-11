from __future__ import print_function
from foodly import post
import mysql.connector

cnx = mysql.connecter.connect(user='root', password='', host='127.0.0.1', database='foodly')
cursor = cnx.cursor()
add_post = ("INSERT INTO posts "(text,image)" "VALUES(%s,%s)"");
cnx.execute(add_post);








cnx.close=()
