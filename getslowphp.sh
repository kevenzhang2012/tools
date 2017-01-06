#!/bin/bash
# cat cms/access_$1.log | awk '{print $4 " " $7" " $NF}' | awk -F '"' '{print $1 $2}' |  sort -nr -k 3 -t' '  | head -30
#./getslowphp.sh 2022
if [ "$1" = "" ];then
FILE=""
else
DATE=$(date +%Y%m)
echo $DATE
FILE="_""$DATE""$1"
fi
if [ "$2" = "" ];then
NUM=30
else
NUM=$2
fi

echo cms/access$FILE.log
cat access$FILE.log | awk '{print $7 " " $4" " $NF}' | awk -F '"' '{print $1 $2}' |  sort -nr -k 3 -t' ' | head -$NUM |  sort -n -k 3 -t' '

##v2
#!/bin/bash
# cat /access_$1.log | awk '{print $4 " " $7" " $NF}' | awk -F '"' '{print $1 $2}' |  sort -nr -k 3 -t' '  | head -30
echo $#
if [ $# -eq 1 ];then
    FILE=""
	NUM=$1
else
	if [ "$1" = "" ];then
    FILE=""
    else
    DATE=$(date +%Y%m)
    echo $DATE
    FILE="_""$DATE""$1"
    fi
    if [ "$2" = "" ];then
    NUM=30
    else
    NUM=$2
    fi
fi

echo /access$FILE.log
cat /access$FILE.log | awk '{print $7 " " $4" " $NF}' | awk -F '"' '{print $1 $2}' |  sort -nr -k 3 -t' '  | head -$NUM
