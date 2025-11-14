<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\History;
use App\Models\User;

use PhpParser\Node\Expr\Cast\String_;
class HistAdminController extends Controller
{

    public function index(Request $request)
    {
        if(auth()->user()->role=='admin'){
        $doctor = User::all();
        $historys = History::query(); // Get a query builder instance
        if ($request->filled('did')) {
            $historys->where('did', $request->did); // Filter history by 'did' if it's present in the request
        }

        $historys = $historys->paginate(4); // Execute the query and retrieve the results

        return view('admin.hist', compact('historys', 'doctor'));}
        abort(401);

    }

    public function search(Request $request){
        $search = $request->search;
        $historys=History::query()
        ->where(function( $query) use ($search ){
             $query->where('pid','like',"%$search%")
             ->orWhere('date','like', "%$search%") ;
            })->paginate(4);
            $doctor = User::where('role', 'doctor')->get();
        return view ('admin.hist',compact('historys','search','doctor'));
            }
    public function create()
    {

    }
    public function store(Request $request)
    {
    }

    public function edit(string $id)
    {

        $historys = History::find($id);
        $doctors= User::pluck('name','id');
        return view('admin.edit',compact('doctors'))->with('historys', $historys);
    }



    public function update(Request $request, string $id)
    {
        $request-> validate([
            'detail'=>'required',
        ]);
        $History = History::find($id);
        $input = $request->all();
        $History->update($input);
        return redirect('History')->with('flash_message', 'pharmacy Updated!');
    }

    public function destroy(string $id)
    {
        History::destroy($id);
        return redirect()->back()->with('flash_message', 'pharmacy deleted!');
    }
}
