<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index()
    {
        //elequent ORM
        $department=Department::all();
        return view('employee_record.department.index',compact('department'));
    }
    public function create()
    {
       return view('employee_record.department.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_name' => 'required',
        ]);
        Department::insert([
            'department_name' =>$request->department_name,
            'department_slug'=>Str::slug($request->department_name, '-'),

        ]);
        $notification=array('messege' =>'Department Inserted' ,'alert-type'=>'success' );
        return redirect()->route('department.index')->with($notification);
    }
    public function delete($id)
    {
        Department::destroy($id);
        $notification=array('messege' =>'Department Deleted!' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $data=Department::find($id);
        return view('employee_record.department.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $department=Department::find($id);
        $department->update([
            'department_name'=>$request->department_name,
            'department_slug'=>Str::slug($request->department_name, '-'),

        ]);
        $notification=array('messege' =>'Department Updated!' ,'alert-type'=>'success' );
        return redirect()->route('department.index')->with($notification);
    }
}
