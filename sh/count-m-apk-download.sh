#!/bin/sh
day=`date +%Y-%m-23`;
ipList='192.168.0.239 192.168.0.250 192.168.0.251'
#ipList='192.168.0.239'
dayList='1 2 3 4 5 6 7'
for i in $dayList
do
	for ip in $ipList
	do
	day=`date --date="${i} day ago" +%Y-%m-%d`
	    echo $day
	    echo $ip
	    ssh $ip  grep '.apk'  /www/logs/nginx/m_access_${day}--.log | awk '{print $3 "  "   $6  "  "  $10 }'
	    #echo "ssh $ip  grep 'GET /a/?'  /www/logs/nginx/m_access_${day}--.log"
	    echo '-----------'
	done
done
