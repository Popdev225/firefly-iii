<?php

namespace FireflyIII\Http\Middleware;

use Closure;
use FireflyIII\Support\Domain;

class Binder
{
    protected $binders = [];

    public function __construct()
    {
        $this->binders = Domain::getBindables();
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach ($request->route()->parameters() as $key => $value) {
            if (isset($this->binders[$key])) {
                $boundObject = $this->performBinding($key, $value, $request->route());
                $request->route()->setParameter($key, $boundObject);
            }
        }

        return $next($request);

        //return $next($request);
    }

    /**
     * @param $key
     * @param $value
     * @param $route
     *
     * @return mixed
     */
    private function performBinding($key, $value, $route)
    {
        return $this->binders[$key]::routeBinder($value, $route);
    }
}
