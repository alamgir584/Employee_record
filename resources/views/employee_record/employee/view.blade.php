@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employee Details</h1>
          </div>
        </div>
    </div>
  
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Employee Details</h3>
                    </div>
  
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> Employee Department</td>
                            <td>{{$employee->Department->department_name}}</td>
                          </tr>
                          <tr>
                            <td> Employee Name</td>
                            <td>{{$employee->name}}</td> 
                          </tr>
                          <tr>
                            <td> Employee phone</td>
                            <td>{{$employee->phone}}</td> 
                          </tr>
                          <tr>
                            <td> Employee Gender</td>
                            <td>{{$employee->gender}}</td> 
                          </tr>
                          <tr>
                            <td> Employee Salary</td>
                            <td>{{$employee->salary}}</td> 
                          </tr>
                          <tr>
                            <td> Employee Designation</td>
                            <td>{{$employee->designation}}</td> 
                          </tr>
                          <tr>
                            <td> Employee Join Date</td>
                            <td>{{$employee->date}}</td> 
                          </tr>
                          <tr>
                            <td> Employee Adress</td>
                            <td>{{$employee->address}}</td> 
                          </tr>
                          <tr>
                            <td> Employee Image</td>
                            <td><img src="{{ asset($employee->image) }}"width="50" height="50"></td> 
                          </tr>   
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>
@endsection