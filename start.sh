#!/bin/sh

find . -type f \( -name '*.css' -or -name '*.js' \) |
grep -v -e '\.min\.' |
while read FILE
do
  php /var/www/html/minify.php "${FILE}"
done
