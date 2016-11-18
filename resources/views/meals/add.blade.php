@extends('layouts.app')

@section('title', 'Add New Meal')

@section('content')
    <div class="container">
        <h1>Add a New Meal</h1>
        <form method="POST" action="{{ url('/meals/create') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="mealtitle">Meal Title</label>
                <input type="text" id="mealtitle" name="title" class="form-control" placeholder="My Next Big Meal" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="mealdescription">Meal Description</label>
                <textarea id="mealdescription" name="description" class="form-control" placeholder="Delicious and nutritious.">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="mealpicture">Meal Picture</label>
                <input type="file" id="mealpicture" name="picture">
                <p class="help-block">Don't worry, you can always add a picture later.</p>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @if (count($errors))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection