#!/bin/bash
while [ true ]; do
echo "checking the weather"
echo "Checked the weather: $(python /var/www/html/modules/SQLSprinkler/lib/weather_check.py) at $(date)" 
echo "Checked the weather: $(python /var/www/html/modules/SQLSprinkler/lib/weather_check.py) at $(date)" >> /var/www/html/modules/SQLSprinkler/lib/weather.log
echo "done"
sleep 3600
done
