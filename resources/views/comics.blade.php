@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('main_content')

    @include('components.jumbotron')

    <section class="comics">
        <div class="comics-top">
            <div class="sm-container">
                <div class="row">
                    {{-- col left --}}
                    <div class="col-left">
                        <h2>{{ $comic_info['title']}}</h2>
                        <div class="table-head">U.S. Price: <span>{{ $comic_info['price']}}</span> </div>
                        <p>{{ $comic_info['description']}}</p>
                    </div>
                    {{-- col right --}}
                    <div class="col-right">
                        <div class="image">
                            <img src="{{ $comic_info['thumb']}}" alt="{{ $comic_info['title']}}">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="comics-bottom">
            <div class="sm-container">
                comics bottom
            </div>
        </div>
        
        
    </section>

    
@endsection