@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Edit Employee</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{route('update.employee',$employee->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_image" value="{{ $employee->image }}">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Department</label>
                    <select class="form-control select2" name="department_id" style="width: 100%;">
                      @foreach ($department as $row)
                      <option value="{{$row->id}}"@if ($row->id == $employee->department_id) selected @endif>{{$row->department_name}}</option>
                      @endforeach
                    </select>
                  </div>
               
                    <div class="form-group">
                        <label for="phone">Employee phone</label>
                        <input type="text" class="form-control" name="phone"  value="{{$employee->phone}}">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Salary</label>
                        <input type="text" class="form-control" name="salary"  value="{{$employee->salary}}">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control select2" name="gender" style="width: 100%;">
                            @if ($employee->gender=="Male")
                            <option selected="selected">Male</option>
                            <option>Female</option>     
                            @else
                            <option >Male</option>
                            <option selected="selected">Female</option>  
                            @endif
                        </select>
                      </div>
                 
                </div>
               
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Name</label>
                            <input type="text" class="form-control" name="name"  value="{{$employee->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Designation</label>
                            <input type="text" class="form-control" name="designation"  value="{{$employee->designation}}">
                        </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Join Date</label>
                    <input type="date" class="form-control" name="date" value="{{$employee->date}}">
                </div>
                  
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" value="{{$employee->image}}">
                    
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Employee Address</label>
                <textarea class="form-control" rows="2" name="address">{{$employee->address}}</textarea>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
          </div>
        </form>
    </div>        
</div>        
</section>     
</div>
@endsection