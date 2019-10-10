<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## To Use
<p>
enter your project directory then<br>
install composer on your project<br><br><br>


php artisan key:generate<br>
php artisan cache:clear<br>
php artisan config:clear<br>
<br><br>
rename .env.example to .env<br>

FOR MAC OSX USING MAMP SERVER<br>

config .env to  <br>
    DB_CONNECTION=mysql<br>
    DB_HOST=127.0.0.1<br>
    DB_PORT=3306<br>
    DB_DATABASE=hrapp<br>
    DB_USERNAME=root<br>
    DB_PASSWORD=root<br>
    DB_ENGINE=InnoDB<br>
    DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock<br>

FOR WINDOWS USING XAMMP SERVER<br>    

config .env to  <br>

      DB_CONNECTION=mysql<br>
      DB_HOST=127.0.0.1<br>
      DB_PORT=3306<br>
      DB_DATABASE=hrapp<br>
      DB_USERNAME=root<br>
      DB_PASSWORD=root<br>
      DB_ENGINE=InnoDB<br>
      DB_SOCKET=C:/xampp/mysql/bin/my.ini<br>

config the user ROLE if admin ROLE change to usesr tables admin 0 to 1
    </p>
