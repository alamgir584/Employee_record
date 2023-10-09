<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index()
    {
    
        $department=Department::all();
        return view('employee_record.department.index',compact('department'));
    }
    public function trash()
    {
        $trash=Department::onlyTrashed()->get();
        return view('employee_record.department.trash',compact('trash'));
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
        $notification=array('messege' =>'Department  Soft Deleted!' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }
    public function restore($id)
    {
        Department::withTrashed()->findOrFail($id)->restore();
        $notification=array('messege' =>'Department Restored!' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }
    public function PDelete($id)
    {
        Department::onlyTrashed()->findOrFail($id)->forceDelete();
        $notification=array('messege' =>'Department Parmanently Deleted!' ,'alert-type'=>'success' );
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
