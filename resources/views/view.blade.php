@extends('layouts.layout')
@section('navbar')

<h1>VIEW BOOKS</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Page</th>
            <th scope="col">Release Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookz as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->page }}</td>
            <td>{{ $book->release }}</td>
            <td>
                <a href="{{route('getBookById', ['id'=>$book->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>
                <form action="{{route('deleteBook', ['id' => $book->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
