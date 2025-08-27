<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;
class Visitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route('article')) {
            $articleId = $request->route('article')->id;

            Visit::create([
                'article_id' => $articleId,
                'ip_address' => $request->ip(),
            ]);
        }
        return $next($request);
    }
}
