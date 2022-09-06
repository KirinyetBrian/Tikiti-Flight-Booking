<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/KirinyetBrian/Tikiti-Flight-Booking/blob/main/public/tikitilogo.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="#"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="#"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="#"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="#"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About TIKITI
-Buy all tickets in one place

- Simple to use
- Multiple platforms
- Real-time event flight price updates

Tikiti is accessible, powerful, and makes booking very easy.


## Installing and running Tikiti 
Note: Make sure you have git installed locally on your computer first.
cd into the directory where you want to clone the project

1. Clone GitHub repo for this project locally
 ```
   git clone https://github.com/KirinyetBrian/Tikiti-Flight-Booking.git
   
  ``` 
2. cd into your project


3. Install Composer Dependencies
 
```
 composer install
```
    

4. Create a copy of your .env file
  
```
cp .env.example .env
```

5. Generate an app encryption key
```sh 
php artisan key:generate
```

6. Create an empty database for our application in php my admin


7. In the .env file, add database information to allow Laravel to connect to the database


8. Migrate the database
```
php artisan migrate
```

```

php artisan serve
```

9.You can now access the  app through
  <http://127.0.0.1:8000/>
