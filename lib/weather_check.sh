#!/bin/bash
while [ true ]; do
python3 /var/www/html/modules/SQLSprinkler/lib/weather_check.py

sleep 600
done
