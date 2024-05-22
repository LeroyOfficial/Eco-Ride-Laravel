<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

class AdminController extends Controller
{
    //

    public function __construct()
        {
            $this->middleware('isAdmin');
        }

    public function index()
        {
            return view('admin.home');
        }

    public function clients()
        {
            $clients = Client::all();
            return view('admin.clients',compact('clients'));
        }

    public function client($id)
        {
            $client = Client::find($id);
            $user_id = User::where('email',$client->email)->value('id');
            $carcount = Car::where('owner_id',$user_id)->count();
            $cars = Car::where('owner_id',$user_id)->get();
            $park_history_count = Booking::where('user_id',$user_id)->count();
            $park_history = Booking::where('user_id',$user_id)->get();
            return view('admin.client_details',compact('client','carcount','cars','park_history_count','park_history'));
        }

    public function employees()
        {
            $employees = Employee::all();
            return view('admin.employees',compact('employees'));
        }

    public function employee($id)
        {
            $employee = Employee::find($id);
            return view('admin.employees',compact('employee'));
        }

    public function new_employee()
        {
            return view('admin.new_employee');
        }

    public function post_employee(Request $request)
        {
            $data = new Employee;
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;
            $data->email = $request->email;
            $data->save();

            $data = new User;
            $data->name = $request->fname.' '.$request->lname;
            $data->user_type = "Gate";
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();

            return redirect('/admin/employees');
        }

    public function messages()
        {
            $messages = Message::all();
            return view('admin.messages',compact('messages'));
        }

    public function message($id)
        {
            $message = Message::find($id);
            return view('admin.message',compact('message'));
        }

    public function payments()
        {
            $payments = Payment::all();
            $user = User::all();
            $client = Client::all();
            return view('admin.payment_history',compact('payments','user','client'));
        }

    public function generatePDF($id)
        {
            $user_id = User::where('email',$id)->value('id');
            $user_name = User::where('email',$id)->value('name');
            $park_history = Booking::where('user_id',$user_id)->get();
            $car = Car::all();
            $html = view('pdf.admin_park_history_report', compact('user_name','park_history','car'))->render();
            
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $dompdf->stream("parking history report for ".$user_name.".pdf", array("Attachment" => false));

            return redirect()->back();
        }
    
}
