<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.creads.com/wp-content/uploads/2021/05/header-2-10.png" width="400"></a></p>

<p align="center">
<a href="#"><img src="https://img.shields.io/badge/Contributors-1-green?style=plastic&logo=github" alt="Contributors"></a>
<a href="#"><img src="https://img.shields.io/badge/Version-0.0.1-green?style=plastic" alt="Version"></a>
<a href="#"><img src="https://img.shields.io/badge/Deploy-No-red?style=plastic" alt="Deploy"></a>
<a href="#"><img src="https://img.shields.io/badge/Branches-2-white?style=plastic" alt="Branches"></a>
</p>

## About

Health control management API for McDonald's France:

## Installation

-   **clone the repo: `git clone https://github.com/dantin-durand/mcd-control-api.git`**
-   **install dependencies: `composer install`**
-   **config `.env` file**
-   **start migrations: `php artisan migrate`**

## API

-   [GET] /api/auth/login
-   ...

## ERRORS CODE

This is the possibility of errors for the different API requests

#### CATEGORIES

-   `CATEGORIE_SHOW_NOT_FOUND` -> Categorie not found on route `[GET] /categories/{id}`
-   `CATEGORIE_UPDATE_NOT_FOUND` -> Categorie not found on route `[PUT] /categories/{id}`
-   `CATEGORIE_DELETE_NOT_FOUND` -> Categorie not found on route `[DELETE] /categories/{id}`

#### TASKS

-   `TASKS_BY_CATEGORIE_SHOW_NOT_FOUND` -> Tasks by Categorie ID not found on route `[GET] /categories/{id}/tasks`
-   `TASKS_SHOW_NOT_FOUND` -> Task not found on route `[GET] /tasks/{id}`
-   `TASKS_UPDATE_NOT_FOUND` -> Task not found on route `[DELETE] /tasks/{id}`
-   `TASKS_DELETE_NOT_FOUND` -> Task not found on route `[DELETE] /tasks/{id}`

<!-- ## Assets

-   **[Model](https://trello.com/1/cards/61636fe3425f3c38d37b04a8/attachments/6163702f7ad7ce0ec1e9ee58/download/MACDO.xd)** -->

## Production

...
