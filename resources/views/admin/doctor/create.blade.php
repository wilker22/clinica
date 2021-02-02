@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">

    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h3>Add Doctor</h3>
            </div>
                <div class="card-body">
                    <form action="" class="form-sample">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Doctor name">
                            </div>

                            <div class="col-lg-6">
                                <label for="">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="Doctor e-mail">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Doctor Password">
                            </div>

                            <div class="col-lg-6">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Education</label>
                                <input type="text" name="education" class="form-control" placeholder="Doctor Highest Degree">
                            </div>

                            <div class="col-lg-6">
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Doctor Address" ></input>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Specilist</label>
                                <input type="text" name="department" id="department" class="form-control" placeholder="Doctor Highest Degree">
                            </div>

                            <div class="col-lg-6">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Doctor Address" ></input>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Browse Photo</button>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="role">Role</label>
                                    <select name="role_id" id="role_id" class="form-control">
                                        <option value="">Please Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id}}">{{ $role->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>



                        <div class="form-group">
                            <label for="exampleTextarea1">About</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
