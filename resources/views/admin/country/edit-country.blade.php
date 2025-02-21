@extends('admin.layouts.app')
@section('content')

    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">EDIT COUNTRY</h4>
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
                            <form id="form" class="form-horizontal form-material" action="{{route('country.update',['country'=>$country->id])}}" method="post>
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                        <label class="col-md-12">NEW COUNTRY ID :{{$country->id}}</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$country->country}}" name="country" class="form-control form-control-line">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success edit-country">EDIT COUNTRY</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                    </div>
                </div>

                <!-- Column -->
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

        </div>

    </div>

@endsection

{{--@section('script')--}}
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('.edit-country').click(function (e) {--}}
{{--                e.preventDefault();--}}

{{--                $.ajax({--}}
{{--                    type: "POST",--}}
{{--                    url: '{{ route('country.update', ['id' => $country[0]->id]) }}',--}}
{{--                    data: {--}}
{{--                        _token: '{{ csrf_token() }}',--}}
{{--                        country: $('input[name=country]').val()--}}
{{--                    },--}}
{{--                    success: function(res) {--}}
{{--                        alert(res.message)--}}
{{--                    },--}}
{{--                    error: function(err) {--}}
{{--                        alert(JSON.parse(err.responseText, null, 2).message)--}}
{{--                    },--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
