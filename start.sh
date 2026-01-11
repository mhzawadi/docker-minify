#!/bin/sh

find . -name *.css |
while read FILE
  echo "minify ${FILE}"
  php /var/www/html/minify.php "${FILE}"
done

find . -name *.js |
while read FILE
  echo "minify ${FILE}"
  php /var/www/html/minify.php "${FILE}"
done
