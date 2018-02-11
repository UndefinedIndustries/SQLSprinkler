#!/bin/bash
while [ true ]; do
echo "checking the weather"
echo "Checked the weather: $(python /var/www/html/modules/SQLSprinkler/lib/weather_check.py)" 
echo "Checked the weather: $(python /var/www/html/modules/SQLSprinkler/lib/weather_check.py)" >> /var/www/html/modules/SQLSprinkler/lib/weather.log
echo "done"
sleep 600
done
