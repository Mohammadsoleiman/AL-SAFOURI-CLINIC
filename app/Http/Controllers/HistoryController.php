<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\History;
use App\Models\User;
use App\Models\Appointment;
use PhpParser\Node\Expr\Cast\String_;
class HistoryController extends Controller
{

    public function index()
    {
      if(auth()->user()->role=='doctor'){
        $history = History::latest()->paginate(5);
        return view('doctor.history.index', compact('history'))
            ->with('i', (request()->input('page', 1) - 1) * 5);}
            abort(401);
    }
    public function transferData( Request $request ,$id)
    {

        $request-> validate([
            'detail'=>'required',
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

    public function create()
    {
        $doctors= User::pluck('name','id');
        return view('admin.hist', compact('doctors'));
    }
    public function store(Request $request)
    {
    }
    // public function index1()
    // {
    //     $historys = History::latest()->paginate(10);
    //     return view('admin.hist', compact('historys'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);


    // }
    public function edit(string $id)
    {

        $doctors= User::pluck('name','id');
        $history = History::find($id);
        return view('doctor.history.edit',compact('doctors'))->with('history', $history);
    }



    public function update(Request $request, string $id)
    {
        $request-> validate([
            'detail'=>'required',
        ]);
        $history = History::find($id);
        $input = $request->all();
        $history->update($input);
        return redirect('history')->with('flash_message', 'history Updated!');
    }

    public function destroy(string $id)
    {
        History::destroy($id);
        return redirect()->back()->with('flash_message', 'pharmacy deleted!');
    }
}
