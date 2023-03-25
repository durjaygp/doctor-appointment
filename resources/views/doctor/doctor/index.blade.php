@extends('doctor.master')
@section('title', 'Doctor')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-dark-subtle">
                <form action="{{route('doctor.create')}}" class="m-5" method="post">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="exampleFormControlSelect1"><h6>Department</h6></label>
                        <select class="form-select" aria-label="Default select example" name="department_id">
                            <option selected>Select Department</option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label><h6>Doctor Name</h6></label>
                        <input type="text" name="name" class="form-control" placeholder="Doctor Name">
                    </div>
                    <div class="form-group mt-3">
                        <label><h6>Phone</h6></label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group mt-3">
                        <label><h6>Doctor Fees</h6></label>
                        <input type="text" name="fee" class="form-control" placeholder="Fees">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
            <div class="col-md-6 bg-secondary">
                <table class="table table-bordered border-white mt-5 text-white">
                    <thead>
                    <tr>
                        <th scope="col">Sl.</th>
                        <th scope="col">Department</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$doctor->department->name}}</td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->fee}}</td>
                        <td>hello</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
