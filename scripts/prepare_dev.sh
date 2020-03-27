#!/usr/bin/env bash

# TODO check if the directory contains a composer.json file
echo "IMPORTANT! Script must be run from the root of the project"

mkdir -p resources_extra
echo "[!] Don't forget to mark the resources_extra directory as excluded in your IDE."

./scripts/install_dependencies.sh

composer install

