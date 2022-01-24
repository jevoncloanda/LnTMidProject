@extends('layouts.layout')
@section('navbar')

<h1>UPDATE BOOK FORM</h1>

<form action="{{route('updateBook', ['id' => $book->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->title}}" placeholder="Input Title">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input name="author" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->author}}" placeholder="Input Author">
    </div>
    <div class="mb-3">
        <label for="page" class="form-label">Page</label>
        <input name="page" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->page}}" placeholder="Input Page">
    </div>
    <div class="mb-3">
        <label for="release" class="form-label">Release Date</label>
        <input name="release" type="date" class="form-control" id="formGroupExampleInput" value="{{$book->release}}" placeholder="Input Date">
    </div>
    <button type="submit" class="btn btn-success">Done</button>
</form>
@endsection
