@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('content')
    <main>
        <div class="container">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <h1>{{ $comic->title }}</h1>
            <h3>{{ $comic->series }}</h3>
            <p>{{ $comic->description }}</p>
            <h4>{{ $comic->price }} €</h4>
            <p>{{ $comic->sale_date }}</p>
            <p>{{ $comic->type }}</p>

        </div>
    </main>

@endsection
