@extends('layouts.app')

@section('page_title')
    Products
@endsection

@section('main_content')
    
    
    @include('components.jumbotron')
    

    <section class="products">
        <div class="container">
            @include('components.products-list', [
                'title' => 'current series',
                'comics' => $comics
            ])
        </div>
    </section>

    @include('components.links')

@endsection