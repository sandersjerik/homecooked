@extends('layouts.app')

@section('title', 'Eat')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @for ($i = 0; $i < $meals->count(); $i++)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    @include('meals.meal', ['meal' => $meals[$i]])
                </div>
                @if ($i % 2 === 1)
                    <div class="clearfix visible-xs-block visible-sm-block"></div>
                @endif
                @if ($i % 3 === 2)
                    <div class="clearfix visible-md-block"></div>
                @endif
                @if ($i % 4 === 3)
                    <div class="clearfix visible-lg-block"></div>
                @endif
            @endfor
        </div> 
    </div>
@endsection