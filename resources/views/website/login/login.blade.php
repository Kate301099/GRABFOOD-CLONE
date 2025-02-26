@extends('website.layouts.app')

@section('head')
    <title>GRABFOOD-LOGIN(USER)</title>
@endsection

    @section('content')
    @if(!auth()->user())
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>LOGIN TO YOUR ACCOUNT</h2>
                        <form action="" method="post">
                            @csrf
                            <input style="margin-top: 20px" type="text" placeholder="Email" name="email" /> <br>
                            <input style="margin-top: 15px" type="password" placeholder="Password" name="password" /> <br>
                            <span>
                <input type="checkbox" class="checkbox" name="remember_me">
                Remember me
              </span> <br>
                            <button style="background-color: forestgreen; color:white;margin-top: 15px" type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
            </div>
        </div>
        </div>
    </section><!--/form-->
    @endif

    @if(auth()->user())
        <h2>LOGIN SUCCESSFULLY , MOVE TO <a href="{{route('user.account-index')}}">YOUR ACCOUNT !!!</a></h2>
        @endif

{{--    @if(session('success'))--}}
{{--        <div class="alert alert-success alert-dismissible">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>--}}
{{--            <h4><i class="icon fa fa-check"></i>Inform!</h4>--}}
{{--            {{session('success')}}--}}
{{--        </div>--}}
{{--    @endif--}}

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
