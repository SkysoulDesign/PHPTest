<div class="ui secondary  menu">
    <a href="{{ route('home') }}" class="active item">
        <i class="home icon"></i>Home
    </a>
    <a href="{{ route('books') }}" class="item">
        <i class="book icon"></i>Books
    </a>
    <div class="right menu">
        <div class="item">
            <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>
        @if(auth()->check())
            <a href="{{ route('user.books') }}" class="item">
                <i class="wizard icon"></i>My books
            </a>
            <a href="{{ route('book.create') }}" class="ui item">
                <i class="upload icon"></i>Upload Book
            </a>
            <a onclick="alert('to do')" class="ui item">Logout</a>
        @else
            <a href="{{ route('login') }}" class="ui item">Login</a>
            <a href="{{ route('register') }}" class="ui item">Register</a>
        @endif
    </div>
</div>
