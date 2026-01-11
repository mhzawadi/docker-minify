FROM alpine:3.23
LABEL org.opencontainers.image.authors="Matthew Horwood <matt@horwood.biz>"

# Install required apk packages
RUN apk update && \
	apk add php84 composer \
	&& mkdir -p /var/www/html/ \
	&& mkdir -p /run/nginx \
	&& rm -f /var/cache/apk/*;

WORKDIR /var/www/html
COPY . .

RUN composer require matthiasmullie/minify;

ENTRYPOINT ["/var/www/html/start.sh"]
