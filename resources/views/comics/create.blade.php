@extends('../templates/base')

@section('PageTitle', 'Add Comics')

@section('content')
    <main>
        <div class="container">

            <form class="my-3" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="insert title new comic">
                    @error('title')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" placeholder="insert description new comic">
                    @error('description')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="thumb">Link image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}" placeholder="insert link image new comic">
                    @error('thumb')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="insert price new comic">
                    @error('price')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}" placeholder="insert series new comic">
                    @error('series')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="sale_date" value="{{ old('sale_date') }}" placeholder="insert date of sale">
                    @error('sale_date')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" placeholder="insert type new comic">
                    @error('type')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-success mt-3" onclick="return confirm('Are you sure to save this comic?')">Save</button>
            </form>

        </div>
    </main>
@endsection
