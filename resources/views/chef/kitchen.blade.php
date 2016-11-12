@extends('layouts.app')

@section('title', 'Kitchen')

@section('content')
    <div class="container">
        <h1>Your Kitchen</h1>
        <h2>Your Meals</h2>
        <hr>
        <div class="row">
            @for ($i = 0; $i < $meals->count(); $i++)
                <?php $meal=$meals[$i] ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://loremflickr.com/320/240/cooking?random={{ $meal->id }}">
                        <div class="caption">
                            <h3>{{ $meal->title}}</h3>
                            <p>{{ $meal->description }}</p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Buy</a>
                                <a href="#" class="btn btn-default" role="button">Details</a>
                            </p>
                        </div>
                    </div>
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