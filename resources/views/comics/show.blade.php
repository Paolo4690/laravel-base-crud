@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('navbar')
    @include('../partials.headerComic')
@endsection

@section('content')
    <main>
        <div class="container">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <h1>{{ $comic->title }}</h1>
            <h3>{{ $comic->type }}</h3>
            <p>{{ $comic->series }}</p>
            <p>{{ $comic->description }}</p>
            <h4>{{ $comic->price }} €</h4>
            <p>{{ $comic->sale_date }}</p>

            <a href="{{ route('comics.index') }}" class="btn btn-primary">See comics list</a>
        </div>
    </main>

@endsection
