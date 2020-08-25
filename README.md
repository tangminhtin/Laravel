# Laravel

## Installing Laravel
composer global require laravel/installer

## Create new project 
laravel new my_project
or
composer create-project --prefer-dist laravel/laravel my_project4

## Local Development Server
php artisan serve

## PHP artisan
php artisan

## Show list of routes
php artisan route:list

## Create controller
php artisan make:controller PostsController
or
php artisan make:controller --resource PostsController

## Migration database (connect)
php artisan migrate

## Create migration (table)
php artisan make:migration create_posts_table --create="posts"
php artisan migrate

## Dropping migration
php artisan migrate:rollback

## Adding columns to existing tables using migrations
php artisan make:migration add_is_admin_column_to_posts_tables --table="posts"
php artisan migrate

## Some more migration commands
php artisan migrate:reset
php artisan migrate:refresh
php artisan migrate:status

## Create model class
php artisan make:model Post
