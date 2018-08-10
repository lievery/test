@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1>Hello world</h1>
        <p class="lead">
            修建中 <a href="#">(#^.^#)</a>
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop