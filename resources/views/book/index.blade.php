@extends('layouts.app')

<!-- @todo make download works -->
@push('actions')
<button onclick="alert('todo')" class="ui compact primary labeled icon button">
    <i class="download icon"></i>Download
</button>
@endpush

<!-- @todo make pagination work -->
@push('pagination')
<div class="ui right floated pagination menu" onclick="alert('todo')">
    <a class="icon item">
        <i class="left chevron icon"></i>
    </a>
    <a class="item">1</a>
    <a class="item">2</a>
    <a class="item">3</a>
    <a class="item">4</a>
    <a class="icon item">
        <i class="right chevron icon"></i>
    </a>
</div>
@endpush

@if($books->isEmpty())

@section('content')

    <div class="ui floating large message">
        <div class="header">
            There are no books... <a href="{{ route('book.create') }}">click here</a> and upload one to start
        </div>
    </div>

@endsection

@else

@section('content')

    <table class="ui celled table">
        <thead>
        <tr>
            <th>Name</th>
            <th>User</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
            <!-- @todo the user is being fetched multiple times, big issue -->
                <td>{{ $book->user->name }}</td>
                <td>{{ $book->description }}</td>
                <td class="collapsing">
                    <div class="ui basic buttons">
                        <a href="{{ route('book.edit', $book) }}" class="compact ui  button">
                            <i class="edit icon"></i>
                        </a>
                        <a href="{{ route('book.delete', $book) }}" class="compact negative  ui button">
                            <i class="close icon"></i>
                        </a>
                    </div>
                    @stack('actions')
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th colspan="4">
                @stack('pagination')
            </th>
        </tr>
        </tfoot>
    </table>

@endsection

@endif

