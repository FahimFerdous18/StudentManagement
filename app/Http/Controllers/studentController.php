<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Studentt;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $studentt= new Studentt();
        $studentts= $studentt->all(); 
         return view('admin.student.index')->with('studentts',$studentts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=>'required',
            'roll'=> 'required|min:2',
             'phone'=>'nullable',
            'image'=>'image'


      ]);
         $name = $request->name;
      $roll = $request->roll;
      $studentt = new Studentt();
      $studentt->name =  $name;
      $studentt->roll = $roll;
      $studentt->phone_no = $request->phone;
      $studentt->address = $request->address;
      if($request->hasFile('image')){
          $image = $request->image->store('public/images');
          $studentt->image = $image;
      }
      $studentt->save();
      return redirect()->back()->with('message','student data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $studentt = Studentt::find($id);
        //return $student->name;
         return view('admin.student.edit')->with('std', $studentt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->name;
        $roll = $request->roll;
        $studentt = Studentt::find($id);
        $studentt->name = $name;
        $studentt->roll = $roll;
        $studentt->save();
        return redirect()->route('student.index')->with('success','Information is updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $studentt = new Studentt();
        $studentt = $studentt->find($id);
        $studentt->delete();
       return back()->with('message','information is deleted successfully');
    }
}
