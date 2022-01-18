@extends('admin.adminSkull')
@section('adminContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-4">


                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form action="{{ url('admin/saveeditUser/' . $data['id']) }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" cols="30" rows="3"
                                            class="form-control">{{ $data['address'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" id="age" placeholder="Age" name="age"
                                            value="{{ $data['age'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="number" class="form-control" id="contact" name="contact"
                                            value="{{ $data['contact'] }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ url('admin/deleteUser/' . $data['id']) }}" class="btn btn-primary btn-danger">Delete</a>

                                </div>


                                @if (session('success'))
                                    {{ session('success') }}
                                @else
                                    Nothing
                                @endif


                            </form>
                        </div>
                    </div>
                    {{-- <div class="col-md-8">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">UserInfo Data</h3>
                            </div>
                            <table class="table" id="userTable">
                                <tr>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        Contact
                                    </th>
                                    <th>
                                        Creation
                                    </th>
                                    <th>
                                        Updation
                                    </th>
                                    <th>
                                        Modify
                                    </th>
                                </tr>

                                @forelse ($data as $user)
                                    <tr>
                                        <td>
                                            {{ $user->address }}
                                        </td>
                                        <td>
                                            {{ $user->age }}
                                        </td>
                                        <td>
                                            {{ $user->contact }}
                                        </td>
                                        <td>
                                            {{ $user->created_at }}
                                        </td>
                                        <td>
                                            {{ $user->updated_at }}
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-small btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @empty
                                    Data no available
                                @endforelse

                            </table>
                        </div>
                    </div> --}}
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
