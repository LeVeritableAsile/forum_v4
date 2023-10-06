#!/bin/sh

exec openssl dhparam -out ssl/dhparam.pem 4096
