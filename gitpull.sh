#!/bin/bash
git pull && php8.1 /usr/local/bin/composer install && npm install && npm run build && php8.1 artisan migrate && chown web1254:client564 ./ -R
