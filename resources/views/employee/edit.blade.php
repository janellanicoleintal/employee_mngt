@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 m-auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Add New Employee
                            </h3>
                        </div>

                        <form action="{{route('employee.edit',$employee->id)}}" method="POST">
                            @csrf 
                            @method('PUT')
                            <div class="row card-body col-12">
                                <div class="form-group col-12">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control g-2" name="fname" value="{{$employee->fname}}" placeholder="Enter First name">
                                </div>
                                @error('fname') <span class="text-danger"> {{$message}}</span> @enderror
                                
                                <div class="form-group col-12">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control g-2" name="lname" value="{{$employee->lname}}" placeholder="Enter Last name">
                                </div>
                                @error('lname') <span class="text-danger"> {{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control g-2" name="midname" value="{{$employee->midname}}" placeholder="Enter Middle name">
                                </div>
                                @error('midname') <span class="text-danger"> {{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control g-2" name="address" value="{{$employee->address}}" placeholder="Enter Address">
                                </div>
                                @error('address') <span class="text-danger"> {{$message}}</span> @enderror

                                <div class="form-group col-6">
                                    <label for="">Age</label>
                                    <input type="number" class="form-control g-2" name="age" value="{{$employee->age}}" placeholder="Enter age">
                                </div>
                                @error('age') <span class="text-danger"> {{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="">Zip</label>
                                    <input type="number" class="form-control g-2" name="zip" value="{{$employee->zip}}"placeholder="Enter Zip">
                                </div>
                                @error('zip') <span class="text-danger"> {{$message}}</span> @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success col-12"> update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection