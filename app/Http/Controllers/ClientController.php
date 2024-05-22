<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\Client;
use App\Models\ParkingSpot;
use App\Models\Booking;
use Dompdf\Dompdf;

class ClientController extends Controller
  {
      //
      public function __construct()
      {
          $this->middleware('isClient');
      }

      public function index()
        {
          return view ('user.home');
        }

      public function parking()
        {
          $carcount = Car::where('owner_id',Auth::user()->id)->count();
          $cars = Car::where('owner_id',Auth::user()->id)->get();
          $parking_spots = ParkingSpot::all();
          $booked = Booking::all();
          return view ('user.parking', compact('carcount','cars','parking_spots','booked'));
        }        

      public function post_park(Request $request)
        {
          $data = new Booking;
          $data->vehicle_id = $request->car;
          $data->user_id = Auth::user()->id;
          $data->parking_spot_id = $request->park_spot;
          $data->date = $request->date;
          $data->entry_time = $request->entry_time;
          $data->exit_time = $request->exit_time;
          $data->status = 'pending';
          $data->save();
          return redirect('/client/park_history');
        }

      public function my_cars()
        {
          $carcount = Car::where('owner_id',Auth::user()->id)->count();
          $cars = Car::where('owner_id',Auth::user()->id)->get();
          return view('user.my_cars',compact('carcount','cars'));
        }

      public function new_car()
        {
          return view('user.new_car');
        }

      public function post_car(Request $request)
        {
          $data = new Car;
          $data->owner_id = Auth::user()->id;
          $data->brand = $request->brand;
          $data->model = $request->model;
          $data->number_plate = $request->number_plate;

          $image = $request->image;
            if ($image)
                {
                  $first_name = Client::where('email',Auth::user()->email)->value('first_name');
                  $last_name = Client::where('email',Auth::user()->email)->value('last_name');
                  $car_name = $first_name . ' ' . $last_name . "'s " . $request->brand . ' ' . $request->model.' car photo';
                  $imagename = $car_name.' - '.time().'.'.$image->getClientoriginalExtension();
                  $image->move('Car_Pics',$imagename);
                  $data->image = $imagename;
                }

          $data->save();

          return redirect('/client/my_cars');
        }

      public function edit_car($id)
        {
          $car = Car::find($id);
          return view('user.edit_car',compact('car'));
        }

      public function update_car(Request $request, $id)
        {
          $data = Car::find($id);
          $data->save();
          return redirect()->back()->with('message','you have successfully updated one of your car details');
        }

      public function delete_car($id)
        {
          $car = Car::find($id);
          $car->delete();
          return redirect()->back()->with('message','you have successfully deleted one of your car details');
        }
      
      public function park_history()
        {
          $park_history = Booking::where('user_id',Auth::user()->id)->get();
          $park_history_count = Booking::where('user_id',Auth::user()->id)->count();
          $car = Car::all();
          return view ('user.park_history', compact('park_history_count','park_history','car'));
        }

      public function generatePDF()
        {
          $park_history = Booking::where('user_id',Auth::user()->id)->get();
          $car = Car::all();
          $html = view('pdf.park_history_report', compact('park_history','car'))->render();
          
          $dompdf = new Dompdf();
          $dompdf->loadHtml($html);
          $dompdf->setPaper('A4', 'portrait');
          $dompdf->render();
          $dompdf->stream("parking history report for ".Auth::user()->name.".pdf", array("Attachment" => false));

          return redirect('/client/park_history');
        }

      public function my_payments()
        { 
          return view ('user.my_payments');
        }      
  }
