#!/usr/bin/env bash -e

SHELL='sh'
if [ $# -gt 0 ]; then
  SHELL=$1
fi
containers=(`docker ps --format "{{.Names}}"`)
len=${#containers[@]}
echo "Please enter container number."
for (( i = 0; i < $len; ++i )); do
  echo $i ${containers[$i]}
done
while read -p "" num ; do
  expr "$num" + 1 >/dev/null 2>&1
  if [ $? -ge 2 ]; then
    echo "Please enter only numeric characters."
    exit
  fi
  if [ $num -lt 0 -o $num -ge $len ]; then
    echo 'Please enter valid number.'
    exit
  fi
  docker exec -it ${containers[$num]} $SHELL
  exit
done
