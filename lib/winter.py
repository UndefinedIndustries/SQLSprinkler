#!/usr/bin/python
import MySQLdb
import time
import RPi.GPIO as GPIO
db = MySQLdb.connect(host="localhost",    # your host, usually localhost
                     user="root",         # your username
                     passwd="root",  # your password
                     db="SQLSprinkler")        # name of the data base

# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()

# Use all the SQL you like
cur.execute("SELECT gpio, Time FROM Systems ")
print "[[INFO]] Winterizing System"
# print all the first cell of all the rows
GPIO.setwarnings(False)
for row in list(cur.fetchall()):
	print ("[[INFO]] RECHARGING")
	time.sleep(300)
	GPIO.setmode(GPIO.BCM)
	print ("[[WARNING]] WINTERIZING: " + str(row[0]))
	time.sleep(10)
        GPIO.setup(int(row[0]), GPIO.OUT)
	print ("[[WARNING]] RELEASING AIR")
	GPIO.output(int(row[0]), False)
	time.sleep(75)
	print ("[[INFO]] DONE")
	GPIO.output(int(row[0]), True)
db.close()
print ("[[INFO]] DONE")
