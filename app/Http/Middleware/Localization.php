<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->locale ?? cache()->get('locale');
        if (cache()->get('locale') != $locale) {
            cache()->put('locale', $request->locale ?? 'ar');
        }

        App::setLocale(cache()->get('locale'));

        return $next($request);
    }
}
