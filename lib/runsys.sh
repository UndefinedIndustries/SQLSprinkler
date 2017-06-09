#!/bin/bash
workdir=/var/www/html/modules/SQLSprinkler/lib
echo 'running the sprinkler script...'
while [ true ]; do
systime=$(date +%H%M)
runsys=$(cat $workdir/sys.dat)
#change that dir ^ to needed.
if [ $runsys == "1" ]; then
echo "[[INFO]]"
  if [ $systime == "2220" ]; then
    for i in {1..7}; do
	sysaday=$(cat "$workdir/../data/aday$i.dat")
	sysbday=$(cat "$workdir/../data/bday$i.dat")
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
    done
  else
   echo "Not time yet :("
  fi
fi

sleep 60
done
