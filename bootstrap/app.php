<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        $middleware->alias([
            'admin.auth' => \App\Http\Middleware\AdminAuth::class,  // Đăng ký alias middleware AdminAuth
        ]);
=======
        //
>>>>>>> be7e2c3dc675813ffc34190bf603c9a64669482f
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
