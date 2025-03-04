@extends('admin.layouts.app')

@section('head')
    <tit>ADMIN-PROFILE</tit>
    @endsection
@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Profile</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bread crumb and right sidebar toggle -->

        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center class="m-t-30"> <img style="width: 130px;height:130px" src="" alt="ADMIN" class="rounded-circle" />
                                <h4 class="card-title m-t-10">{{$user['name']}}</h4>
                                <h6 class="card-subtitle">Grapfood-clone Admin</h6>
                                <div class="row text-center justify-content-md-center">
                                    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                            <font class="font-medium">254</font>
                                        </a></div>
                                    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                            <font class="font-medium">54</font>
                                        </a></div>
                                </div>
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="card-body"> <small class="text-muted">Email address </small>
                            <h6>{{$user['email']}}</h6>
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> <small class="text-muted p-t-30 db">Social Profile</small>
                            <br />
                            <button class="btn btn-circle btn-secondary"><i class="mdi mdi-facebook"></i></button>
                            <button class="btn btn-circle btn-secondary"><i class="mdi mdi-twitter"></i></button>
                            <button class="btn btn-circle btn-secondary"><i class="mdi mdi-youtube-play"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="{{route('admin.profile-update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$user['name']}}" name="name" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-line" name="email" id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="password" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        <h4><i class="icon fa fa-check"></i>Inform!</h4>
                        {{session('success')}}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        <h4><i class="icon fa fa-times"></i>Inform!</h4>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Column -->
            </div>

        </div>
    </div>
@endsection
