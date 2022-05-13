@extends('../templates/base')

@section('PageTitle', 'modify Comics')

@section('content')
    <main>
        <div class="container">

            <form class="my-3" action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    @error('title')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
                    @error('description')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="thumb">Link image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    @error('thumb')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    @error('price')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    @error('series')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="sale_date" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                    @error('type')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-success mt-3" onclick="return confirm('Are you sure to save this comic?')">Save</button>

                <a class="btn btn-primary mt-3" href="{{ url()->previous() }}">Back</a>
            </form>
        </div>
    </main>
@endsection
