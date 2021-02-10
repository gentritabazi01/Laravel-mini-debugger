### Introduction
**Laravel mini logger** offers you to log/debug:
* HTTP request method name.
* How many queries are executed.
* Executed Queries.
* Execution time (for complete response, also for every query).

### Screenshot
This is what will appear in a log file:
![ScreenShot](https://i.imgur.com/XFGcLHH.png)

### Installation
* composer require gentritabazi01/laravel-mini-logger.
* Register Middleware MiniLogger (GentritAbazi\MiniLogger\Middlewares\MiniLogger) in **Kernel.php** file.

### Configuration
You can configure package in **config/mini-logger.php** by using **php artisan vendor:publish**.

### Author
* Name: **Gentrit Abazi**
* Email: **gentritabazi01@gmail.com**
