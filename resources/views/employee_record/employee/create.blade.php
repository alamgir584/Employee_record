@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <a href="{{route('employee.index')}}" class="btn btn-primary">Show list</a>
  
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Add New Employee</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{route('store.employee')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Department</label>
                    <select class="form-control select2" name="department_id" style="width: 100%;">
                      @foreach ($department as $row)
                      <option value="{{$row->id}}">{{$row->department_name}}</option>
                      @endforeach
                    </select>
                  </div>
               
                    <div class="form-group">
                        <label for="phone">Employee phone</label>
                        <input type="text" class="form-control" name="phone"  placeholder="phone number">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Salary</label>
                        <input type="text" class="form-control" name="salary"  placeholder="salary">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control select2" name="gender" style="width: 100%;">
                          <option selected="selected">Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                 
                </div>
               
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="employee Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Designation</label>
                            <input type="text" class="form-control" name="designation"  placeholder="designation ">
                        </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Join Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                  
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Employee Address</label>
                <textarea class="form-control" rows="2" name="address" placeholder="Address"></textarea>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </div>
        </form>
    </div>        
</div>        
</section>     
</div>
@endsection