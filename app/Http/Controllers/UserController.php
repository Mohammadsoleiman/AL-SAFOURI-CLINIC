<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection\link;
use App\Models\User;



class UserController extends Controller
{

    public function index()
    {
        if(auth()->user()->role=='admin'){
        $users = User::latest()->paginate(10);
        return view('admin.user.index',compact( 'users'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);


    }
    public function search(Request $request){
$search = $request->search;
$users=User::query()
->where(function( $query) use ($search ){
     $query->where('name','like',"%$search%")
     ->orWhere('email','like', "%$search%")
     ->orWhere('phone','like', "%$search%") ;
    })->paginate(3);
return view ('admin.user.index',compact('users','search'));
    }

    public function edit(string $id)
    {
        $users = User::find($id);
        return view('admin.user.edit')->with('users', $users);
    }


    public function update(Request $request, string $id)
    {
        $request-> validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email:rfc,dns|max:255',
            'phone'=>'required|regex:/^[0-9]{8}$/|unique:users',
            'gender'=>'required'
        ]);
        $users = User::find($id);
        $input = $request->all();


        $users->update($input);
        return redirect('users')->with('flash_message', 'user Updated!');
    }


    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'user deleted!');
    }
}
