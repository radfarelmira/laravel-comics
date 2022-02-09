<div class="products-list">
    <h2>{{ $title }}</h2>

    <div class="row row-cols-1 row-cols-md-6 g-4">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="image">
                    <img src="{{ $comic['thumb']}}" alt="{{ $comic['series']}}">
                </div>
                
                <p class="card-text">{{ $comic['series']}}</p>
            </div>
        @endforeach
        
    </div>

</div>