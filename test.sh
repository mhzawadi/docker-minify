#!/bin/sh

docker image rm mhzawadi/docker-minify:0.0.9 ;
docker build -t mhzawadi/docker-minify:0.0.9 .
