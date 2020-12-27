<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validation(Request $req)
    {

        $validate=$req -> validate([
            "nid"      => "required|min:10|max:10",
            "email"    => "required|email",
            "address"  => "required",
            "username" => array ('required','regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'),
            "phone"    => "required",
            "image"    => "required"
        ]);

    }



     public function index()
    {

        return view('students.form');
    }

    // public function see(){

    //     return view('students.form');


    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $this -> index($req);
        $file      =$req ->image->getClientOriginalExtension();
        $file_name = time().".".$file;
        $path      = 'images';
        $req ->image-> move($path,$file_name);

        $nid       = request('nid');
        $name      = request('username');
        $email     = request('email');
        $mobile    = request('mobile');
        $address   = request('address');


        student::create([
        'national_id'      => $nid,
        'student_name'     => $name,
        'student_email'    => $email,
        'student_phone'    => $mobile,
        'student_address'  => $address,
        'student_image'    => $file_name
        ]);

        return redirect('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    $std = student::all();
        return view('welcome',compact('std'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $student= student::all();
        return view('students.admin',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=$this->show_id($id);

        return view('students.edit',compact('row'));
    }

    public function show_id($id)
    {
        $student_by_id=student::where("id",$id)->get()->first();
        return $student_by_id;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */



    public function update(Request $req, $id)
    {
        // $this->validation( $req);
        $this->index($req);
        if ($req->hasFile('image')) {
        $file      =$req-> image -> getClientOriginalExtension();
        $file_name =time().'.'.$file;
        $path      ='images';
        $req->image->move($path,$file_name);
        }


         else {
            $file_name = student::find($id)->image;

        }
        $student= student::findOrFail($id);
        $student->update([
            'national_id'     => $req->input('nid'),
            'student_name'    => $req->input('username'),
            'student_email'   => $req->input('email'),
            'student_phone'   => $req->input('mobile'),
            'student_address' => $req->input('address'),
            'student_image'   => $file_name,

            ]);

            return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $student_by_id = student::where('id',$id)->delete();
        student::destroy($id);

        return redirect('/admin');
    }

    public function detaile($id)
    {
        $std=$this->show_id($id);
        return view('students.details',compact('std'));

    }
}









