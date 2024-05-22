<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use App\Models\Payment;
use App\Models\ParkingSpot;
use App\Models\Booking;
use App\Models\Message;



class HomeController extends Controller
  {
      //

      public function index()
        {
          $check = User::count();
          if($check === 0)
              {
                  $data = new User;
                  $data->id = "1";
                  $data->name = "Taurai Pagaja";
                  $data->user_type = "Admin";
                  $data->email = "tauraipagaja@gmail.com";
                  $data->email_verified_at = null;
                  //$table->rememberToken();
                  $data->password = '$2y$10$JV9i/woPebJLuqA3uEfCQ.omuUHE8/nPYB7A0MEgehjvt8VJZaop2';
                  $data->current_team_id = null;
                  $data->profile_photo_path = null;
                  $data->created_at = "2023-04-25 08:41:56";
                  $data->updated_at = "2023-04-25 08:41:56";

                  $data->save();
              }

          if(Auth::id())
              {
                  return redirect('client/home');
              }
          else
              {
                return view ('user.index');
              }
        }

      public function auth_check()
        {
          if(Auth::check())
            {
              if(Auth::user()->user_type == "Admin")
                {
                  return redirect('/admin/dashboard');
                }
              elseif(Auth::user()->user_type == "Gate")
                {
                  return redirect('/gate/dashboard');
                }
              elseif(Auth::user()->user_type == "Client")
                {
                  return redirect('/client/home');
                }
            }
          else
            {
                return redirect('/login');
            }
        }
        
      public function set_up_account_page()
        {
          if(Auth::check())
            {
              $email = Auth::user()->email;
              $client = Client::where('email',$email)->first();
              return view ('user.set_up_account', compact('client'));
            }

          else
            {
                return redirect('/login');
            }
        }

      public function post_set_account(Request $request)
        {
          if(Auth::check())
            {
              $email = Auth::user()->email;
              $data = Client::where('email',$email)->first();
              $data->plan_type = $request->plan_type;
              $client_name = $data->first_name.' '.$data->last_name;

              $plan = $request->plan_type;

              if($plan == 'weekly')
                {
                  $exp_date = Carbon::now()->copy()->addDays(7);
                }
              elseif ($plan == 'monthly')
                {
                  $exp_date = Carbon::now()->copy()->addMonths(1);
                }
              elseif ($plan == 'six months')
                {
                  $exp_date = Carbon::now()->copy()->addMonths(6);
                }
              elseif ($plan == 'annual')
                {
                  $exp_date = Carbon::now()->copy()->addYear();
                }
              else
                {
                  $exp_date = Carbon::now()->copy()->addDays(7);
                }
                
              $data->sub_exp_day = $exp_date;
              $data->status = 'Ok';
              $data->save();

              $data = new Payment;
              $data->user_id = Auth::user()->id;
              $data->name = $client_name."'s new subscription ( ". $plan." )";
              $data->method = $request->payment_option;
              $data->amount = $request->payment_amount;
              $data->trans_id = $request->trans_ID;
              $data->save();

              return redirect('/client/home');
            }

          else
            {
                return redirect('/login');
            }
        }

      public function expired_plan()
        {
          if(Auth::check())
            {
              $email = Auth::user()->email;
              $client = Client::where('email',$email)->first();
              return view ('user.renew_subscription', compact('client'));
            }

          else
            {
                return redirect('/login');
            }
        }

      public function post_renew_sub(Request $request)
        {
          if(Auth::check())
            {
              $email = Auth::user()->email;
              $data = Client::where('email',$email)->first();
              $data->plan_type = $request->plan_type;
              $client_name = $data->first_name.' '.$data->last_name;

              $plan = $request->plan_type;

              if($plan == 'weekly')
                {
                  $exp_date = Carbon::now()->copy()->addDays(7);
                }
              elseif ($plan == 'monthly')
                {
                  $exp_date = Carbon::now()->copy()->addMonths(1);
                }
              elseif ($plan == 'six months')
                {
                  $exp_date = Carbon::now()->copy()->addMonths(6);
                }
              elseif ($plan == 'annual')
                {
                  $exp_date = Carbon::now()->copy()->addYear();
                }
              else
                {
                  $exp_date = Carbon::now()->copy()->addDays(7);
                }
                
              $data->sub_exp_day = $exp_date;
              $data->save();

              $data = new Payment;
              $data->user_id = Auth::user()->id;
              $data->name = $client_name."'s renew subscription ( ". $plan." )";
              $data->method = $request->payment_option;
              $data->amount = $request->payment_amount;
              $data->trans_id = $request->trans_ID;
              $data->save();

              return redirect('/client/home');
            }

          else
            {
                return redirect('/login');
            }
        }

      public function thank_you()
        {
          if(Auth::check())
            {
              return view ('user.thank_you');
            }

          else
            {
                return redirect('/login');
            }
        }


      public function checkAvailability(Request $request)
        {
            $parkingSpotId = $request->input('parking_spot_id');
            $date = $request->input('date');
            $startTime = $request->input('start_time');
            $endTime = $request->input('end_time');
        
            // Query the bookings table to check if the parking spot is available
            $existingBooking = Booking::where('parking_spot_id', $parkingSpotId)
              ->where('date', $date)
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->whereBetween('entry_time', [$startTime, $endTime])
                          ->orWhereBetween('exit_time', [$startTime, $endTime])
                          ->orWhere(function ($query) use ($startTime, $endTime) {
                              $query->where('entry_time', '<', $startTime)
                                    ->where('exit_time', '>', $endTime);
                          });
                })
                ->first();
        
            if ($existingBooking) {
                // The parking spot is already booked for the selected time period
                return response()->json(['available' => false]);
            } else {
                // The parking spot is available for booking
                return response()->json(['available' => true]);
            }
        }

      public function post_message(Request $request)
        {
            $data = new Message;
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->message = $request->message;
            $data->status = "not seen";
            $data->save();
            return redirect()->back()->with('message','you have successfully sent us a message');
        }
  }
