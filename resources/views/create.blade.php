@extends('layouts.layout')
@section('navbar')

<h1>CREATE BOOK FORM</h1>

<form action="{{route('createBook')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Title">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author">
    </div>
    <div class="mb-3">
        <label for="page" class="form-label">Page</label>
        <input name="page" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Page">
    </div>
    <div class="mb-3">
        <label for="release" class="form-label">Release Date</label>
        <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
    </div>
    @error('page')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-success">Insert</button>
</form>
@endsection
