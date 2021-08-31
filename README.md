
## About PostsApi

Simple api to get the ('title','body') from postes table .routes show all data ,one post selected with id,group of 10 postes and add a new post . all routes protected with passport laravel package.

## Installation
- composer
- laravel/ui
- laravel/passport
- postman


Install And Configure Laravel Passport
Laravel Passport provides a full 0Auth2 server implementation for Laravel applications. With it, you can easily generate a personal access token to uniquely identify a currently authenticated user. This token will then be attached to every request allowing each user access protected routes. To begin, stop the application from running by hitting CTRL + C on your computer’s keyboard and install Laravel Passport using Composer as shown here:

``` $ composer require laravel/passport ```

Once the installation is complete, a new migration file containing the tables needed to store clients and access tokens will have been generated for your application. Run the following command to migrate your database:

``` $ php artisan migrate ```
Next, to create the encryption keys needed to generate secured access tokens, run the command below:

``` $ php artisan passport:install ```


