#!/usr/bin/env bash

php app/console doctrine:schema:drop --force
php app/console doctrine:schema:update --force
#php app/console d:f:l -n
php app/console c:c
