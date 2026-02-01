#!/bin/sh

#!/bin/bash
for FILE in $*; do
  if [ $(echo "${FILE}"| grep -e '.css$' -e '.js$' | grep -q -v -e '\.min\.';echo $?) -eq 0 ]
  then
    echo "Run minify for $FILE"
    php /var/www/html/minify.php "${FILE}"
  fi
done
