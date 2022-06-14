@extends('layouts.app')

@section('content')
<div class="container">
    <form action=" {{ route('admin.books.store') }} " method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="url" class="form-control" id="image" name="image" placeholder="https://via.placeholder.com/640x480.png/00ffcc?text=vero">
        </div>

        <div class="form-group">
            <label for="creation_year">creation_year</label>
            <input type="text" class="form-control" id="creation_year" name="creation_year">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">

            </textarea>
        </div>

        <div>
            <label for="generi">Genre</label>
            @forelse ($genre as $gen )
            <div>
                <label for="generi">{{$gen->generi}}</label>
                <input type="checkbox"
                    class=""
                    id="generi" name="generi"
                    value="{{$gen->generi_id}}" class="" width="50px;">
                @empty
                    <h2>Null</h2>
                @endforelse
            </div>


        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection
