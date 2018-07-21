#!/bin/bash
workdir=/var/www/html/modules/SQLSprinkler/lib
echo 'running the sprinkler script...'
while [ true ]; do
timeon=$(mysql -h localhost -u root -proot -s -N -e 'SELECT `On` FROM SQLSprinkler.Timing')
#timeon="2300"
systime=$(date +%H%M)
#systime="2300"
runsys=$(cat $workdir/sys.dat)
weatherdat=$(cat $workdir/weather_count.dat)
weathernorun=false
#change that dir ^ to needed.
if [ $weatherdat -gt 18 ]; then
	weathernorun=true
fi

if [ $systime == "0005" ]; then
	echo 0 > /var/www/html/modules/SQLSprinkler/lib/weather_count.dat
fi
echo $systime
if [ $systime -ge "$timeon" ] && [ $systime -le "$timeon" ]; then
echo $timeon
    if [ $weathernorun == false ]; then
          if [ $runsys == "1" ]; then
	    echo "[[INFO]]"
	    i=$(date +%u)
	    sysaday=$(cat "$workdir/../data/aday$(date +%u).dat")
	    sysbday=$(cat "$workdir/../data/bday$(date +%u).dat")
	  if [ $sysaday == "1" ] && [ $sysbday == "1" ]; then
            python $workdir/sys.py
	    echo "it is both an a and a b day for day $i"
	  fi
	  if [ $sysaday == "1" ] && [ $sysbday == "0" ]; then
            echo "It is an aday for day $i."
	    python $workdir/sysa.py
	  fi
	  if [ $sysaday == "0" ] && [ $sysbday == "1" ]; then
	    echo "It is a bday for day $i."
	    python $workdir/sysb.py
  	  fi
    	 else
	   echo "runner not enabled."
   	 fi
  fi
  else
     echo "Not time yet :("
  fi
sleep 60
done
