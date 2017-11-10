# Vue 2.5 Laravel 5.5

## Client Directory
This template was created based on the vue-cli and vue init webpack packages. (vuejs-templates/webpack)

Additional packages installed 
- vuex
- vueRouter
- cripto-JS

## Server Directory
This template includes Laravel5.5.

Additional package installed 
- laravel/passport
- barryvdh/laravel-cors
- maatwebsite/excel


>Some directories were added to organize the code
1. An App/MyCode directroy was created which includes Models, Repository, Routes, Service Directories to organize the code application. Each one has an examples files so the AppServiceProvider was modified with some bindings.

2. The Laravel Routes directory was changed to be redirected to the MyCode/Routes. the api.php file now has some new code to generate the routes based on the App/MyCode/Routes directory.

3. The App/MyCode was added to the Composer.Json file in the section autoload.

## Installation instructions
1. Copy the file .env.example to .env
2. Crete a Database
3. Set these variables in the file .env
- DB_DATABASE 
- DB_USERNAME 
- DB_PASSWORD
4. Run npm install
5. Run composer update
6. Run npm run dev in the server directory
7. Run php artisan in the client directory


