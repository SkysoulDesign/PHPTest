@extends('layouts.app')

@section('content')

    <div class="ui attached segment">

        <form class="ui form" method="post" action="{{ route('login.store') }}">

            {{ csrf_field() }}

            <div class="field">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>

            <button class="ui button" type="submit">Login</button>

        </form>

    </div>

    <div class="ui bottom attached warning message">
        <i class="warning icon"></i>
        You don't have an account? <a href="/register">click here to register</a>
    </div>

@endsection
