<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;
use App\Models\History;
use App\Models\User;

class AppointmentOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $appointmentone = Appointment::all();
        // return view('user.appointment.index')->with('appointment', $appointmentone);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role=='user'){
        $appointmentone= User::all();
        return view('user.appointment.create1' ,compact('appointmentone'));}
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
                                ->where('did', [$request->input('did')])
                                ->whereDate('date', $request->input('date'))// Exclude current did
                                ->first();

                            if ($existingTime) {
                                 $fail('The '.$attribute.' has already been taken.');
                            }
                        },
                   ],


                     // other validation rules
                ]);


              $data =new Appointment;
              $doctor= $request->did;
              $data->pid=$request->pid;
              $data->did=$request->did;
              $data->date=$request->date;
              $data->time=$request->time;
              if ($validator->fails()) {
                         return redirect()->back()->with('failure', 'Please Change To Time and Check');
                }
                $data->save();
                return redirect()->back()->with('success', 'Success in Appointment');



    }

    public function edit(string $id)
    {
        $appointmentone = Appointment::find($id);
        return view('user.appointment.edit')->with('appointmentone', $appointmentone);
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
        return redirect('appointmentone')->with('flash_message', 'appointmentone deleted!');
    }
}
