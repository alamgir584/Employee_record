@extends('layouts.app')
@section('content')
    

{{-- Soft delete --}}

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{route('department.index')}}" class="btn btn-primary">Show list</a>
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
                      <h3 class="card-title">All Trash List</h3>
                    </div>
  
                    <div class="card-body text-center">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>SL.</th>
                              <th>Department Name</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
  
                        @foreach ($trash as $key=>$row )
  
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$row->department_name}}</td>
                              <td>
                                <a href="{{route('restore.department',$row->id)}}" class="btn btn-info btn-sm " ><i class="fas fa-trash-restore"></i></a>
                                <a href="{{route('PDelete.department',$row->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
  
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