#!/usr/bin/env bash -e

SCRIPT_DIR=$(cd $(dirname $0); pwd)
cd $SCRIPT_DIR
if [ -e "src" ]; then
    echo 'Directory "src" already exists.'
    exit
fi
mkdir src
cd laradock
cp env-example .env
docker-compose down
docker-compose up -d
docker-compose exec php-worker composer create-project --prefer-dist "laravel/laravel=5.7.*" ./
docker-compose exec php-worker composer install
cp env-example-laravel ../src/.env
docker-compose exec php-worker php artisan key:generate
