#!/usr/bin/python
import MySQLdb
import time
import RPi.GPIO as GPIO
db = MySQLdb.connect(host="192.168.1.181",    # your host, usually localhost
                     user="root",         # your username
                     passwd="#FiddleFire",  # your password
                     db="SQLSprinkler")        # name of the data base

# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()

# Use all the SQL you like
cur.execute("SELECT gpio, Time FROM Systems ")

# print all the first cell of all the rows
for row in list(cur.fetchall()):
	GPIO.setmode(GPIO.BCM)
	print row[0]
        GPIO.setup(int(row[0]), GPIO.OUT)
	GPIO.output(int(row[0]), False)
	print row[1]*60
	time.sleep(int(row[1])*60)
	GPIO.output(int(row[0]), True)
db.close()
