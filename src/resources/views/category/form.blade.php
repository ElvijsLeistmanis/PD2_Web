@extends('layout')
@section('content')
    <h1>{{ $title }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">Correct errors in given values.</div>
    @endif
    <form method="post" action="/categories/put">
        @csrf
        <div class="mb-3">
            <label for="category-name" class="form-label">Category name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="category-name" name="name">
            @error('name')
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection