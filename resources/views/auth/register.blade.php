@extends('layouts.app')

@section('content')

    <div class="ui attached segment">

        <form class="ui form" action="{{ route('register.store') }}" method="post">

            {{ csrf_field() }}

            <div class="field">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="field">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field">
                <label>Confirm Password</label>
                <input type="password" name="password-confirmation" placeholder="Password">
            </div>
            <button class="ui button" type="submit">Register</button>
        </form>

    </div>

    <div class="ui bottom attached warning message">
        <i class="warning icon"></i>
        You don't have an account? <a href="/register">click here to register</a>
    </div>

@endsection
