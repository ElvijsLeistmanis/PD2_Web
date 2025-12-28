@extends('layout')
@section('content')
    <h1>{{ $title }}</h1>
    @if (count($items) > 0)
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-light">
                <tr>
                    <th>ID</td> 
                    <th>Category</td>
                    <th>&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>Update, Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No entry found</p>
    @endif
@endsection