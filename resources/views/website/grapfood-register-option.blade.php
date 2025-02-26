@extends('website.layouts.app')

@section('content')
    <h1>WILL YOU REGISTER AS USER OR STORE?</h1>

    <div>
        <a href="{{route('user.register')}}"><button>REGISTER AS USER</button></a>
        <a href=""><button>REGISTER AS STORE</button></a> <br>
    </div>
@endsection
