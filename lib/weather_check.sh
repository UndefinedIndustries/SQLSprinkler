#!/bin/bash
echo "checking the weather"
weather=$(python /var/www/html/modules/SQLSprinkler/lib/weather_check.py)
echo "Checked the weather: $weather at $(date)" >> /var/www/html/modules/SQLSprinkler/lib/weather.log
echo "done"
