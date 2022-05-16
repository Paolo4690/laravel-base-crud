@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('content')
    <main>
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="d-flex my-3">
                <div class="cont-img">
                    <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <div class="cont-info">
                    <h1>{{ $comic->title }}</h1>
                    <h3>{{ $comic->type }}</h3>
                    <p>{{ $comic->series }}</p>
                    <p>{{ $comic->description }}</p>
                    <h4>{{ $comic->price }} €</h4>
                    <p>{{ $comic->sale_date }}</p>
                </div>
            </div>

            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modify this comics</a>

            <button class="btn btn-danger btn-delete" data-id="{{ $comic->id }}">Delete</button>

        </div>

        <section id="confirmation-overlay" class="overlay d-none">
            <div class="popup">
                <h1>Sei sicuro di voler eliminare?</h1>
                <div class="d-flex justify-content-center" style="gap: 1rem;">
                    <button id="btn-no" class="btn btn-primary">NO</button>
                    <form  method="POST" data-base="{{ route('comics.index') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">SI</button>
                    </form>
                </div>
            </div>
        </section>

    </main>

@endsection
