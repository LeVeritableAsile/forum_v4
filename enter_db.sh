#!/bin/sh

exec sudo docker compose exec -it mariadb mariadb -p$(cat secrets/db_root_password.txt)
