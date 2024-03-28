Laravel 10   Ecommerce Task
<br>
<br>
Installation Backend , frontend Part in a Local
<br><br>

1- Composer Install <br>
2- env file setup by a .env.example file to copy  <br>
3- npm install <br>
4- npm run dev command run <br>
5- php artisan migrate command run <br>
6- php artisan db:seed <br>
<br>
Admin User Login Id Password 
<br>
<br>
ID: admin@admin.com
Password: 1234567890
<br>
<br>
<br>
API <br>
composer require laravel/passport <br>
php artisan migrate <br>
php artisan passport:install <br>

<br>
<br>
<br>
http://localhost:8000/api/login --> Post <br>
Body--> form-data <br>
email:sharmasourav3201@gmail.com <br>
password:123456789 <br>
<br>
<br>
<br>

http://127.0.0.1:8000/api/register -->Post <br>
Body--> form-data <br>
name:sourabh kumar <br>
email:sharmasourav3201@gmail.com <br>
password:123456789 <br>
c_password:123456789 <br>
<br>
<br>
<br>

http://127.0.0.1:8000/api/products -->get

<br>
<br>
<br>
http://127.0.0.1:8000/api/products/store ---Post <br>
Body--> form-data <br>

name:testdata 1 <br>
detail:test data product detail <br>
price:1000 <br>
offer_price:123
