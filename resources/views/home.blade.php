@extends('templates.base')

@section('PageTitle', 'Home')

@section('content')
    <div class="container my-3">
        <a href="{{ route('comics.index') }}" class="m-auto btn btn-primary">See comics list</a>
    </div>
@endsection
