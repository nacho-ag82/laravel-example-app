<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\FirstMiddleware;
use App\Http\Middleware\SecondMiddleware;
use App\Http\Middleware\IsAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
          $middleware->alias([
            'first' => FirstMiddleware::class,
            'second' => SecondMiddleware::class,
          ]);
          $middleware->alias([
            'isAdmin'=> IsAdmin::class,
          ]);
          
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
