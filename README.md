# Vue 2.5 Laravel 5.5
This repository contains a boilerplate/template with Vue 2.5 and Laravel 5.5 and other packages to have the start environment to code the client and server with CORS protection. Also includes the laravel passport package to start the implementing API security via Json Web Tokens.
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
4. Setup the cors.php in the app/config directory.
5. Run npm install
6. Run composer update
7. Run npm run dev in the server directory
8. Run php artisan in the client directory


