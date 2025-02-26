@extends('website.layouts.app')

@section('content')
    <h1>YOU WILL LOG IN AS USER OR STORE?</h1>

    <div>
        <a href="{{route('user.login')}}"><button>LOG IN AS USER</button></a>
        <a href="{{route('store.login')}}"><button>LOG IN AS STORE</button></a> <br>
    </div>
@endsection
