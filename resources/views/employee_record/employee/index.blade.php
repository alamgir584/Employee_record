@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Employee</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a href="{{route('create.employee')}}" class="btn btn-primary">+Add New</a>
          </ol>
          <ol class="breadcrumb float-sm-right">
            <a href="{{route('employee.trash')}}" class="btn btn-primary">Trash List</a>
        </ol>
        </div>
      </div>
  </div>

      <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All Employee List</h3>
                  </div>

                  <div class="card-body text-center">
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>SL.</th>
                            <th>Department Name</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                      @foreach ($employee as $key=>$row )

                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$row->Department->department_name}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->gender}}</td>
                            <td><img src="{{ asset($row->image) }}"width="50" height="50"></td>
                            <td>
                              <a href="{{route('edit.employee',$row->id)}}" class="btn btn-info btn-sm " ><i class="fas fa-edit"></i></a>
                              <a href="{{route('view.employee',$row->id)}}" class="btn btn-info btn-sm " ><i class="fas fa-eye"></i></a>
                              <a href="{{route('delete.employee',$row->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>

                            </td>
                          </tr>
                          @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
  </div>
  </div>
@endsection