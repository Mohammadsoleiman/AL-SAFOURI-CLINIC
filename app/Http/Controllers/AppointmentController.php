<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;
use App\Models\History;
use App\Models\User;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role=='doctor'){
        $appointment = Appointment::latest()->paginate(10);
        return view('user.appointment.index',compact( 'appointment'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role=='user'){
        $max=User::pluck('name','id');
        $appointment= User::all();
        return view('user.appointment.create' ,compact('appointment','max'));}
        abort(401);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                 'time' => [
                         'required',
                         function ($attribute, $value, $fail) use ($request) {
                            $existingTime = DB::table('appointment')
                                ->where('time', $value)
                                ->where('did', [$request->input('did')]) // Exclude current did
                                ->first();

                            if ($existingTime) {
                                 $fail('The '.$attribute.' has already been taken.');
                            }
                        },
                   ],
                   'name'=>'required|string|max:255',

                   'Date'=>'required',
                   'did'=>'required',
                     // other validation rules
                ]);


              $data =new Appointment;
              $doctor= $request->did;
              $data->pid=$request->pid;
              $data->did=$request->did;
              $data->date=$request->date;
              $data->time=$request->time;
              if ($validator->fails() ) {
                         return redirect()->back()->with('failure', 'Please Change To Time and Check');
                }

                $data->save();
                return redirect()->back()->with('success', 'Success in Appointment');



    }

    public function search(Request $request){
        $search = $request->search;
        $appointment=Appointment::query()
        ->where(function( $query) use ($search ){
             $query->where('pid','like',"%$search%")
             ->orWhere('time','like', "%$search%");

            })->paginate(3);
        return view ('user.appointment.index',compact('appointment','search'));
            }

    public function show(string $id)
    {


    }

    public function edit(string $id)
    {
        $appointment = Appointment::find($id);
        return view('user.appointment.edit')->with('appointment', $appointment);
    }


    public function update(Request $request, string $id)
    {
        $request-> validate([
            'detail'=>'require'
        ]);
        $sourceData = Appointment::find($id);

    if ($sourceData) {
        $destinationData = new History();
        $destinationData->fill($sourceData->toArray());
        $destinationData->detail=$request->detail;
        $destinationData->save();
    }

    return redirect()->back()->with('success', 'Data transferred successfully!');
    }


    public function destroy(string $id)
    {
        Appointment::destroy($id);
        return redirect('appointment')->with('flash_message', 'appointment deleted!');
    }
}

