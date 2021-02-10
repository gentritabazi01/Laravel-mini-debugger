### Introduction
**Laravel mini logger** offers you to debug:
* HTTP request method name.
* How many queries are executed.
* Executed Queries.
* Execution time (for complete response, also for every query).

### Screenshot
This is what will appear in a log file:
![ScreenShot](https://i.imgur.com/XFGcLHH.png)

### Installation Laravel
* composer require gentritabazi01/laravel-mini-debugger
* Open **Kernel.php** file and in variable **protected $middleware** add class **\Gentritabazi01\MiniDebugger\Http\Middleware\MiniDebugger::class**.

### Installation Lumen
* composer require gentritabazi01/laravel-mini-debugger
* Open **bootstrap/app.php** file and in **$app->middleware([** add class **\Gentritabazi01\MiniDebugger\Http\Middleware\MiniDebugger::class**.
* Open **bootstrap/app.php** file and Register Service Provider **$app->register(Gentritabazi01\MiniDebugger\Providers\MiniDebuggerProvider::class);**.

### Configuration
You can configure package in **config/mini-debugger.php** by using **php artisan vendor:publish**.

### Author
* Name: **Gentrit Abazi**
* Email: **gentritabazi01@gmail.com**
