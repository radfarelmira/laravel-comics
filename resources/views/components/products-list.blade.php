<section class="products">
    <div class="container">
        <div class="products-list">
            <h2>{{ $title }}</h2>
        
            <div class="row row-cols-2 row-cols-md-6 g-4">
                @foreach ($comics as $comic)
                    <div class="col"> 
                        <a class="card-text" href="#">
                            <div class="image">
                                <img src="{{ $comic['thumb']}}" alt="{{ $comic['series']}}">
                            </div>

                            <p>{{ $comic['series']}}</p>
                        </a>
                    </div>
                @endforeach
                
            </div>
        
        </div>
    </div>
</section>