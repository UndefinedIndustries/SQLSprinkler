#!/usr/bin/python
import MySQLdb
import time
import RPi.GPIO as GPIO
db = MySQLdb.connect(host="localhost",    # your host, usually localhost
                     user="root",         # your username
                     passwd="#FiddleFire",  # your password
                     db="SQLSprinkler")        # name of the data base
days = [1,2,3,4,5,6,7]
# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()

# Use all the SQL you like
cur.execute("SELECT gpio, Time, Days, Number FROM Systems ")
print '======='
print '== A =='
print '======='
f=open('sys.dat', 'r')
print f.read()
# print all the first cell of all the rows
for row in list(cur.fetchall()):
	if ((row[2]==1 or row[2]==3) and (f.read()==1)):
		GPIO.setmode(GPIO.BCM)
		print("System %s "% row[3])
	        GPIO.setup(int(row[0]), GPIO.OUT)
	 	GPIO.output(int(row[0]), False)
	 	time.sleep(int(row[1])*60)
	 	GPIO.output(int(row[0]), True)
	else:
		db.close()
		exit(0)
db.close()
