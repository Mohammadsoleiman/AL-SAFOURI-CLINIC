<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmacyController extends Controller
{
    public function phar(){
if(auth()->user()->role=='user'){
        $pharmacys = Pharmacy::latest()->paginate(5);
        return view('user.index',compact('pharmacys'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);
    }
    public function index()
    {
        if(auth()->user()->role=='admin'){
        $pharmacys = Pharmacy::latest()->paginate(4);
        return view('admin.pharmacy.index',compact('pharmacys'))
        ->with('i',(request()->input('page',1) -1) *5);}
        abort(401);

    }


    public function create()
    {
        return view('admin.pharmacy.create');
    }


    public function store(Request $request)
    {

        $request-> validate([
            'name'=>'required|string|max:255',
            'price'=>['required','intege'],
            'amount'=>['required','integer|max:255'],
            'production_date'=>'required',
            'end_date'=>'required',

        ]);
        $input = $request->all();
        Pharmacy::create($input);
        return  redirect()->route('pharmacys.index')->with('flash_message', 'Pharmacys Addedd!');
    }

    public function search(Request $request){
        $search = $request->search;
        $pharmacys=Pharmacy::query()
        ->where(function( $query) use ($search ){
             $query->where('name','like',"%$search%")
             ->orWhere('price','like', "%$search%")
             ->orWhere('amount','like', "%$search%") ;
            })->paginate(3);
        return view ('admin.pharmacy.index',compact('pharmacys','search'));
            }
    public function searchs(Request $request){
        $search = $request->search;
        $pharmacys=Pharmacy::query()
        ->where(function( $query) use ($search ){
             $query->where('name','like',"%$search%")
             ->orWhere('price','like', "%$search%")
             ->orWhere('amount','like', "%$search%") ;
            })->paginate(3);
        return view ('user.index',compact('pharmacys','search'));
            }

    public function edit(string $id)
    {
        $pharmacys = Pharmacy::find($id);
        return view('admin.pharmacy.edit')->with('pharmacys', $pharmacys);
    }


    public function update(Request $request, string $id)
    {
        $pharmacys = Pharmacy::find($id);
        $input = $request->all();
        $pharmacys->update($input);
        return redirect('pharmacys')->with('pharmacys', 'pharmacy Updated!');
    }


    public function destroy(string $id)
    {
        Pharmacy::destroy($id);
        return redirect('pharmacys')->with('flash_message', 'pharmacy deleted!');
    }
}
