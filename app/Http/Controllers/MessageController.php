<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role=='admin'){
        $messages = Message::latest()->paginate(4);
        return view('admin.message.index',compact( 'messages'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email:rfc,dns|max:255',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $input = $request->all();
        Message::create($input);
        Mail::to('mohammadsoleiman6@gmail.com')->send(new ContactUs($input));
        return  redirect()->back()->with('success', 'Message Addedd!');

    }


    public function destroy(string $id)
    {
        Message::destroy($id);
        return redirect('messages')->with('flash_message', 'Contact deleted!');
    }
    public function search(Request $request){
        $search = $request->search;
        $messages=Message::query()
        ->where(function( $query) use ($search ){
             $query->where('name','like',"%$search%")
             ->orWhere('email','like', "%$search%")
             ->orWhere('subject','like', "%$search%") ;
            })->paginate(6);
        return view ('admin.message.index',compact('messages','search'));
            }
}
