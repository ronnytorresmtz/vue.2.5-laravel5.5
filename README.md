# Vue 2.5 Laravel 5.4
This repository contains a boilerplate/template with Vue 2.5 and Laravel 5.4 and other packages to have the start environment to code the client and server with CORS protection. Also includes the laravel passport package to start the implementing API security via Json Web Tokens.
## Client Directory
This template was created based on the vue-cli and vue init webpack packages. (vuejs-templates/webpack)

Additional packages installed 
- vuex
- vueRouter
- cripto-JS

## Server Directory
This template includes Laravel 5.4.

Additional package installed 
- laravel/passport
- barryvdh/laravel-cors
- maatwebsite/excel


>Some directories were added to organize the code
1. An App/MyCode directroy was created which includes Models, Repository, Routes, Service Directories to organize the code application. Each one has an examples files so the AppServiceProvider was modified with some bindings.

2. The Laravel Routes directory was changed to be redirected to the MyCode/Routes. the api.php file now has some new code to generate the routes based on the App/MyCode/Routes directory.

3. The App/MyCode was added to the Composer.Json file in the section autoload.

## Start
1. Clone this repository to a local directory
2. Copy the file .env.example to .env
3. Crete a Database in MySQL
4. Set these variables in the file .env
- DB_DATABASE 
- DB_USERNAME 
- DB_PASSWORD
5. Setup the cors.php in the app/config directory.
6. Run npm install
7. Run composer update
8. Run npm run dev in the server directory
9. Run php artisan serve in the client directory
10. Open the browser an type: http://localhost:8080/
11. A Vue Welcome Page should be displayed.

Note: The laravel passport package is installed but it is not implemented.


