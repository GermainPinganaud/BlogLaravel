@extends('layouts.app')
@section('content')
    <h1>Ma liste de categories...</h1>

    @foreach ($categories as $category)
        <p>This is Category : {{$category->label }}</p>
    @endforeach
@endsection