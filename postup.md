php artisan make:migration create_posts_table --create=posts

php artisan make:seeder PostsTableSeeder

php artisan make:factory PostFactory

php artisan make:model Post

php artisan migrate

php artisan db:seed

------------------------------------------

php artisan make:controller PostController --resource

php artisan make:resource Post


## VUE
composer require laravel/ui

php artisan ui vue --auth

npm install && npm run dev