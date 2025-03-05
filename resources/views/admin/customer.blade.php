@extends('admin.layouts.app')
@section('content')
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">CUSTOMERS</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">CUSTOMERS</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="col-12">
                <div class="card">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr >
                                <th width="300px" style="font-weight: bold" scope="col">ID</th>
                                <th width="300px" style="font-weight: bold" scope="col">NAME</th>
                                <th width="300px" style="font-weight: bold" scope="col">GENDER</th>
                                <th width="300px" style="font-weight: bold" scope="col">BIRTHDAY</th>
                                <th width="300px" style="font-weight: bold" scope="col">EMAIL</th>
                                <th width="300px" style="font-weight: bold" scope="col">PHONE</th>
                                <th width="300px" style="font-weight: bold" scope="col">ACTION</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->id }}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->gender }}</td>
                                    <td>{{$customer->birth_date}}</td>
                                    <td>{{$customer->email }}</td>
                                    <td>{{$customer->phone}}</td>
{{--                                    <td>--}}
{{--                                        <a href="{{route('country.show',['country'=>$country->id] )}}">--}}
{{--                                            <button style="padding:3px 10px"> Edit</button>--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
                                    <td>
                                        <form action="{{ route('admin.customers-destroy', ['customer' => $customer->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this country?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="float-right">
                            {{ $customers->links('pagination::bootstrap-4') }}
                        </div>

                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <h4><i class="icon fa fa-check"></i>Inform:</h4>
                    {{session('success')}}
                </div>
            @endif
        </div>



        <!-- End Container fluid  -->

    </div>
    <!-- End Page wrapper  -->
    </div>
@endsection
