<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use Carbon\Carbon;

class isClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
            {
                if(Auth::user()->user_type == "Client")
                    {
                        $email = Auth::user()->email;
                        $account_status = Client::where('email',$email)->value('status');
                        $sub_exp_day = Client::where('email',$email)->value('sub_exp_day');
                        $expiryDateString = Carbon::parse($sub_exp_day);
                        $currentDate = Carbon::now();
                        
                        if($account_status == "Ok")
                            {
                                if(!$expiryDateString->isBefore($currentDate))
                                    {
                                        return $next($request);
                                    }
                                else
                                    {
                                        return redirect('/plan_has_expired');
                                    }
                                
                            }
                        else
                            {
                                return redirect('/finish_setting_up_your_profile');
                            }
                        
                    }
                else
                    {
                        return redirect('/login');
                    }
            }
    }
}
