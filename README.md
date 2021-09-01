
# <p align="center"> PostsApi </p>

# Introduction
<hr>
    - Githup link : <a href="https://github.com/shassa/PostsApi">PostApi</a> <br>
    - Item Version : v 1.0 <br>
    - Author : Nashwa Hassan <br>
   
<hr>

## Abilities
<p>Simple api to get the ('title','body') from postes table .<br>Routes show all data ,one post selected with id,group of 10 postes and add a new post .<br> All routes protected with passport laravel package.</p>

## Main Components
 - ### laravel\passport
     Get & Authorize Token
 - ### Laravel Factories & seed
    Create random Posts
 - ### Resources
    Return Json Request   
    
## Methods 
- Index() : Posts
  <p> Show all posts </p>
- Show() : Post
  <p> Show specific posts </p> 
- Showgroub(): Posts  
   <p> Paginate 10 posts </p>
- Store() : Post
   <p> Add new post to database </p>


## Install And Configure Laravel Passport
- Laravel Passport provides a full 0Auth2 server implementation for Laravel applications. With it, you can easily generate a personal access token to uniquely identify a currently authenticated user.

- ``` $ composer require laravel/passport ```

- Once the installation is complete, a new migration file containing the tables needed to store clients and access tokens will have been generated for your application. Run the following command to migrate your database:

- ``` $ php artisan migrate ```
- Next, to create the encryption keys needed to generate secured access tokens, run the command below:

- ``` $ php artisan passport:install ```

