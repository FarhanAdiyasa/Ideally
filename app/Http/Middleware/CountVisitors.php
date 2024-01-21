<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CountVisitors
{
    public function handle($request, Closure $next)
    {
        $slug = $request->route('slug'); // Mengambil nilai dari parameter rute 'slug'
    
        if (!session()->has('article_visited_' . $slug)) {
            Cache::increment('article_' . $slug . '_visitors');
            session(['article_visited_' . $slug => true]);
        }
    
        return $next($request);
    }
    
}
