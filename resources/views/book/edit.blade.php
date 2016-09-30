@extends('layouts.app')

@section('content')

    <div class="ui segment">

        <form class="ui form"
              method="post"
              action="{{route('admin.book.update', $book)}}"
              enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="field">
                <label>Upload Book (leave blank if don't wanna replace)</label>
                <input type="file" name="book">
            </div>

            <div class="field">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" value="{{ $book->name }}">
            </div>

            <div class="field">
                <label>Description</label>
                <textarea type="text" name="description" rows="3"
                          placeholder="Description">{{ $book->description }}</textarea>
            </div>

            <button class="ui button" type="submit">Save</button>

        </form>

    </div>

@endsection
