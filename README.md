# Laravel/Vue App

> Laravel 7.12 API that uses the API resources with a Vue.js frontend

## Quick Start

``` bash
# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Import Posts
php artisan db:seed

# If you get an error about an encryption key
php artisan key:generate

# Install JS Dependencies
npm install

# Watch Files
npm run watch
```

## Endpoints

### List all posts with links and meta
``` bash
GET api/posts
```
### Get single post
``` bash
GET api/post/{id}
```

### Delete post
``` bash
DELETE api/post/{id}
```

### Add post
``` bash
POST api/post
title/body
```

### Update post
``` bash
PUT api/post
post_id/title/body
```
