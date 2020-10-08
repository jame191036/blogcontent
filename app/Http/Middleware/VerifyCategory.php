<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;
class VerifyCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Category::all()->count() == 0) {
            session()->flash('error','No category');
            return redirect(route('categories.create'));
        }
        return $next($request);
    }
}
