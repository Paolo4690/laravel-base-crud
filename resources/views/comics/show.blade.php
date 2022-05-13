@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('content')
    <main>
        <div class="container">
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

            <form class="d-inline" action="{{ route('comics.destroy' , $comic->id) }}" onclick="return confirm('Are you sure to delete?')" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete this comics</button>
            </form>

        </div>

    </main>

@endsection
