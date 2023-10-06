#!/bin/sh

exec openssl req \
  -x509 \
  -nodes \
  -days 3650 \
  -newkey rsa:4096 \
  -keyout ssl/dev.lesitedecuisine.key \
  -out ssl/dev.lesitedecuisine.crt \
  -subj "/C=FR/ST=Ile de France/L=Paris/O=Asile/CN=dev.lesitedecuisine.fr"
