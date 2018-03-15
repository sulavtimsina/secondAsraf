<?php

namespace App\Http\Middleware;

use Closure;
use Astate\Shield\Shield;

class Authenticate
{
    /**
     * The Shield instance.
     *
     * @var \Astate\Shield\Shield
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  \Astate\Shield\Shield  $auth
     * @return void
     */
    public function __construct(Shield $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                app('alerts')->error(trans('message.not_logged_in'));

                return redirect()->guest(route('user.login'));
            }
        }

        return $next($request);
    }
}
