#!/bin/bash
workdir=/var/www/html/modules/SQLSprinkler/lib
echo 'running the sprinkler script...'
while [ true ]; do
systime=$(date +%H%M)
runsys=$(cat $workdir/sys.dat)
weatherdat=$(cat $workdir/weather_count.dat)
#change that dir ^ to needed.
if [ $weatherdat -gt 13 ]; then
	weathernorun=true
fi


if [ $systime == "2240" ]; then
    if [ $weathernorun ]; then
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
  else
	echo "the weather said nah"
	echo  0 > $workdir/weather_count.dat
  fi
  else
     echo "Not time yet :("
  fi
sleep 60
done
