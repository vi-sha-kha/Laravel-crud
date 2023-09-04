<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function func(){
    //     echo $crud = Crud::create([
    //         'subject' => 'Applied'
    //     ]);
    //  }
    public function index()
    {
        // $crud = Crud::latest()->paginate(5);
        //  return view('crud.index', compact('crud'))->with('i',(request()->input('page',1)-1)*5);
        //    $crud = Crud::all();

           $crud = DB::table('crud')->get();

        return view('crud.index',compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $incomingFields = $request->validate([
        //     'subject'=>'required'
        // ]);

        //$incomingFields['subject'] = script_tags($incomingFields['subject']);

        //Crud::create($incomingFields);



        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'subject' => "required"
        ]);
        //dd($request->all());

        // $crud = new Crud();
        // $crud->subject = $request->subject;
        // $crud->save();

        // Sub::create([
        //     'name'=>$request->name
        // ]);

    //  Crud::create($request->except('_token'));




         Crud::create($request->all());

         //return view('crud.store');
       return redirect()->route('crud.index')->withSuccess('Employee has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
         return view('crud.show', compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crud $crud)
    {
        return view('crud.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $crud)
    {
         $request->validate([
            'subject' => 'required',

        ]);
        $crud->update($request->all());
        return redirect()->route('crud.index')->withSuccess("Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $crud)
    {
        $crud->delete();
        //return redirect()->route('crud.index')->withSuccess('Deleted Successfully!');

          return back() -> withDanger ('Deleted Successfully!');
    }
}
