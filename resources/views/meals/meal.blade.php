<div class="thumbnail">
    {{-- TODO: handle no picture --}}
    <img src="{{ $meal->pictures[0]->url }}">
    <div class="caption">
        <h3>{{ $meal->title}}</h3>
        <p>{{ $meal->description }}</p>
        <p>
            <a href="#" class="btn btn-primary" role="button">Buy</a>
            <a href="#" class="btn btn-default" role="button">Details</a>
        </p>
    </div>
</div>
