#!/usr/bin/env python
import os
from weather import Weather
weather = Weather()

# Lookup WOEID via http://weather.yahoo
#lookup = weather.lookup(12794121)
file = open('/var/www/html/modules/SQLSprinkler/lib/weather_count.dat')
number = file.readline()
WOEID = open('/var/www/html/modules/SQLSprinkler/lib/woeid.txt')
data = WOEID.readline()
lookup = weather.lookup(data)
condition = lookup.condition()
text = condition.text()

def doPrint(a):
	print "[[INFO]] Level: "+str(a+int(number))
	os.system("echo "+ str(a+int(number))+" > /var/www/html/modules/SQLSprinkler/lib/weather_count.dat")
	print text

if text == "Mostly Cloudy":
	doPrint(1)
elif text == "Cloudy":
	doPrint(1)
elif "Showers" in text:
	doPrint(3)
elif "Rain" in text:
	doPrint(5)
elif "Thunder" in text:
	doPrint(7)
else:
	doPrint(0)
