# tags-tdd
## Description

This project embodies a straightforward tags management app, crafted with the intention to showcase and learn the Test-Driven Development methodology. Its functionality serves as an illustration of the slugs employed when identifying a resource through the URL. 

Stack:

* PHP (7.3) + Laravel (8)
* HTML + CSS (TailwindCSS Framework)

## Tests

These are the implemented tests

    Unit/Models/TagTest.php
    Feature/HomeTest.php
    Feature/Http/Controllers/TagControllerTest.php

## Installation

Clone the repository

    git clone https://github.com/2Fac3R/tags-tdd.git

Switch to the repo folder

    cd tags-tdd

Install all the dependencies using composer

    composer install

Rename ".env.example" to ".env" and add your database settings.
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<your-database>
    DB_USERNAME=<your-username>
    DB_PASSWORD=<your-password>

Run migrations

    php artisan migrate

Run seeder, this will create 10 users and 30 tags

    php artisan db:seed

Start the local development server

    php artisan serve

Run tests

    php artisan test

## Usage
    
Tags Manager

    http://127.0.0.1:8000

Here you can see a list of tags, you can add or delete a tag.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Any feedback is appreciated.
