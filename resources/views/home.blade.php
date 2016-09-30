@extends('layouts.app')

@section('content')
    <div class="ui segment">
        <div class="row">
            Dashboard <br>
            You are logged in! <br>
            <div class="well"> user name: {{ auth()->user()->name }} </div>
        </div>
    </div>
@endsection
