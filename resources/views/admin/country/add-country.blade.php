@extends('admin.layouts.app')
@section('content')
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">ADD COUNTRY</h4>
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
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="{{route('country.addPost')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">NEW COUNTRY</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" name="country" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">ADD COUNTRY</button>
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

        <!-- footer -->
        @include('admin.layouts.footer')

    </div>
@endsection
