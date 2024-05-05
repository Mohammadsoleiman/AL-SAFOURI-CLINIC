<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Validator;
use App\Models\X_ray;
use Illuminate\Http\Request;

class XrayController extends Controller
{
    public function index()
    {
        if(auth()->user()->role=='admin'){
        $xray = X_ray::latest()->paginate(5);
        return view('user.Xray.index',compact('xray'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);
    }


    public function create()
    {

        if(auth()->user()->role=='user'){
        return view('user.Xray.create');}
        abort(401);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                 'time' => [
                         'required',
                         function ($attribute, $value, $fail) use ($request) {
                            $existingTime = DB::table('x-ray')
                                ->where('time', $value)
                                ->first();

                            if ($existingTime) {
                                 $fail('The '.$attribute.' has already been taken.');
                            }
                        },
                   ],
                   'name'=>'required|string|max:255',
                   'phone'=>'required|regex:/^[0-9]{8}$/|unique:x-ray',
                   'Date'=>'required',

                     // other validation rules
                ]);


              $data =new X_ray;

              $data->name=$request->name;
              $data->phone=$request->phone;
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
        $xray=X_ray::query()
        ->where(function( $query) use ($search ){
             $query->where('name','like',"%$search%")
             ->orWhere('phone','like', "%$search%") ;
            })->paginate(3);
        return view ('user.Xray.index',compact('xray','search'));
            }

    public function edit(string $id)
    {
        if(auth()->user()->role=='admin'){
        $xray = X_ray::find($id);
        return view('user.Xray.edit')->with('xray', $xray);}
        abort(401);
    }


    public function update(Request $request, string $id)
    {
        $request-> validate([
            'name'=>'required|string|max:255',
            'phone'=>'required|regex:/^[0-9]{8}$/|unique:x-ray',
            'Date'=>'required',
        ]);
        if(auth()->user()->role=='admin'){
        $xray = X_ray::find($id);
        $input = $request->all();
        $xray->update($input);
        return redirect('xray')->with('flash_message', 'xray Updated!');}
        abort(401);
    }


    public function destroy(string $id)
    {
        if(auth()->user()->role=='admin'){
        X_ray::destroy($id);
        return redirect('xray')->with('flash_message', 'xray deleted!');}
        abort(401);
    }
}
