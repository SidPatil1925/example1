<?php

// app/Http/Middleware/IpRateLimitMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;

class RateLimitMiddleware
{
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle(Request $request, Closure $next, $maxAttempts = 60, $decayMinutes = 1)
    {
        $key = sha1($request->ip());

        if ($this->limiter->tooManyAttempts($key, $maxAttempts, $decayMinutes)) {
            session(['prompt' => true]); // Set a session variable
            return response()->view('prompt', [], 429); // 429 Too Many Requests status code
        }

        $this->limiter->hit($key, $decayMinutes * 60);

        return $next($request);
    }
}
