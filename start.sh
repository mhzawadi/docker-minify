#!/bin/sh

#!/bin/bash
for FILE in $*; do
  if [ $(echo "${FILE}"| grep -e 'min.css$' -e '.js$' | grep -q -v -e '\.min\.';echo $?) -eq 0 ]
  then
    php /var/www/html/minify.php "${FILE}"
  fi
done
