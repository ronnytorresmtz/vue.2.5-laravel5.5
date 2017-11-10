# Vue 2.5 Laravel 5.5

## Client Directory
This template was created based on the vue-cli and vue init webpack packages. (git repository: vuejs-templates/webpack)

Additional packages installed Vuex, VueRouter, Cripto-JS.

## Server Directory
This template includes Laravel5.5.

Additional package installed Passport.

<br>
Some Code organization in the Server Side
1. An App/MyCode directroy was created which includes Models, Repository, Routes, Service Directories to organize the code application. Each one has an examples files so the AppServiceProvider was modified with some bindings.

2. The Laravel Routes directory was changed to be redirected to the MyCode/Routes. the api.php file now has some new code to generate the routes based on the App/MyCode/Routes directory.

3. The App/MyCode was added to the Composer.Json file in the section autoload.
