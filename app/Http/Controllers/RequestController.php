<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RequestController extends Controller
{
      public function index()
    {
        if(auth()->user()->role=='admin'){
        $req = User::latest()->paginate(7);
        return view('admin.request.index',compact( 'req'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);


    }


    public function create(){}
    public function store(Request $request){}



    public function search(Request $request){
$search = $request->search;
$req=User::query()
->where(function( $query) use ($search ){
     $query->where('name','like',"%$search%")
     ->orWhere('email','like', "%$search%")
     ->orWhere('phone','like', "%$search%") ;
    })->paginate(3);
return view ('admin.request.index',compact('req','search'));
    }

    public function edit(string $id){}

     public function update( $user_id,$status_code)
     {
         try{
                $update_user=User::whereId( $user_id )->update([
                    'status' => $status_code
                ]);
                if($update_user){
                    return redirect()->route('requests.index')->with( 'success', 'Status updated successfully');
                }
                return redirect()->route('requests.index')->with( 'error', 'fail to updatte user status');

         }
         catch(\Throwable $th){
            throw $th;
         }
     }

    public function destroy(string $id){}



}
