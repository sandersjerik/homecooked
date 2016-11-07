@extends('layouts.app')

@section('content')
    <div class="jumbotron"
        style="background-image:url(https://images.unsplash.com/reserve/EnF7DhHROS8OMEp2pCkx_Dufer%20food%20overhead%20hig%20res.jpg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=f89e019b6df69f20b8e15f4f14d968fb);
               background-size:cover;
               background-repeat:no-repeat;
               min-height:500px;
               margin-top:-22px;
               background-position:center;">
        <div class="container" style="color:white;text-shadow:2px 2px 2px black;">
            <div class="row hidden-sm hidden-xs">
                <div class="col-md-6" style="border-right:1px solid white;">
                    <h1 class="pull-right" style="text-align:right;"><small style="color:white">I want to</small><br><a href="#"><strong>Eat</strong></a></h1>
                </div>
                <div class="col-md-6" style="border-left:1px solid white;">
                    <h1 class="pull-left"><small style="color:white">I want to</small><br><a href="#"><strong>Cook</strong></a></h1>
                </div>
            </div>
            <div class="visible-xs-block visible-sm-block" style="text-align:center">
                <h1><small style="color:white">I want to</small><br><a href="#"><strong>Eat</strong></a></h1>
                <h1><small style="color:white">I want to</small><br><a href="#"><strong>Cook</strong></a></h1>
            </div>
        </div>
    </div>
@endsection