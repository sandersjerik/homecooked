@extends('layouts.app')

@section('title', 'Kitchen')

@section('content')
    <div class="container">
        <h1>Your Kitchen</h1>
        <h2>Your Meals</h2>
        <hr>
        <div class="row">
            @for ($i = 0; $i < $meals->count(); $i++)
                <div class="col-sm-6 col-md-4">
                    @include('meals.meal', ['meal' => $meals[$i]])
                </div>
                @if ($i % 2 === 1)
                    <div class="clearfix visible-xs-block visible-sm-block"></div>
                @endif
                @if ($i % 3 === 2)
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                @endif
            @endfor
        </div> 
        <p><a href="{{ url('/meals/add') }}">Add New Meal</a></p>
    </div>
@endsection