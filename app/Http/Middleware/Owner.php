<?php

namespace App\Http\Middleware;

use App\Kid;
use App\Homework;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Owner
{

    public  function __construct(Guard $auth)

    {
        $this->auth =$auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard ='admins')
    {
     $admins =Auth::guard($guard)->getUser()->id;

        $kids = Kid::find($request->route()->parameters('id'));
        $homeworks = Homework::find($request->route()->parameters('id'));

        foreach ($kids as $kid) {

            foreach ($kid->admins as $admin) {
                if ($admin->id == $admins) {

                }else{
                    return redirect('admin/enfant')->with('erreur',"Vous n'avez pas la permission de faire cette action");
                }
            }
        }
        foreach($homeworks as $homework)
        {

            if ($homework->admin->id == $admins) {

            }else{
                return redirect('admin/enfant')->with('erreur',"Vous n'avez pas la permission de faire cette action");
            }
        }
        return $next($request);
    }
}
