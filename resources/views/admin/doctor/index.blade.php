@extends('admin.layouts.master')

@section('content')
    <header class="header-top" header-theme="light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <div class="top-menu d-flex align-items-center">
                    <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                    <div class="header-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                        </div>
                    </div>
                    <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                </div>
                <div class="top-menu d-flex align-items-center">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                        <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                            <h4 class="header">Notifications</h4>
                            <div class="notifications-wrap">
                                <a href="#" class="media">
                                    <span class="d-flex">
                                        <i class="ik ik-check"></i>
                                    </span>
                                    <span class="media-body">
                                        <span class="heading-font-family media-heading">Invitation accepted</span>
                                        <span class="media-content">Your have been Invited ...</span>
                                    </span>
                                </a>
                                <a href="#" class="media">
                                    <span class="d-flex">
                                        <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                    </span>
                                    <span class="media-body">
                                        <span class="heading-font-family media-heading">Steve Smith</span>
                                        <span class="media-content">I slowly updated projects</span>
                                    </span>
                                </a>
                                <a href="#" class="media">
                                    <span class="d-flex">
                                        <i class="ik ik-calendar"></i>
                                    </span>
                                    <span class="media-body">
                                        <span class="heading-font-family media-heading">To Do</span>
                                        <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                    </span>
                                </a>
                            </div>
                            <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                        </div>
                    </div>
                    <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                        <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                        </div>
                    </div>
                    <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                            <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                            <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                            <a class="dropdown-item" href="login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-inbox bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Ddoctors</h5>
                                            <span>Doctor´s List</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Doctors</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Index</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                @if (Session::has('message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('message')}}
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header"><h3>Data Table</h3></div>
                                    <div class="card-body">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th class="nosort">Avatar</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Phone Number</th>
                                                    <th>Department</th>
                                                    <th class="nosort">&nbsp;</th>
                                                    <th class="nosort">&nbsp;</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($doctors) > 0)
                                                    @foreach ($doctors as $doctor)
                                                        <tr>
                                                            <td>{{$doctor->name}}</td>
                                                            <td><img src="{{asset('images')}}/{{$doctor->image}}" class="table-user-thumb" alt=""></td>
                                                            <td>{{$doctor->email}}</td>
                                                            <td>{{$doctor->address}}</td>
                                                            <td>{{$doctor->phone_number}}</td>
                                                            <td>{{$doctor->Department}}</td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{$doctor->id}}"><i class="ik ik-eye"></i></a>
                                                                    <a href="{{ route('doctor.edit', $doctor->id) }}"><i class="ik ik-edit-2"></i></a>
                                                                    <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- View Modal -->
                                                        @include('admin.doctor.modal')

                                                    @endforeach
                                                @else

                                                        <td>No Doctors to display!</td>

                                                @endif




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
