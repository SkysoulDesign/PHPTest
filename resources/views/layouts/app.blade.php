<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=" csrf_token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('semantic/semantic.css') }}" media="screen">

</head>

<body>

{{--<nav class="navbar navbar-default navbar-static-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}

{{--<!-- Collapsed Hamburger -->--}}
{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"--}}
{{--data-target="#app-navbar-collapse">--}}
{{--<span class="sr-only">Toggle Navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}

{{--<!-- Branding Image -->--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--earchive--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
{{--<li><a href="{{ url('/download_books') }}">DownloadBooks</a></li>--}}
{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav navbar-right">--}}

{{--<!-- Authentication Links -->--}}
{{-- if the user is not logedin show the login and reg btn  used "auth middel[faced]  and guest method"--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
{{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
{{--<li><a href="{{ url('/newsfeed') }}">NewsFeed</a></li>--}}
{{--@else--}}
{{-- if user is loged  in show logout btn --}}

{{-- only admin can watch this page --}}
{{--@role('admin')--}}
{{--<li><a href={{ url('admin/teacher') }}>admin panel</a></li>--}}
{{--@endrole--}}

{{-- only student can see this link --}}
{{--@role('student')--}}
{{--<li><a href="#"> you'r name:{{ Auth::user()->name }}</a></li>--}}
{{--@endrole--}}

{{-- @role('teacher')--}}
{{--<li><a href="#">you'r are teacher name:{{ Auth::user()->name }}</a></li>--}}
{{--@endrole --}}
{{--<li class="dropdown">--}}

{{--<a href="{{ url('/profile') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--aria-expanded="false">--}}
{{-- show username --}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-sign-out">profile</i></a></li>--}}
{{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
{{--</ul>--}}

{{-- "in-complete controller"--}}
{{--@if (Auth::user()->name == from controller [check fact from the db])--}}
{{--<li class="hidden-sm"><a href="{{ url('/uploadbooks') }}"></a></li>--}}
{{--<li class="hidden-sm"><a href="{{ url('/articals') }}"></a></li>--}}
{{--<li class="hidden-sm hidden-md"><a href="{{ url('/chat') }}"></a></li>--}}
{{--@endif--}}
{{----}}


{{--</li>--}}

{{----}}
{{--after the loged in anthore books/articals/newsfeed--}}
{{----}}
{{--<li>--}}
{{--<a href="{{ url('/book') }}">--}}
{{--bookscontroller--}}
{{--</a>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}

{{--</div>--}}

{{--</div>--}}
{{--</nav>--}}

<div class="ui container" style="margin-top: 2em">

    @include('partials.nav-bar')

    @if($errors->any())
        <div class="ui negative message">
            <i class="close icon"></i>
            <div class="header">
                Ooops...
            </div>
            <ul class="list">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="/semantic/semantic.js"></script>

</body>
</html>
