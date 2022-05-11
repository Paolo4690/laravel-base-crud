@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('content')
    <main>
        <div class="container">
            <div class="d-flex my-3">
                <div class="cont-img">
                    <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <div class="cont-info ps-3">
                    <h1>{{ $comic->title }}</h1>
                    <h3>{{ $comic->type }}</h3>
                    <p>{{ $comic->series }}</p>
                    <p>{{ $comic->description }}</p>
                    <h4>{{ $comic->price }} €</h4>
                    <p>{{ $comic->sale_date }}</p>
                </div>
            </div>
            <a href="{{ route('comics.index') }}" class="ms-2 text-center btn btn-primary">See comics list</a>
        </div>

    </main>

@endsection
