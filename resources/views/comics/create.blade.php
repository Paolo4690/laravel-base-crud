@extends('../templates/base')

@section('PageTitle', 'Add Comics')

@section('content')
    <main>
        <div class="container">

            <form class="my-3" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="" placeholder="insert title new comic">

                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="" placeholder="insert description new comic">

                    <label for="thumb">Link image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="" placeholder="insert link image new comic">

                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="" placeholder="insert price new comic">

                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="" placeholder="insert series new comic">

                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="" placeholder="insert type new comic">

                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </main>
@endsection
