#!/bin/sh

docker image rm mhzawadi/docker-minify:0.0.6 ;
docker build -t mhzawadi/docker-minify:0.0.6 .
