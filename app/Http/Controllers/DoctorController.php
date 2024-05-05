<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specailty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection\link;


class DoctorController extends Controller
{
    public function index()
    {

        if(auth()->user()->role=='admin'){
        $doctors = User::latest()->paginate(7);
        return view('admin.doctor.index',compact( 'doctors'));}
        // ->with('i',(request()->input('page',1) -1) *5);
        abort(401);



    }
    public function search(Request $request){
$search = $request->search;
$doctors=User::where(function( $query) use ($search ){
     $query->where('name','like',"%$search%")
     ->orWhere('email','like', "%$search%")
     ->orWhere('phone','like', "%$search%") ;
    })->paginate(3);
return view ('admin.doctor.index',compact('doctors','search'));
    }




    public function create()
    {
        $add=User::pluck('name','id');
        return view('admin.doctor.create',compact('add'));
    }


    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email:rfc,dns|max:255',
            'phone'=>'required|regex:/^[0-9]{8}$/|unique:users',
            'gender'=>'required',
            'password'=>'required',
            'specialty'=>'required'
        ]);

        $data =new User;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->gender=$request->gender;
        $data->specialty=$request->specialty;
        $data->password=$request->password;
        $data->role='doctor';
        $data->status='0';
        $data->save();

        return redirect('doctors');

    }



    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctors = User::find($id);
        return view('admin.doctor.edit')->with('doctors', $doctors);
    }


    public function update(Request $request, string $id)
    {
        $request-> validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email:rfc,dns|max:255',
            'phone'=>'required|regex:/^[0-9]{8}$/|unique:users',
            'gender'=>'required',
            'password'=>'required',
            'specialty'=>'required'
        ]);
        $doctors =User::find($id);
        $input = $request->all();
        $doctors->update($input);
        return redirect('doctors')->with('doctors', 'doctors Updated!');
    }



    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('doctors')->with('flash_message', 'Doctor deleted!');
    }
}
