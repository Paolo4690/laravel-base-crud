@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('navbar')
    @include('../partials.headerComic')
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-3 g-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->type }}</p>
                            <p class="card-text">{{ $comic->series }}</p>
                            <p class="card-text">{{ $comic->sale_date }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">See comic</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $comics->links() }}
        </div>
    </main>

@endsection
