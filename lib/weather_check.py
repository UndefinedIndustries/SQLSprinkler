#!/usr/bin/env python
import os
from weather import Weather
weather = Weather()

# Lookup WOEID via http://weather.yahoo
#lookup = weather.lookup(12794121)
file = open('weather_count.dat')
number = file.readline()
WOEID = open('woeid.txt')
data = WOEID.readline()
lookup = weather.lookup(data)
condition = lookup.condition()
text = condition.text()
def doPrint(a):
	os.system("echo "+ str(a+int(number))+" > weather_count.dat")

if text == "Mostly Cloudy":
	doPrint(1)
elif text == "Breezy":
	doPrint(1)
elif text == "Partly Cloudy":
	doPrint(1)
elif text == "Cloudy":
	doPrint(1)
else:
	os.call("echo 0 > weather_count.dat")

