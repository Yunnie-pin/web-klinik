@echo off
cd frontend
start cmd /k "npm run serve"
cd ..
cd server
start cmd /k "php artisan serve"