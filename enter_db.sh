#!/bin/sh

exec sudo docker exec -it forum_v4_mariadb_1 mariadb -p$(cat secrets/db_root_password.txt)
