# API GAME

#### This Api game was built with laravel framework version 8.

## How to install
- Clone this github repo. 
- Edit your **.env** with your database details 
- Run `Composer install` to install the composer dependencies. 
- Run `php artisan db:seed` to insert the dummy data into the database. 
- Run `php artisan serve` to start the application. 

> open [***http:://127.0.0.1:8000/api/games***](http:://127.0.0.1:8000/api/games) in your postman or browser to see all the games

## Api end points
- Get: [**/api/games**](http:://127.0.0.1:8000/api/games)  Returns all the games
- Get: [**/api/games/{day}**](http:://127.0.0.1:8000/api/games/{day})  Returns all the games played per day and their players
- Get: [**/api/games/{from}/{to}**](http:://127.0.0.1:8000/api/games/{from}/{to})  Return all the games played within a date range
- Get: [**/api/players**](http:://127.0.0.1:8000/api/players)  Returns all the Player
- Get: [**/api/players/100**](http:://127.0.0.1:8000/api/players)  Return the top 100 players 
