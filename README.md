Laravel 10   Ecommerce Task


Installation Backend , frontend Part in a Local


1- Composer Install
2- env file setup by a .env.example file to copy 
3- npm install
4- npm run dev command run
5- php artisan migrate command run
6- php artisan db:seed

Admin User Login Id Password 

ID: admin@admin.com
Password: 1234567890

API
composer require laravel/passport
php artisan migrate
php artisan passport:install


http://localhost:8000/api/login --> Post
Body--> form-data
email:sharmasourav3201@gmail.com
password:123456789


http://127.0.0.1:8000/api/register -->Post
Body--> form-data
name:sourabh kumar
email:sharmasourav3201@gmail.com
password:123456789
c_password:123456789


http://127.0.0.1:8000/api/products -->get


http://127.0.0.1:8000/api/products/store ---Post
Body--> form-data

name:testdata 1
detail:test data product detail
price:1000
offer_price:123