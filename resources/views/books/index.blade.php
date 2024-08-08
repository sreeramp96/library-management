@extends('components.layout')

@section('book')
    <div class="book">
        @foreach ($books as $book)
            <div>
                {{ $book->name }}
            </div>
        @endforeach
    </div>

    <div class="pagination">
        {{ $books->links() }}
    </div>
@endsection
