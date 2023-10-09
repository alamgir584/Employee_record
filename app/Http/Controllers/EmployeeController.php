<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use Image;
use File;
use DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $department=Department::all();
        $employee=Employee::all();  
        return view('employee_record.employee.index',compact('employee','department'));
    }
    public function create()
    {
        $department=Department::all();
        return view('employee_record.employee.create',compact('department'));
    }
    public function store(Request $request)
    {
        //return $request->all();
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'gender' => 'required',
        //     'Image' => 'required',
        // ]);

               
                $image=$request->file('image');
                $name_gen_image=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('files/employee/'.$name_gen_image);
                $image='files/employee/'.$name_gen_image;

                Employee::insert([
                    'department_id'=>$request->department_id,
                    'name' => $request->name,
                    'phone'=> $request->phone,
                    'designation'=> $request->designation,
                    'salary'=> $request->salary,
                    'date'=> $request->date,
                    'gender'=> $request->gender,
                    'image'=> $image,
                    'address'=> $request->address,
                ]);

        $notification=array('messege' =>'Employee Inserted' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);

    }
    public function delete($id)
    {
        $employee=DB::table('employees')->where('id',$id)->first();  //product data get
        if (File::exists($employee->image)) {
              FIle::delete($employee->image);
        }
    	DB::table('employees')->where('id',$id)->delete();
    	$notification=array('messege' => 'Employee Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);

    }

    public function edit($id)
    {
        $department=DB::table('departments')->get();
        $employee=DB::table('employees')->where('id',$id)->first();
        return view('employee_record.employee.edit',compact('department','employee'));
    }
    public function update(Request $request,$id)
    {

        $data=array();
        $data['department_id']=$request->department_id;
        $data['name'] = $request->name;
        $data['phone']= $request->phone;
        $data['designation']= $request->designation;
        $data['salary']= $request->salary;
        $data['date']= $request->date;
        $data['gender']= $request->gender;
        $data['image']= $request->old_image;
        $data['address']= $request->address;
    	        //  thumbnail image edit
                if ($request->image)
                {
                    if (File::exists($request->old_image))
                    {
                    unlink($request->old_image);
                    }
                    $photo=$request->image;
                    $photoname = uniqid()."-".$request->file('image')->getClientOriginalName();
                    Image::make($photo)->resize(300,300)->save('files/employee/'.$photoname);
                    $data['image']='files/employee/'.$photoname;
                }
        DB::table('employees')->where('id',$id)->update($data);
        $notification=array('messege' => 'Employee Update!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
   }

   public function view($id){
        $department=Department::all();
        $employee=Employee::where('id',$id)->with('Department')->first();
        return view('employee_record.employee.view',compact('employee','department'));

   }
    
}
