@extends('layouts.app')

@section('content')
    <div class="ui segment">

        <form class="ui form" method="post" action="{{route('book.store')}}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="field">
                <label>Upload Book</label>
                <input type="file" name="book" required>
            </div>

            <div class="field">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>

            <div class="field">
                <label>Description</label>
                <textarea type="text" name="description" rows="3" placeholder="Description"></textarea>
            </div>

            <button class="ui button" type="submit">Create</button>
        </form>

    </div>
@endsection
