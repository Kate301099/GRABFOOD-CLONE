@extends('website.layouts.app')

@section('head')
    <title>MY ACCOUNT | GRAPFOOD-CLONE</title>
@endsection

@section('content')
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Account</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="">account</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="">My product</a></h4>
                    </div>
                </div>
                <form action="">
                    <a href=""><button>DELETE ACCOUNT</button></a>
                </form>

            </div><!--/category-products-->


        </div>
    </div>

    <div class="col-sm-9">
        <div class="blog-post-area">
            <div class="signup-form"><!--sign up form-->
                <h2>Update your profile</h2>

                <form class="form-horizontal form-material" method="post" action="{{route('user.account-update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" value="{{$user->name}}" name="name" class="form-control form-control-line">
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
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Address</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="address" class="form-control form-control-line"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Avatar</label>
                        <div class="col-md-12">
                            <input type="file" name="avatar" class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12">
                            <select name="id_country" class="form-control form-control-line">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($user['id_country']===$country->id)selected @endif>{{$country->country}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 15px">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
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
@endsection
