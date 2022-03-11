<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students=Student::all();
        // dd($students);
        return view('admin.students')->with(['students'=>$students,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $student =new Student();
        $student->cne=$request->cne;
        $student->firstName=$request->firstName;
        $student->secondName=$request->secondName;
        $student->age=$request->age;
        $student->speciality=$request->speciality;
        $student->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student= new Student();
           $student->cne=$request->cne;
          $student->firstName=$request->firstName;
          $student->secondName=$request->secondName;
          $student->age=$request->age;
          $student->speciality=$request->speciality;
          $student->save();
          return redirect()->back();
     
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
        $student=Student::find($id);
        $students=Student::all();
        return view('students',['students'=>$students,'layout'=>'show']);
    }

    public function edit($id)
    {
        $student=Student::find($id);
        $students=Student::all();
        return view('students',['students'=>$students,'layout'=>'edit']);

    }

    public function update(Request $request, $id)
    {
    
        $student= Student::find($id);
        $student->cne=$request->cne;
        $student->firstName=$request->firstName;
        $student->secondName=$request->secondName;
        $student->age=$request->age;
        $student->speciality=$request->speciality;
        $student->save();
        return redirect('/');
    }

    
    public function deletestudent($id)
    {
        $student=Student::find($id);
        
       
           $student->delete()->with(['message'=> 'Successfully deleted!!']);
           return redirect('/');


    } 
    }
