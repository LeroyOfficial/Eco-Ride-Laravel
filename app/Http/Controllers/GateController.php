<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Car;
use App\Models\Client;
use App\Models\ParkingSpot;
use App\Models\Booking;
use App\Models\Employee;
use App\Models\Payment;
use App\Models\Message;
use Dompdf\Dompdf;

class GateController extends Controller
    {
        //

        public function index()
            {
               $available_park_space = ParkingSpot::where('status','available')->count();
               $occupied_park_space = ParkingSpot::where('status','occupied')->count();
               $parking_spots = ParkingSpot::all();
               $book = Booking::all();
               
               return view('gate.home',compact('available_park_space','occupied_park_space','parking_spots','book'));
            }

        public function parking_space()
            {
                $available_park_space = ParkingSpot::where('status','available')->count();
                $occupied_park_space = ParkingSpot::where('status','occupied')->count();
                $parking_spots = ParkingSpot::all();
                $book = Booking::all();
               
                return view('gate.home',compact('available_park_space','occupied_park_space','parking_spots','book'));
            }

        public function bookings()
            {
                $car = Car::all();
                $bookings = Booking::all();

                return view('gate.park_bookings',compact('car','bookings'));
            }

        public function booking($id)
            {
                $booking = Booking::find($id);
                $car = Car::where('id',$booking->vehicle_id)->first();
                $user = User::where('id',$booking->user_id)->first();
                $client = Client::where('email',$user->email)->first();
                return view('gate.manage_book',compact('booking','car','client'));
            }

        public function car_is_entering($id)
            {
                $book = Booking::find($id);
                $book->entry_time = Carbon::now();
                $book->status = 'active';

                $park = ParkingSpot::where('id',$book->parking_spot_id)->first();
                $park->status = 'occupied';
                $park->save();
                $book->save();

                return redirect()->back();
            }

        public function car_is_exiting($id)
            {
                $book = Booking::find($id);
                $book->exit_time = Carbon::now();
                $park = ParkingSpot::where('id',$book->parking_spot_id)->first();
                $park->status = 'available';
                $book->status = 'done';
                $park->save();
                $book->save();
                return redirect()->back();
            }

        public function car_park_map()
            {
                $parking_spots = ParkingSpot::all();
                return view('gate.park_map',compact('parking_spots'));
            }

        public function emergency_numbers()
            {
                return view('gate.emergency_numbers');
            }

        public function search_cars(Request $request)
            {
                $search = $request->search;
                $cars = Car::where('brand','Like','%'.$search.'%')
                            ->orWhere('model', 'Like','%'.$search.'%')
                            ->orWhere('number_plate', 'Like','%'.$search.'%')
                            ->get();
                $user = User::all();
                $client = Client::all();

                return view('gate.search_car',compact('search','cars','user','client'));
            }
    }

