@extends('layouts.app')

@section('page_title')
    Home-page
@endsection

@section('main_content')
    
    
    @include('components.jumbotron')


    @include('components.products-list', [
                'title' => 'current series',
                'comics' => $comics
            ])


    @include('components.links')

@endsection