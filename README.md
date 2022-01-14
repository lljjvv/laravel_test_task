# Laravel test task
Practical Test for the PHP Laravel 
## _Install app_
To install app

```sh
git clone https://github.com/lljjvv/laravel_test_task.git
composer install
```
Need to crete DB called _laravel_test_task_ !

You can import mysql dump 
```sh
mysql -u username -p database_name < laravel_test_task_dump.sql
```

If you don't use local server run
```sh
php artisan serve
```

## _Fake data_
To update fake data in DB

```sh
php artisan migrate:fresh --seed
```

## _App use_
- Default password for all fake user is **'password'**
  To create own user follow link
  **http://{your-url}/create** , this route go to registration page
- api endpoints are /api/books/{?book}
- You can add your own book row following link **http://{your-url}/add-book**

## _Logs_
Logs are stored in file at **./storage/logs/laravel.log**